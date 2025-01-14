<?php

namespace mohammadbay\sitemanager\Services;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use mohammadbay\sitemanager\Enums\CastsType;
use mohammadbay\sitemanager\Enums\RelationType;
use mohammadbay\sitemanager\Http\Repositories\ComponentItemRepository;
use mohammadbay\sitemanager\Http\Repositories\ComponentRepository;
use mohammadbay\sitemanager\Models\AdminComponent;

class ComponentItemService
{

    public function __construct(public ComponentItemRepository $repository)
    {
    }

    public function index($id)
    {
        $types = resolve(AdminComponentTypeService::class)->all();
        $models = resolve(ComponentRepository::class)->all(relations: ['module']);
        $items = $this->repository->all(inputs: array('component_id' => $id));

        $data = new \stdClass();
        $data->types = $types;
        $data->models = $models;
        $data->items = $items;

        return $data;
    }

    public function store(Request $request, $id)
    {

        $validated = $request->validate([
            'fields.*.id' => 'required|integer',
            'fields.*.name' => 'required|string',
            'fields.*.title' => 'required|string',
//            'fields.*.type_id' => 'required_if:relation_component_id,|nullable|exists:admin_component_types,id',
            'fields.*.type_id' => 'required_if:relation_component_id,|nullable',
            'fields.*.relation_component_id' => 'nullable|integer',
            'fields.*.relation_type' => 'nullable|string',
            'fields.*.required' => 'required|boolean',
            'fields.*.in_list' => 'required|boolean',
        ]);
        $ids = array_column($validated['fields'], 'id');

        $this->repository->queryFull(inputs: ['component_id' => $id])->whereNotIn('id', $ids)->delete();
        foreach ($validated['fields'] as $index => $fieldData) {
            if ($fieldData['id'] != 0) {
                $item = $this->repository->find($fieldData['id']);
                unset($fieldData['id']);
                $this->repository->update($item, $fieldData);
            } else {
                $fieldData['component_id'] = $id;
                $this->repository->create($fieldData);
            }

        }
    }

    public function generateCode($id)
    {
        $items = $this->repository->all(inputs: ['component_id' => $id], relations: ['type']);

        $component = resolve(ComponentRepository::class)->findWithRelations($id, ['module']);

        $this->generateMigrationCode($items, $component);

        $this->generateModelCode($items, $component);

        $this->generateModelRelation($items, $component);

        $this->generateValidationCode($items, $component);

        $this->generateBlade($items, $component);

    }

    public function generateMigrationCode($items, $component)
    {
        $files = File::allFiles(base_path("Modules/{$component->module->name}/Database/migrations"));
        foreach ($files as $file) {
            if (Str::contains($file->getFilename(), 'create_' . Str::plural(Str::snake($component->name)) . '_table')) {
                $content = File::get($file->getRealPath());

                // خالی کردن محتوای بین {} در تابع Schema::create
                $content = preg_replace('/Schema::create\(.*?,\s*function\s*\(.*?\)\s*\{.*?\}/s', 'Schema::create(\''.Str::plural(Str::snake($component->name)).'\', function (Blueprint $table) { });', $content);

                // اضافه کردن فیلدهای پیش‌فرض
                $defaultFields = "            \$table->id();\n";
                $defaultFields .= "            \$table->softDeletes();\n";
                $defaultFields .= "            \$table->timestamps();\n";

                // ایجاد رشته‌ی فیلدها از داده‌های ورودی
                $fieldsString = '';
//                $regularItem = collect(clone($items))->whereNotNull('type')->values();
                foreach ($items as $field) {
                    if ($field['type']) {
                        $type = $field['type']['type'];
                        $name = $field['name'];
                        $nullable = !$field['required'];
                        $comment = $field['title'];

                        // ایجاد خط فیلد
                        $fieldLine = "\$table->{$type}('{$name}')";
                        if ($nullable) {
                            $fieldLine .= "->nullable()";
                        }

                        // اگر فیلد دارای توضیحاتی باشد، آن را اضافه کنید
                        if ($comment) {
                            $fieldLine .= "->comment('{$comment}')";
                        }

                        $fieldLine .= ";";
                        $fieldsString .= "\n            " . $fieldLine;
                    }
                }

//                dd('Schema::create(\''.Str::plural(Str::snake($component->name)).'\', function (Blueprint $table) { });');
//                dd('Schema::create(\''.Str::plural(Str::snake($component->name)).'\', function (Blueprint $table) {' . "\n" . $defaultFields . $fieldsString . "\n        }");
                // جایگذاری فیلدهای جدید در محتوای خالی شده
                $content = str_replace(
                    'Schema::create(\''.Str::plural(Str::snake($component->name)).'\', function (Blueprint $table) { });',
                    'Schema::create(\''.Str::plural(Str::snake($component->name)).'\', function (Blueprint $table) {' . "\n" . $defaultFields . $fieldsString . "\n        }",
                    $content
                );
                // ذخیره تغییرات در فایل migration
                File::put($file->getRealPath(), $content);
            }
        }
    }

    public function generateModelCode($items, $component)
    {
        $modelPath = base_path("Modules/{$component->module->name}/App/Models/{$component->name}.php");
        if (File::exists($modelPath)) {
            // دریافت محتوای فایل مدل
            $content = File::get($modelPath);

            // الگوی پیدا کردن بخش casts
            $castsPattern = '/protected\s+\$casts\s*=\s*\[([^\]]*)\];/s';

            $fillablePattern = '/protected\s+\$fillable\s*=\s*\[([^\]]*)\];/s';

            if (preg_match($castsPattern, $content, $matches)) {
                $castsArray = $matches[1];

                // ایجاد casts جدید
                $newCasts = '';

                foreach ($items as $field) {
                    if ($field['type']) {
                        $fieldName = $field['name'];
                        $fieldType = $field['type']['type'];

                        $fieldTypeEnum = CastsType::tryFrom($fieldType);

                        if ($fieldTypeEnum) {
                            $castType = CastsType::toCast($fieldTypeEnum);

                            // چک کنید که اگر cast وجود ندارد، اضافه شود
                            if (!Str::contains($castsArray, "'$fieldName'")) {
                                $newCasts .= "\n        '$fieldName' => '$castType',";
                            }
                        }
                    }
                }

                // اگر casts جدیدی اضافه شده است، آنها را به بخش casts موجود اضافه کنید
                if (!empty($newCasts)) {
                    $newCasts = $castsArray . $newCasts;
                    $content = preg_replace($castsPattern, "protected \$casts = [$newCasts\n    ];", $content);
                }
            } else {
                // اگر بخش casts وجود ندارد، آن را اضافه کنید
                $newCasts = "protected \$casts = [";
                foreach ($items as $field) {
                    if ($field['type']) {
                        $fieldName = $field['name'];
                        $fieldType = $field['type']['type'];

                        $fieldTypeEnum = CastsType::tryFrom($fieldType);

                        if ($fieldTypeEnum) {
                            $castType = CastsType::toCast($fieldTypeEnum);
                            $newCasts .= "\n        '$fieldName' => '$castType',";
                        }
                    }
                }
                $newCasts .= "\n    ];";

                // اضافه کردن بخش casts جدید به مدل
                $content = preg_replace('/class\s+' . $component->name . '\s+extends\s+Model\s*\{/', "$0\n    $newCasts", $content);
            }

            if (preg_match($fillablePattern, $content, $matches)) {
                $fillableArray = $matches[1];

                // ایجاد fillable جدید
                $newFillable = '';
                foreach ($items as $field) {
                    if ($field['type']) {
                        $fieldName = $field['name'];

                        // چک کنید که اگر fillable وجود ندارد، اضافه شود
                        if (!Str::contains($fillableArray, "'$fieldName'")) {
                            $newFillable .= "\n        '$fieldName',";
                        }
                    }
                }

                // اگر fillable جدیدی اضافه شده است، آنها را به بخش fillable موجود اضافه کنید
                if (!empty($newFillable)) {
                    $newFillable = $fillableArray . $newFillable;
                    $content = preg_replace($fillablePattern, "protected \$fillable = [$newFillable\n    ];", $content);
                }
            } else {
                // اگر بخش fillable وجود ندارد، آن را اضافه کنید
                $newFillable = "protected \$fillable = [";
                foreach ($items as $field) {
                    if ($field['type']) {
                        $fieldName = $field['name'];
                        $newFillable .= "\n        '$fieldName',";
                    }
                }
                $newFillable .= "\n    ];";

                // اضافه کردن بخش fillable جدید به مدل
                $content = preg_replace('/class\s+' . $component->name . '\s+extends\s+Model\s*\{/', "$0\n    $newFillable", $content);
            }

            // ذخیره تغییرات در فایل مدل
            File::put($modelPath, $content);
        }
    }

    public function generateValidationCode($items, $component)
    {

        $componentName = $component->name;

        $requestPath = base_path("Modules/{$component->module->name}/App/Http/Requests/{$component->name}/Validate{$component->name}Request.php");

        if (File::exists($requestPath)) {
            // دریافت محتوای فایل
            $content = File::get($requestPath);

            // ایجاد رشته‌ی جدید برای rules و attributes
            $rulesString = "
            'action' => 'required|string|in:create,update',
            'id' => 'required_if:action,update|nullable|integer',";
            $attributesString = '';

            foreach ($items as $field) {
                $fieldName = $field['name'];
                if ($field['relation_component_id'] == 0) {
                    // اگر type مشخص شده باشد
                    $fieldType = CastsType::tryFrom($field['type']['type']); // استفاده از enum برای نوع فیلد

                    if ($fieldType) {
                        // تولید rule برای فیلد
                        $validationRule = $fieldType->toValidationRule();
                        $rulesString .= "\n            '$fieldName' => '$validationRule";
                        if ($field['required']) {
                            $rulesString .= '|required';
                        }
                        $rulesString .= "',";

                        // تولید attribute برای فیلد
                        $attributesString .= "\n            '$fieldName' => '{$field['title']}',";
                    }
                } else {
                    // اگر type مشخص نشده باشد (مثال: ریلیشن چند به چند)
                    if ($field['relation_component_id'] != 0) {
                        if ($field['type']) {
                            // بررسی کنید که آیا نام فیلد از قبل دارای پسوند _id است یا نه
                            $fieldIdName = Str::endsWith($fieldName, '_id') ? $fieldName : "{$fieldName}_id";

// حذف _id از ته $fieldIdName برای ایجاد relatedTableName
                            $relatedTableName = Str::plural(Str::snake(Str::beforeLast($fieldIdName, '_id')));

                            $rulesString .= "\n            '$fieldIdName' => 'numeric|required|exists:{$relatedTableName},id',";

                            // تولید attribute برای فیلد
                            $attributesString .= "\n            '$fieldIdName' => '{$field['title']}',";
                        } else {
                            $relatedComponent = resolve(ComponentRepository::class)
                                ->find($field['relation_component_id']);
                            if ($relatedComponent) {
                                $relatedNameSnake = Str::snake($relatedComponent->name) . '_ids';
                                $relatedTableName = Str::plural(Str::snake($relatedComponent->name));
                                // تولید ولیدیشن برای ریلیشن چند به چند
                                $rulesString .= "\n            '$relatedNameSnake' => 'nullable|array',";
                                $rulesString .= "\n            '$relatedNameSnake.*' => 'nullable|exists:{$relatedTableName},id',";

                                // تولید attribute
                                $attributesString .= "\n            '$relatedNameSnake' => '{$relatedComponent->name}',";
                            }

                        }
                    }
                }
            }

            // پیدا کردن و جایگزینی بخش rules
            $rulesPattern = '/public function rules\(\): array\s*\{\s*return\s*\[([^\]]*)\];/s';
            $content = preg_replace($rulesPattern, "public function rules(): array\n    {\n        return [$rulesString\n        ];", $content);

            // پیدا کردن و جایگزینی بخش attributes
            $attributesPattern = '/public function attributes\(\): array\s*\{\s*return\s*\[([^\]]*)\];/s';
            $content = preg_replace($attributesPattern, "public function attributes(): array\n    {\n        return [$attributesString\n        ];", $content);

            // ذخیره تغییرات در فایل کلاس ValidateBookRequest
            File::put($requestPath, $content);

        }
    }

    public function generateBlade($items, $component)
    {
        // دریافت اطلاعات component
        $componentName = $component->name;
        $componentTitle = $component->title;
        $snakeComponentName = Str::snake($componentName);

        // تعیین مسیر فایل Blade
        $bladePath = base_path("Modules/{$component->module->name}/resources/views/admin/{$snakeComponentName}/index.blade.php");

        // بررسی وجود دایرکتوری و ایجاد آن در صورت لزوم
        $bladeDir = dirname($bladePath);
        if (!File::isDirectory($bladeDir)) {
            File::makeDirectory($bladeDir, 0755, true);
        }

        // دریافت محتوای stub
        $stub = File::get(base_path('packages/mohammadbay/sitemanager/stubs/blade.stub'));

        $fieldsHtml = collect($items)->map(function ($item) {
            $fieldName = $item['name'];
            $fieldTitle = $item['title'];
            $fieldType = $item['type'] ? $item['type']['type'] : null;

            $inputElement = $fieldType === 'boolean'
                ? "<select class=\"form-control\" name=\"{$fieldName}\" id=\"{$fieldName}\">
               <option value=\"1\">فعال</option>
               <option value=\"0\">غیرفعال</option>
           </select>"
                : "<input type=\"{$fieldType}\" name=\"{$fieldName}\" id=\"{$fieldName}\" placeholder=\"{$fieldTitle}\" class=\"form-control\">";

            return "<label>{$fieldTitle}</label>
            <div class=\"form-group\">
                {$inputElement}
            </div>";
        })->implode("\n");

        $tableHeadRow = "";
        $columnsJsArray = "[
             {data: 'DT_RowIndex', name: 'DT_RowIndex'},";

        foreach ($items as $item) {
            $tableHeadRow .= "<th>{$item['title']}</th>";
            $columnsJsArray .= "{data: '" . $item['name'] . "', name: '" . $item['name'] . "'},";
        }
        $columnsJsArray .= "{data: 'action', name: 'action', orderable: false, searchable: false}]";

        $baseUrl = "admin_" . Str::snake($component->module->name) . "_" . Str::snake($snakeComponentName);

// جایگزینی placeholder ها با داده‌های واقعی
        $content = str_replace(
            ['{{ $componentName }}', '{{ $fields }}', '{{ $fieldsHtml }}', '{{ $columns }}', '{{ $tableHeadRow }}', '{{ $baseUrl }}', '{{ $componentTitle }}'],
            [$componentName, $fieldsHtml, $fieldsHtml, $columnsJsArray, $tableHeadRow, $baseUrl, $componentTitle],
            $stub
        );

        // ایجاد فایل Blade نهایی
        File::put($bladePath, $content);

        return "Blade file created successfully at {$bladePath}";
    }


    public
    function generateModelRelation($items, $component)
    {
        $relationItem = collect(clone($items))->where('relation_component_id', '>', 0)->values();

        foreach ($relationItem as $item) {
            if ($item['relation_component_id'] != 0) {
                $relatedComponent = resolve(ComponentRepository::class)->findWithRelations(id: $item->relation_component_id, relations: ['module']);

                if ($relatedComponent) {
                    $relatedModelClass = "Modules\\{$relatedComponent->module->name}\\App\\Models\\{$relatedComponent->name}";
                    $relatedModelPath = base_path("Modules/{$relatedComponent->module->name}/App/Models/{$relatedComponent->name}.php");

                    // باز کردن مدل اصلی
                    $modelClass = "Modules\\{$component->module->name}\\App\\Models\\{$component->name}";
                    $modelPath = base_path("Modules/{$component->module->name}/App/Models/{$component->name}.php");

                    if (File::exists($modelPath)) {
                        $content = File::get($modelPath);

                        $relationKey = $item['name'];
                        $relationName = $this->getRelationName($relatedComponent->name, $item->relation_type);

                        $relationMethod = $item->relation_type;
                        $relationMethod = RelationType::get_values_keys()[$relationMethod];
//                        $content = $this->removeExistingRelation($content, lcfirst($relationName));
                        $relationCode = $this->generateRelationCode($relationMethod,
                            $relationKey,
                            $relatedComponent->name,
                            lcfirst($relationName),
                            $component->name, // نام کامپوننت اصلی
                            $relatedComponent->name);

                        // اضافه کردن 'use' کلاس مرتبط در مدل اصلی
                        $content = $this->addUseStatement($content, $relatedModelClass);

                        // پاک کردن تابع موجود اگر قبلا تعریف شده
                        $content = $this->removeExistingRelation($content, lcfirst($relationName));

                        $content = $this->appendRelationToModel($content, $relationCode);
                        File::put($modelPath, $content);

                    }

                    // حالا باید ریلیشن در مدل مرتبط نوشته شود
                    if (File::exists($relatedModelPath)) {
                        $content = File::get($relatedModelPath);

                        $relationKey = $component['name'];
                        $reverseRelationMethod = $this->getReverseRelationMethod($item->relation_type);

                        $relationName = $this->getRelationName($component->name, $reverseRelationMethod);

                        $relationCode = $this->generateRelationCode($relationMethod,
                            $relationKey,
                            $relatedComponent->name,
                            lcfirst($relationName),
                            $relatedComponent->name,
                            $component->name);

                        // اضافه کردن 'use' کلاس مرتبط در مدل مربوطه
                        $content = $this->addUseStatement($content, $modelClass);


                        // پاک کردن تابع موجود اگر قبلا تعریف شده
                        $content = $this->removeExistingRelation($content, lcfirst($relationName));

                        $content = $this->appendRelationToModel($content, $relationCode);
                        File::put($relatedModelPath, $content);

                    }
                    // اگر رابطه BelongsToMany باشد، مدل و مایگریشن جدید ایجاد کنید
                    if ($item['relation_type'] === RelationType::BelongsToMany->value or $item['relation_type'] === RelationType::BelongsToMany->name) {
                        $this->createPivotModel($component, $relatedComponent);
                    }

                }
            }
        }
    }

    public function addUseStatement($content, $className)
    {
        if (strpos($content, "use $className;") === false) {
            // پیدا کردن محل namespace
            if (preg_match('/namespace [^;]+;/', $content, $matches)) {
                // اضافه کردن 'use' بعد از namespace
                $namespace = $matches[0];
                return str_replace($namespace, "$namespace\nuse $className;", $content);
            } else {
                // در صورتی که namespace پیدا نشد، 'use' را در بالای فایل اضافه می‌کنیم
                return "<?php\nuse $className;\n" . $content;
            }
        }
        return $content;
    }

    public function generateRelationCode($relationMethod, $relationKey, $relatedModelClass, $relationName, $componentName, $relatedComponentName)
    {
        // اگر نوع رابطه `BelongsToMany` باشد
        if ($relationMethod === 'belongsToMany') {
            // تولید نام جدول واسط
            $pivotTableName = $this->getPivotTableName($componentName, $relatedComponentName);

            // کلیدهای خارجی برای رابطه
            $foreignKey = Str::snake($componentName) . '_id';
            $relatedForeignKey = Str::snake($relatedComponentName) . '_id';

            // تولید کد برای رابطه BelongsToMany
            return "
    public function $relationName()
    {
        return \$this->$relationMethod(
            $relatedModelClass::class,
            '$pivotTableName',
            '$foreignKey',
            '$relatedForeignKey'
        );
    }
    ";
        }

        // برای سایر انواع روابط
        return "
    public function $relationName()
    {
        return \$this->$relationMethod($relatedModelClass::class, '$relationKey', 'id');
    }
    ";
    }


    public function appendRelationToModel($content, $relationCode)
    {
        // اضافه کردن ریلیشن به انتهای فایل مدل قبل از بسته شدن کلاس
        return preg_replace('/}\s*$/', "\n$relationCode\n}", $content);
    }

    public function getReverseRelationMethod($relationType)
    {
        // این تابع نوع ریلیشن را برعکس می‌کند
        return match ($relationType) {
            'HasOne' => 'belongsTo',
            'HasMany' => 'belongsTo',
            'BelongsTo' => 'hasMany',
            'BelongsToOne' => 'hasOne',
//            'BelongsToMany' => 'hasMany',
            'BelongsToMany' => 'belongsToMany',
            'MorphOne' => 'morphTo',
            'MorphMany' => 'morphTo',
            'MorphTo' => 'morphOne',
            'MorphToMany' => 'morphMany',
            default => throw new Exception("Invalid relation type"),
        };
    }

    public function getRelationName($baseName, $relationType)
    {
        // اگر نوع ریلیشن جمع باشد، حرف s را به انتهای نام تابع اضافه می‌کند
        if (in_array($relationType, ['hasMany', 'belongsToMany','BelongsToMany', 'morphMany', 'morphToMany'])) {
            return Str::plural($baseName);
        }
        return Str::singular($baseName);
    }

    public function removeExistingRelation($content, $relationName)
    {
        // از regex استفاده می‌کنیم تا تابع مربوط به ریلیشن را پیدا کرده و پاک کنیم
        $pattern = "/public function {$relationName}\(.*?\n    \{.*?\n    \}/s";

        // تابع مربوطه را حذف می‌کنیم
        return preg_replace($pattern, '', $content);
    }


    public function createPivotModel($component, $relatedComponent)
    {
        $pivotModelName = $this->getPivotModelName($component->name, $relatedComponent->name);
        $pivotModelPath = base_path("Modules/{$component->module->name}/App/Models/{$pivotModelName}.php");

        // ایجاد مدل جدید برای جدول واسط
        $pivotModelContent = $this->getPivotModelStub($pivotModelName, $component->name, $relatedComponent->name);
        File::put($pivotModelPath, $pivotModelContent);

        $snakeComponentName = Str::snake($component->name);
        $snakeRelatedComponentName = Str::snake($relatedComponent->name);

        // ایجاد مایگریشنی برای جدول واسط
        $pivotMigrationName = "create_{$snakeComponentName}_{$snakeRelatedComponentName}_table";

        $pivotMigrationContent = $this->getPivotMigrationStub($pivotModelName, $component->name, $relatedComponent->name);
        $migrationExist = false;
        $files = File::allFiles(base_path("Modules/{$component->module->name}/Database/migrations"));
        foreach ($files as $file) {
            if (Str::contains($file->getFilename(), $pivotMigrationName)) {
                $migrationExist = true;
                File::put($file->getRealPath(), $pivotMigrationContent);
            }
        }

        if (!$migrationExist){
            $pivotMigrationPath = base_path("Modules/{$component->module->name}/Database/migrations/" . date('Y_m_d_His') . "_{$pivotMigrationName}.php");
            File::put($pivotMigrationPath, $pivotMigrationContent);
        }

    }

    public
    function getPivotModelName($componentName, $relatedComponentName)
    {
        return ucfirst($componentName) . ucfirst($relatedComponentName);
    }

    public
    function getPivotModelStub($pivotModelName, $componentName, $relatedComponentName)
    {
        $snakeComponentName = Str::snake($componentName);
        $snakeRelatedComponentName = Str::snake($relatedComponentName);
        return <<<PHP
<?php

namespace Modules\\{$componentName}\\App\\Models;

use Illuminate\Database\Eloquent\Model;

class $pivotModelName extends Model
{
    protected \$table = '{$snakeComponentName}_{$snakeRelatedComponentName}';
}
PHP;
    }

    public
    function getPivotMigrationStub($pivotModelName, $componentName, $relatedComponentName)
    {
        $snakeComponentName = Str::snake($componentName);
        $snakeRelatedComponentName = Str::snake($relatedComponentName);
        return <<<PHP
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('{$snakeComponentName}_{$snakeRelatedComponentName}', function (Blueprint \$table) {
            \$table->id();
            \$table->bigInteger('{$snakeComponentName}_id');
            \$table->bigInteger('{$snakeRelatedComponentName}_id');
            \$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('{$snakeComponentName}_{$snakeRelatedComponentName}');
    }
};
PHP;
    }

    public function getPivotTableName($componentName, $relatedComponentName)
    {
        $components = [Str::snake($componentName), Str::snake($relatedComponentName)];
        sort($components); // مرتب‌سازی به ترتیب حروف الفبا
        return implode('_', $components); // ترکیب دو نام
    }


}

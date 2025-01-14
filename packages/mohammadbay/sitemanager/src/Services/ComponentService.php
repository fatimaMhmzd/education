<?php

namespace mohammadbay\sitemanager\Services;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use mohammadbay\sitemanager\Http\Repositories\ComponentRepository;
use mohammadbay\sitemanager\Http\Repositories\ComponentTypeRepository;
use Illuminate\Http\Request;
use mohammadbay\sitemanager\Http\Repositories\ModuleRepository;
use mohammadbay\sitemanager\Http\Requests\Component\ValidateComponentRequest;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\File;

class ComponentService
{
    public function __construct(public ComponentRepository $repository)
    {
    }

    public function index()
    {
        $modules = resolve(ModuleService::class)->all();
        $data = new \stdClass();
        $data->modules = $modules;

        return $data;
    }

    public function list(Request $request): \Illuminate\Http\JsonResponse
    {
        $data = $this->repository->all();
        return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function ($row) {
                $btn = '<a class="m-1 update_tag" data-url="' . route('site_manager_admin_component_delete', $row->id) . '"><i class="text-primary fa fa-edit"></i></a>
                        <a class="delete_tag" data-url="' . route('site_manager_admin_component_delete', $row->id) . '"><i class="text-danger fa fa-trash"></i></a>
                        <a href="' . route('site_manager_admin_component_item_index', $row->id) . '"><i class="text-success fa fa-list"></i></a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make();
    }

    public function detail($id)
    {
        return $this->repository->find($id) ?? throw new \Exception(trans("custom.defaults.not_found"));
    }

    public function storeOrUpdate(ValidateComponentRequest $request): void
    {
        $inputs = $request->validated();
        if ($inputs['action'] == 'create') {

            $existFilter = ['name' => $inputs['name'], 'module_id' => $inputs['module_id']];
            $hasRecord = $this->repository->queryFull(inputs: $existFilter)->first();
            if ($hasRecord) {
                throw new \Exception(trans("custom.defaults.repetitive"));
            }
            $moduleName = resolve(ModuleService::class)->detail($inputs['module_id'])?->name;
            DB::beginTransaction();
            try {
                unset($inputs['action']);
                $this->repository->create($inputs);
                $this->createClasees(title: $inputs['name'], moduleName: $moduleName, needSoftDelete: $inputs['soft_delete']);
                DB::commit();
            } catch (\Exception $exception) {
                DB::rollBack();
                throw new \Exception(trans("custom.defaults.failed"));
            }
        } else {
            DB::beginTransaction();
            try {
                unset($inputs['action']);
                $oldRecord = $this->repository->findOrFail($inputs['id']);
                $this->repository->updateById($inputs);
                DB::commit();
            } catch (\Exception $exception) {
                DB::rollBack();
                throw new \Exception(trans("custom.defaults.failed"));
            }
        }
    }

    public function delete($id): void
    {
        $record = $this->repository->find($id);
        if (!$record) {
            throw new \Exception(trans("custom.defaults.not_found"));
        }

        DB::beginTransaction();
        try {
            $this->deleteFiles($record->name,$record->module->name);
            $this->repository->delete($record);
            DB::commit();
        } catch (\Exception $exception) {
            DB::rollBack();
            throw new \Exception(trans("custom.defaults.failed"));
        }
    }

    public function createClasees($title, $moduleName, $needSoftDelete = false)
    {

        try {
            $modelName = $title;

            // ساخت مدل با یا بدون SoftDeletes
            Artisan::call('make:model-soft-delete', [
                'module' => $moduleName,
                'name' => $modelName,
                '--needSoftDelete' => $needSoftDelete ? 'true' : 'false'
            ]);

            // ساخت کنترلر
            Artisan::call('module:make-controller', [
                'controller' => $modelName . 'Controller',
                'module' => $moduleName
            ]);
            Artisan::call('make:admin-controller', [
                'module' => $moduleName,
                'name' => $modelName
            ]);
            Artisan::call('make:api-controller', [
                'module' => $moduleName,
                'name' => $modelName
            ]);


            $this->cleanControllerFile($moduleName, $modelName);


            // ساخت مایگریشن
            Artisan::call('module:make-migration', [
                'name' => 'create_' . Str::plural(Str::snake($modelName)) . '_table',
                'module' => $moduleName
            ]);

            Artisan::call('make:repository', [
                'module' => $moduleName,
                'name' => $modelName,
            ]);

            Artisan::call('make:service', [
                'module' => $moduleName,
                'name' => $modelName,
            ]);

            Artisan::call('make:validate-delete-request', [
                'module' => $moduleName,
                'name' => $modelName,
            ]);

            Artisan::call('make:validate-request', [
                'module' => $moduleName,
                'name' => $modelName,
            ]);
        } catch (\Exception $exception) {
            throw new \Exception(trans("custom.defaults.failed"));
        }
    }

    public function updateClasses($title, $moduleName, $needSoftDelete = false)
    {
        try {
            $modelName = $title;

            // ساخت مدل با یا بدون SoftDeletes
            Artisan::call('make:model-soft-delete', [
                'module' => $moduleName,
                'name' => $modelName,
                '--needSoftDelete' => $needSoftDelete ? 'true' : 'false'
            ]);

            // ساخت کنترلر
            Artisan::call('module:make-controller', [
                'controller' => $modelName . 'Controller',
                'module' => $moduleName
            ]);


            // ساخت مایگریشن
            Artisan::call('module:make-migration', [
                'name' => 'create_' . Str::plural(Str::snake($modelName)) . '_table',
                'module' => $moduleName
            ]);
        } catch (\Exception $exception) {
            throw new \Exception(trans("custom.defaults.failed"));
        }
    }

    public function cleanControllerFile($moduleName, $modelName)
    {
        $controllerPath = base_path("Modules/{$moduleName}/App/Http/Controllers/{$modelName}Controller.php");

        if (File::exists($controllerPath)) {
            // خالی کردن محتوا و نوشتن ساختار پایه کلاس کنترلر
            $controllerContent = "<?php\n\nnamespace Modules\\{$moduleName}\\App\\Http\\Controllers;\n\nuse Illuminate\\Http\\Request;\nuse Illuminate\\Routing\\Controller;\n\nclass {$modelName}Controller extends Controller\n{\n    //\n}\n";
            File::put($controllerPath, $controllerContent);
        }
    }

    public function createDuplicateController($moduleName, $modelName, $type)
    {

        // چک کردن اینکه فایل اصلی وجود دارد
        $originalPath = base_path("Modules/{$moduleName}/App/Http/Controllers");
        $originalFile = $originalPath . "/{$modelName}Controller.php";
        if (!File::exists($originalFile)) {
            return "Original controller does not exist.";
        }

        // خواندن محتوای فایل اصلی
        $controllerContent = File::get($originalFile);

        // اضافه کردن کلمه 'api' به ته namespace
        $controllerContent = preg_replace('/namespace\s+([^;]+);/', "namespace $1\\$type;", $controllerContent);

        // مسیر هدف: ایجاد پوشه جدید در کنار پوشه اصلی
        $targetDir = dirname($originalFile) . "/$type";
        $targetPath = $targetDir . '/' . basename($originalFile);

        // ایجاد پوشه اگر وجود ندارد
        if (!File::exists($targetDir)) {
            File::makeDirectory($targetDir, 0755, true);
        }

        // نوشتن فایل جدید در مسیر هدف
        File::put($targetPath, $controllerContent);

        return "Controller duplicated successfully to {$targetPath}.";
    }

    public function all()
    {
        return $this->repository->all();
    }

    public function deleteFiles($title, $moduleName)
    {
        $modulePath = base_path("Modules/{$moduleName}/");

        /*delete controllers*/
        if (File::exists($modulePath . "App/Http/Controllers/Admin/{$title}Controller.php")) {
            File::delete($modulePath . "App/Http/Controllers/Admin/{$title}Controller.php");
        }
        if (File::exists($modulePath . "App/Http/Controllers/Api/{$title}Controller.php")) {
            File::delete($modulePath . "App/Http/Controllers/Api/{$title}Controller.php");
        }
        if (File::exists($modulePath . "App/Http/Controllers/{$title}Controller.php")) {
            File::delete($modulePath . "App/Http/Controllers/{$title}Controller.php");
        }

        /*delete model*/
        if (File::exists($modulePath . "App/Models/{$title}.php")) {
            File::delete($modulePath . "App/Models/{$title}.php");
        }

        /*delete repository*/
        if (File::exists($modulePath . "App/Http/Repositories/{$title}Repository.php")) {
            File::delete($modulePath . "App/Http/Repositories/{$title}Repository.php");
        }

        /*delete validate*/
        if (File::exists($modulePath . "App/Http/Requests/{$title}")) {
            File::deleteDirectory($modulePath . "App/Http/Requests/{$title}");
        }

        /*delete migration file*/
        $files = File::allFiles($modulePath . "Database/migrations");

        foreach ($files as $file) {
            if (Str::contains($file->getFilename(), 'create_' . Str::plural(Str::snake($title)) . '_table')) {
                File::delete($file->getPathname());
            }
        }

        /*delete service*/
        if (File::exists($modulePath . "Services/{$title}Service.php")) {
            File::delete($modulePath . "Services/{$title}Service.php");
        }

        /*delete route*/
        $apiRoutePath = $modulePath . "routes/api.php";
        $adminRoutePath = $modulePath . "routes/admin.php";
        $apiFileContent = file_get_contents($apiRoutePath);
        $adminFileContent = file_get_contents($adminRoutePath);

        $adminControllerUse = "use Modules\\{$moduleName}\\App\\Http\\Controllers\\Admin\\{$title}Controller;";
        $apiControllerUse = "use Modules\\{$moduleName}\\App\\Http\\Controllers\\Api\\{$title}Controller;";


        $asModelName = Str::snake($title);
        $prefixModelName = Str::kebab($title);

        $routeDefinition = <<<EOD
    // Routes for {$title} module
    Route::group(['prefix' => '{$prefixModelName}', 'as' => '{$asModelName}_'], function () {
        Route::get('/', [{$title}Controller::class, 'index'])->name('index');
        Route::post('/', [{$title}Controller::class, 'storeOrUpdate'])->name('storeOrUpdate');
        Route::get('/list', [{$title}Controller::class, 'list'])->name('list');
        Route::get('/{id}', [{$title}Controller::class, 'detail'])->name('detail');
        Route::delete('/{id}', [{$title}Controller::class, 'delete'])->name('delete');
    });
EOD;
        if (strpos($adminFileContent, $routeDefinition) !== false) {
            $newContent = str_replace($routeDefinition, '', $adminFileContent);
            $newContent = str_replace($adminControllerUse, '', $newContent);
            file_put_contents($adminRoutePath, $newContent);
        }
        if (strpos($apiFileContent, $routeDefinition) !== false) {
            $newContent = str_replace($routeDefinition, '', $apiFileContent);
            $newContent = str_replace($apiControllerUse, '', $newContent);
            file_put_contents($apiRoutePath, $newContent);
        }



    }
}

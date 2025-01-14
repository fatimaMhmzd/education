<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use mohammadbay\sitemanager\Http\Repositories\ComponentItemRepository;
use mohammadbay\sitemanager\Models\AdminComponent;
use mohammadbay\sitemanager\Models\AdminComponentItem;

class GenerateCode extends Command
{
    protected $signature = 'module:delete {component_id}';
    protected $description = 'creating code';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $componentId = $this->argument('component_id');

        $itemFilters = array('component_id'=>$componentId);
        $items = resolve(ComponentItemRepository::class)->all(inputs:$itemFilters,relations:['type']);
    }

    public function modelCode($fields)
    {
        $modelPath = app_path('Models/User.php'); // مسیر فایل مدل

// خواندن محتوای فایل مدل
        $modelContent = file_get_contents($modelPath);

// پیدا کردن موقعیت بخش های خاصی از کد (برای اضافه کردن متدها و cast)
        $castsPosition = strpos($modelContent, 'protected $casts = [');
        $methodsPosition = strrpos($modelContent, '}'); // آخرین } که پایان کلاس است

// اضافه کردن فیلدهای cast
        $castFields = '';
        foreach ($fields as $field) {
            $castFields .= "        '{$field}' => 'string',\n"; // فرض بر اینکه cast 'string' است
        }
        $castFields = "    protected \$casts = [\n" . $castFields . "    ];\n\n";

// اضافه کردن متدهای getter و setter
        $methods = '';
        foreach ($fields as $field) {
            $camelField = ucfirst($field);
            $methods .= <<<EOT

    public function get{$camelField}Attribute(\$value)
    {
        return \$this->attributes['{$field}'];
    }

    public function set{$camelField}Attribute(\$value)
    {
        \$this->attributes['{$field}'] = \$value;
    }

EOT;
        }

// اضافه کردن بخش casts به فایل مدل
        if ($castsPosition === false) {
            // اگر بخش casts وجود ندارد، اضافه می‌کنیم
            $modelContent = substr_replace($modelContent, $castFields, $methodsPosition - 1, 0);
        } else {
            // اگر بخش casts وجود دارد، فیلدها را به آن اضافه می‌کنیم
            $modelContent = substr_replace($modelContent, $castFields, $castsPosition, 0);
        }

// اضافه کردن متدهای getter و setter به فایل مدل
        $modelContent = substr_replace($modelContent, $methods, $methodsPosition - 1, 0);

// نوشتن محتوای تغییر یافته به فایل مدل
        file_put_contents($modelPath, $modelContent);
    }

    public function migrationCode($fields)
    {
        $migrationPath = base_path('database/migrations/2024_01_01_000000_create_users_table.php');

// خواندن محتوای فایل مایگریشن
        $migrationContent = file_get_contents($migrationPath);

// پیدا کردن جای مناسب برای اضافه کردن ستون‌ها
        $upMethodPosition = strpos($migrationContent, 'public function up()');
        $createMethodPosition = strpos($migrationContent, 'Schema::create', $upMethodPosition);
        $closingBracePosition = strpos($migrationContent, '});', $createMethodPosition);

// ایجاد کد ستون‌ها
        $columns = '';
        foreach ($fields as $field => $type) {
            $columns .= "            \$table->$type('$field');\n";
        }

// اضافه کردن ستون‌ها به مایگریشن
        $migrationContent = substr_replace($migrationContent, $columns, $closingBracePosition, 0);

// نوشتن محتوای تغییر یافته به فایل مایگریشن
        file_put_contents($migrationPath, $migrationContent);
    }

    public function validateCode($fields)
    {
        $validatorPath = app_path('Http/Requests/UserRequest.php');

// خواندن محتوای فایل کلاس ولیدیتور
        $validatorContent = file_get_contents($validatorPath);

// پیدا کردن جای مناسب برای اضافه کردن قوانین ولیدیشن
        $rulesMethodPosition = strpos($validatorContent, 'public function rules()');
        $rulesArrayPosition = strpos($validatorContent, 'return [', $rulesMethodPosition);
        $closingBracePosition = strpos($validatorContent, '];', $rulesArrayPosition);

// ایجاد کد قوانین ولیدیشن
        $rules = '';
        foreach ($fields as $field => $rule) {
            $rules .= "            '$field' => '$rule',\n";
        }

// اضافه کردن قوانین به کلاس ولیدیتور
        $validatorContent = substr_replace($validatorContent, $rules, $closingBracePosition, 0);

// نوشتن محتوای تغییر یافته به فایل کلاس ولیدیتور
        file_put_contents($validatorPath, $validatorContent);
    }



    public function addCrudMethods()
    {
        $content = File::get($this->controllerPath);

        // متدها را اضافه کنید
        $content .= $this->generateIndexMethod();
        $content .= $this->generateFindMethod();
        $content .= $this->generateStoreMethod();
        $content .= $this->generateUpdateMethod();
        $content .= $this->generateDeleteMethod();

        File::put($this->controllerPath, $content);
    }

    protected function generateIndexMethod()
    {
        return <<<EOD

        /**
         * @OA\Get(
         *     path="/your-path",
         *     summary="Get all items",
         *     @OA\Response(
         *         response=200,
         *         description="A list of items"
         *     )
         * )
         */
        public function index()
        {
            // Your code here
        }

        EOD;
    }

    protected function generateFindMethod()
    {
        return <<<EOD

        /**
         * @OA\Get(
         *     path="/your-path/{id}",
         *     summary="Find an item by ID",
         *     @OA\Parameter(
         *         name="id",
         *         in="path",
         *         required=true,
         *         @OA\Schema(type="integer")
         *     ),
         *     @OA\Response(
         *         response=200,
         *         description="The found item"
         *     )
         * )
         */
        public function find(\$id)
        {
            // Your code here
        }

        EOD;
    }

    protected function generateStoreMethod()
    {
        return <<<EOD

        /**
         * @OA\Post(
         *     path="/your-path",
         *     summary="Store a new item",
         *     @OA\RequestBody(
         *         required=true,
         *         @OA\JsonContent(
         *             type="object",
         *             @OA\Property(property="name", type="string"),
         *             @OA\Property(property="email", type="string"),
         *             @OA\Property(property="age", type="integer")
         *         )
         *     ),
         *     @OA\Response(
         *         response=201,
         *         description="Item created successfully"
         *     )
         * )
         */
        public function store(Request \$request)
        {
            // Your code here
        }

        EOD;
    }

    protected function generateUpdateMethod()
    {
        return <<<EOD

        /**
         * @OA\Put(
         *     path="/your-path/{id}",
         *     summary="Update an item by ID",
         *     @OA\Parameter(
         *         name="id",
         *         in="path",
         *         required=true,
         *         @OA\Schema(type="integer")
         *     ),
         *     @OA\RequestBody(
         *         required=true,
         *         @OA\JsonContent(
         *             type="object",
         *             @OA\Property(property="name", type="string"),
         *             @OA\Property(property="email", type="string"),
         *             @OA\Property(property="age", type="integer")
         *         )
         *     ),
         *     @OA\Response(
         *         response=200,
         *         description="Item updated successfully"
         *     )
         * )
         */
        public function update(Request \$request, \$id)
        {
            // Your code here
        }

        EOD;
    }

    protected function generateDeleteMethod()
    {
        return <<<EOD

        /**
         * @OA\Delete(
         *     path="/your-path/{id}",
         *     summary="Delete an item by ID",
         *     @OA\Parameter(
         *         name="id",
         *         in="path",
         *         required=true,
         *         @OA\Schema(type="integer")
         *     ),
         *     @OA\Response(
         *         response=200,
         *         description="Item deleted successfully"
         *     )
         * )
         */
        public function delete(\$id)
        {
            // Your code here
        }

        EOD;
    }

}

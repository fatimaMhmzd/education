<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class MakeModelWithSoftDeletes extends Command
{
    protected $signature = 'make:model-soft-delete {module} {name} {--needSoftDelete=false}';
    protected $description = 'Create a model with optional SoftDeletes trait';

    public function handle()
    {
        $name = $this->argument('name');
        $moduleName = $this->argument('module');
        $needSoftDelete = $this->option('needSoftDelete');

        // ساخت مدل
        Artisan::call('module:make-model', [
            'model' => $name,
            'module' => $moduleName
        ]);

        // مسیر مدل
        $modelPath = base_path("Modules/{$moduleName}/App/Models/{$name}.php");

        if (File::exists($modelPath)) {
            $modelContent = File::get($modelPath);

            // حذف خطی که حاوی "use Modules\\User\\Database\\factories\\BookFactory;" است
            $modelContent = preg_replace('/use Modules\\\\' . $moduleName . '\\\\Database\\\\factories\\\\' . $name . 'Factory;/', '', $modelContent);
            $modelContent = preg_replace('/use Illuminate\\\\Database\\\\Eloquent\\\\Factories\\\\HasFactory;/', '', $modelContent);
            $modelContent = preg_replace('/use HasFactory;/', '', $modelContent);

            // حذف تابع protected static function newFactory()
            $modelContent = preg_replace('/protected static function newFactory\(\): ' . $name . 'Factory\s*\{\s*\/\/return ' . $name . 'Factory::new\(\);\s*\}/', '', $modelContent);

            // اگر پارامتر needSoftDelete برابر با true بود
            if ($needSoftDelete === 'true') {
                // بررسی اینکه SoftDeletes قبلاً وجود نداشته باشد
                if (strpos($modelContent, 'SoftDeletes') === false) {
                    // افزودن use SoftDeletes
                    $modelContent = str_replace(
                        'use Illuminate\Database\Eloquent\Model;',
                        "use Illuminate\Database\Eloquent\Model;\nuse Illuminate\Database\Eloquent\SoftDeletes;",
                        $modelContent
                    );

                    // افزودن trait SoftDeletes
                    $modelContent = str_replace(
                        'class ' . $name . " extends Model\n{",
                        "class {$name} extends Model\n{\n    use SoftDeletes;\n",
                        $modelContent
                    );

                    // افزودن protected $dates اگر وجود نداشته باشد
                    if (strpos($modelContent, 'protected $dates') === false) {
                        $modelContent = str_replace(
                            "use SoftDeletes;\n",
                            "use SoftDeletes;\n\n    protected \$dates = ['deleted_at','create_at','updated_at'];\n",
                            $modelContent
                        );
                    }

                    File::put($modelPath, $modelContent);
                    $this->info("Model {$name} created successfully with SoftDeletes.");
                } else {
                    $this->info("Model {$name} already has SoftDeletes.");
                }
            } else {
                File::put($modelPath, $modelContent);
                $this->info("Model {$name} created without SoftDeletes.");
            }

            $this->generateAdminRoutes($moduleName, $name);

        } else {
            $this->error("Model {$name} not found.");
        }
    }

    public function generateAdminRoutes($moduleName, $name)
    {
        $routesPath = base_path("Modules/{$moduleName}/routes/admin.php");
        // چک کنید که آیا فایل وجود دارد
        if (File::exists($routesPath)) {
            $controllerNamespace = "Modules\\{$moduleName}\\App\\Http\\Controllers\\Admin\\{$name}Controller";

            // خواندن محتوای فعلی فایل
            $currentContent = File::get($routesPath);

            // بررسی اینکه آیا namespace قبلاً اضافه شده است یا خیر
            if (strpos($currentContent, "use {$controllerNamespace};") === false) {

                // اضافه کردن namespace قبل از Route::prefix
                $currentContent = preg_replace(
                    '/(<\?php\s*\n\s*)/',
                    "$0\nuse {$controllerNamespace};\n",
                    $currentContent,
                    1
                );
            }

            $asModuleName = Str::snake($moduleName).'_';
            $prefixModuleName = Str::kebab($moduleName);
            $asModelName = Str::snake($name);
            $prefixModelName = Str::kebab($name);
            $routeDefinition = <<<EOD
    // Routes for {$name} module
    Route::group(['prefix' => '{$prefixModelName}', 'as' => '{$asModelName}_'], function () {
        Route::get('/', [{$name}Controller::class, 'index'])->name('index');
        Route::post('/', [{$name}Controller::class, 'storeOrUpdate'])->name('storeOrUpdate');
        Route::get('/list', [{$name}Controller::class, 'list'])->name('list');
        Route::get('/{id}', [{$name}Controller::class, 'detail'])->name('detail');
        Route::delete('/{id}', [{$name}Controller::class, 'delete'])->name('delete');
    });
EOD;

               $pattern = "/(Route::group\(\['prefix' => '{$prefixModuleName}', 'as' => '{$asModuleName}'\], function\s*\(\)\s*\{)(\s*)/m";
    if (preg_match($pattern, $currentContent)) {
        $currentContent = preg_replace(
            $pattern,
            "$1\n{$routeDefinition}$2",
            $currentContent
        );
    } else {
        $this->error("Could not find Route::group(['prefix' => 'book', 'as' => 'book_']) group in admin.php.");
        return;
    }

            // نوشتن محتوا به فایل
            File::put($routesPath, $currentContent);

            $this->info("Routes for {$name} added successfully to admin.php.");
        } else {
            $this->error("admin.php not found in module {$moduleName}.");
        }
    }
}

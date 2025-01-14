<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class MakeAdminController extends Command
{
    protected $signature = 'make:admin-controller {module} {name}';
    protected $description = 'Create a new service file in the Services directory of the specified module';

    public function handle()
    {
        $moduleName = $this->argument('module');
        Log::info(["$moduleName"=>$moduleName]);
        $name = $this->argument('name');
        Log::info(["name"=>$name]);

        $moduleNameSnake = Str::snake($moduleName);
        $nameSnake = Str::snake($name);

        // مسیر پوشه Services
        $path = base_path("Modules/{$moduleName}/App/Http/Controllers/Admin");

        // اگر پوشه Services وجود نداشت، آن را بسازید
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
            $this->info("Directory {$path} created successfully.");
        }

        // مسیر فایل سرویس
        $serviceFile = "{$path}/{$name}Controller.php";

        // اگر فایل سرویس وجود نداشت، آن را بسازید
        if (!File::exists($serviceFile)) {
            File::put($serviceFile, $this->getTemplate($moduleName, $name,$moduleNameSnake,$nameSnake));
            $this->info("Service file {$serviceFile} created successfully.");
        } else {
            $this->error("Service file {$serviceFile} already exists.");
        }
    }

    protected function getTemplate($moduleName, $name,$moduleNameSnake,$nameSnake)
    {
        // مسیر فایل stub در پکیج
        $stubPath = base_path('packages/mohammadbay/sitemanager/stubs/adminController.stub');

        // خواندن محتوای فایل stub
        $stubContent = File::get($stubPath);

        // جایگزینی متغیرها در الگو
        return str_replace(
            ['{{ module }}', '{{ name }}', '{{ snakeModule }}', '{{ snakeName }}'],
            [$moduleName, $name, $moduleNameSnake, $nameSnake],
            $stubContent
        );
    }


}

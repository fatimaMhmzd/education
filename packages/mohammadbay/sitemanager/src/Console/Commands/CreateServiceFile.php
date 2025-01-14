<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class CreateServiceFile extends Command
{
    protected $signature = 'make:service {module} {name}';
    protected $description = 'Create a new service file in the Services directory of the specified module';

    public function handle()
    {
        $moduleName = $this->argument('module');
        $serviceName = $this->argument('name');

        // مسیر پوشه Services
        $servicesPath = base_path("Modules/{$moduleName}/Services");

        // اگر پوشه Services وجود نداشت، آن را بسازید
        if (!File::exists($servicesPath)) {
            File::makeDirectory($servicesPath, 0755, true);
            $this->info("Directory {$servicesPath} created successfully.");
        }

        // مسیر فایل سرویس
        $serviceFile = "{$servicesPath}/{$serviceName}Service.php";

        // اگر فایل سرویس وجود نداشت، آن را بسازید
        if (!File::exists($serviceFile)) {
            File::put($serviceFile, $this->getServiceTemplate($moduleName, $serviceName));
            $this->info("Service file {$serviceFile} created successfully.");
        } else {
            $this->error("Service file {$serviceFile} already exists.");
        }
    }

    protected function getServiceTemplate($moduleName, $serviceName)
    {
        // مسیر فایل stub در پکیج
        $stubPath = base_path('packages/mohammadbay/sitemanager/stubs/service.stub');

        // خواندن محتوای فایل stub
        $stubContent = File::get($stubPath);

        // جایگزینی متغیرها در الگو
        return str_replace(
            ['{{ module }}', '{{ name }}', '{{ snakeModule }}', '{{ snakeName }}'],
            [$moduleName, $serviceName,Str::snake($moduleName),Str::snake($serviceName)],
            $stubContent
        );
    }
}

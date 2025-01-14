<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;


class MakeValidateRequest extends Command
{
    protected $signature = 'make:validate-request {module} {name}';
    protected $description = 'Create a new ValidateRequest in the specified module';

    public function handle()
    {
        $moduleName = $this->argument('module');
        $modelName = $this->argument('name');

        // مسیر پوشه Request
        $requestsPath = base_path("Modules/{$moduleName}/App/Http/Requests/{$modelName}");

        // اگر پوشه Request وجود نداشت، آن را بسازید
        if (!File::exists($requestsPath)) {
            File::makeDirectory($requestsPath, 0755, true);
        }

        // مسیر فایل ValidateBookRequest
        $requestFile = "{$requestsPath}/Validate{$modelName}Request.php";

        // اگر فایل ValidateBookRequest وجود نداشت، آن را بسازید
        if (!File::exists($requestFile)) {
            File::put($requestFile, $this->getValidateBookRequestTemplate($moduleName,$modelName));
        } else {
            $this->error("Request file {$requestFile} already exists.");
        }
    }

    protected function getValidateBookRequestTemplate($moduleName, $modelName)
    {
        $stubPath = base_path('packages/mohammadbay/sitemanager/stubs/validate-request.stub');
        $stubContent = File::get($stubPath);

        return str_replace(
            ['{{ module }}', '{{ name }}'],
            [$moduleName, $modelName],
            $stubContent
        );
    }
}

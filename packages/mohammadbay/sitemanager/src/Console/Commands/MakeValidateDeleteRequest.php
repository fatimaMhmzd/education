<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeValidateDeleteRequest extends Command
{
    protected $signature = 'make:validate-delete-request {module} {name}';
    protected $description = 'Create a new ValidateDeleteRequest in the specified module';

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

        // مسیر فایل ValidateDeleteRequest
        $requestFile = "{$requestsPath}/ValidateDeleteRequest.php";

        // اگر فایل ValidateDeleteRequest وجود نداشت، آن را بسازید
        if (!File::exists($requestFile)) {
            File::put($requestFile, $this->getValidateDeleteRequestTemplate($moduleName, $modelName));
        } else {
            $this->error("Request file {$requestFile} already exists.");
        }
    }

    protected function getValidateDeleteRequestTemplate($moduleName, $modelName)
    {
        $stubPath = base_path('packages/mohammadbay/sitemanager/stubs/validate-delete-request.stub');
        $stubContent = File::get($stubPath);

        $tableName = Str::plural(Str::snake($modelName));

        return str_replace(
            ['{{ module }}', '{{ name }}', '{{ table }}'],
            [$moduleName, $modelName, $tableName],
            $stubContent
        );
    }
}

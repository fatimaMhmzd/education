<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeRepository extends Command
{
    protected $signature = 'make:repository {module} {name}';
    protected $description = 'Create a new repository class in the specified module';

    public function handle()
    {
        $moduleName = $this->argument('module');
        $modelName = $this->argument('name');

        // مسیر پوشه Repositories
        $repositoryPath = base_path("Modules/{$moduleName}/App/Http/Repositories");

        // ایجاد پوشه Repositories اگر وجود ندارد
        if (!File::exists($repositoryPath)) {
            File::makeDirectory($repositoryPath, 0755, true);
        }

        // مسیر فایل کلاس Repository
        $repositoryFile = "{$repositoryPath}/{$modelName}Repository.php";

        // بررسی اینکه آیا فایل قبلاً وجود دارد یا خیر
        if (File::exists($repositoryFile)) {
            $this->error("Repository {$modelName}Repository already exists.");
            return;
        }

        // مسیر فایل stub در پکیج
        $stubPath = base_path('packages/mohammadbay/sitemanager/stubs/repository.stub');

        // بررسی اینکه آیا فایل stub وجود دارد یا خیر
        if (!File::exists($stubPath)) {
            $this->error("Stub file not found at {$stubPath}.");
            return;
        }

        // خواندن محتوای فایل stub
        $stubContent = File::get($stubPath);

        // جایگزینی متغیرها در الگو
        $repositoryContent = str_replace(
            ['{{ module }}', '{{ name }}'],
            [$moduleName, $modelName],
            $stubContent
        );

        // ایجاد فایل و نوشتن محتوا در آن
        File::put($repositoryFile, $repositoryContent);

    }
}

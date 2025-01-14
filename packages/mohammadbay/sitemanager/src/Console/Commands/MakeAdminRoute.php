<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeAdminRoute extends Command
{
    protected $signature = 'make:admin-route {module}';
    protected $description = 'Create a new route file in the specified module';

    public function handle()
    {
        $moduleName = $this->argument('module');
        // مسیر پوشه Repositories
        $routePath = base_path("Modules/{$moduleName}/routes");

        // ایجاد پوشه Repositories اگر وجود ندارد
        if (!File::exists($routePath)) {
            File::makeDirectory($routePath, 0755, true);
        }

        // مسیر فایل کلاس Repository
        $adminFile = "{$routePath}/admin.php";

        // بررسی اینکه آیا فایل قبلاً وجود دارد یا خیر
        if (File::exists($adminFile)) {
            $this->error("admin route already exists.");
            return;
        }

        if (!File::exists($adminFile)) {
            File::put($adminFile, $this->getRouteTemplate($moduleName));
            $this->info("admin route file created successfully.");
        } else {
            $this->error("admin route file already exists.");
        }

        $providerFile = base_path("Modules/{$moduleName}/App/Providers/RouteServiceProvider.php");

        // بررسی و ویرایش RouteServiceProvider
        if (File::exists($providerFile)) {
            $this->updateRouteServiceProvider($providerFile, $moduleName);
            $this->info("RouteServiceProvider updated successfully.");
        } else {
            $this->error("RouteServiceProvider not found.");
        }

    }

    protected function getRouteTemplate($moduleName)
    {
        // مسیر فایل stub در پکیج
        $stubPath = base_path('packages/mohammadbay/sitemanager/stubs/route.stub');

        // خواندن محتوای فایل stub
        $stubContent = File::get($stubPath);

        $kebabCaseModule = Str::kebab($moduleName);
        $snakeCaseModule = Str::snake($moduleName);

        return str_replace(
            ['{{ kebab_case_module }}', '{{ snake_case_module }}'],
            [$kebabCaseModule, $snakeCaseModule],
            $stubContent
        );
    }

    protected function updateRouteServiceProvider($providerFile, $moduleName)
    {
        $content = File::get($providerFile);

        // بررسی اینکه آیا متد mapAdminRoutes وجود دارد یا خیر
        if (Str::contains($content, 'mapAdminRoutes')) {
            $this->info("mapAdminRoutes method already exists in RouteServiceProvider.");
            return;
        }

        // اضافه کردن متد mapAdminRoutes به RouteServiceProvider
        $newMethod = <<<EOT

    /**
     * Define the "admin" routes for the application.
     *
     * These routes typically handle admin panel requests.
     */
    protected function mapAdminRoutes(): void
    {
        Route::prefix('admin')->as('admin_')
            ->middleware('web') // یا هر middleware دیگری که نیاز دارید
            ->namespace(\$this->moduleNamespace)
            ->group(module_path('{$moduleName}', '/routes/admin.php'));
    }

EOT;

        // اضافه کردن mapAdminRoutes به متد map
        $content = preg_replace('/(public function map\(\): void\s*\{)/', '$1' . "\n        \$this->mapAdminRoutes();", $content);

        // اضافه کردن mapAdminRoutes متد به انتهای کلاس
        $content = preg_replace('/\}\s*$/', $newMethod . "\n}", $content);

        // ذخیره فایل RouteServiceProvider
        File::put($providerFile, $content);
    }

}

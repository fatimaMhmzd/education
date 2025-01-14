<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class RenameModule extends Command
{
    protected $signature = 'module:rename {oldName} {newName}';
    protected $description = 'Rename a module';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $oldName = $this->argument('oldName');
        $newName = $this->argument('newName');

        $modulePath = base_path('Modules');
        $oldModulePath = $modulePath . '/' . $oldName;
        $newModulePath = $modulePath . '/' . $newName;

        if (!File::exists($oldModulePath)) {
            $this->error("Module '{$oldName}' does not exist.");
            return;
        }

        // Rename the directory
        File::move($oldModulePath, $newModulePath);

        // Update namespace and class names in files
        $this->updateNamespaceAndClassNames($newModulePath, $oldName, $newName);

        // Update ServiceProvider
        $this->renameServiceProvider($newModulePath, $oldName, $newName);
        $this->updateRouteServiceProvider($newModulePath, $oldName, $newName);

        // Update module.json
        $this->updateModuleJson($newModulePath, $oldName, $newName);

        $this->updateModulesStatuses($oldName, $newName);

        $this->info("Module '{$oldName}' has been renamed to '{$newName}'.");
    }

    protected function updateNamespaceAndClassNames($path, $oldName, $newName)
    {
        $files = File::allFiles($path);

        foreach ($files as $file) {
            $content = File::get($file);

            // Update the namespace and class names
//            $content = str_replace("namespace Modules\\{$oldName}", "namespace Modules\\{$newName}", $content);
            $content = str_replace("Modules\\{$oldName}", "Modules\\{$newName}", $content);

            File::put($file, $content);
        }
    }

    protected function updateModuleJson($path, $oldName, $newName)
    {
        $moduleJsonPath = $path . '/module.json';

        if (File::exists($moduleJsonPath)) {
            $moduleJson = json_decode(File::get($moduleJsonPath), true);

            if (isset($moduleJson['providers'])) {
                foreach ($moduleJson['providers'] as &$provider) {
                    $provider = str_replace("Modules\\{$oldName}", "Modules\\{$newName}", $provider);
                    $provider = str_replace("{$oldName}ServiceProvider", "{$newName}ServiceProvider", $provider);
                }
            }
            if (isset($moduleJson['name'])) {
                $moduleJson['name'] = $newName;
            }
            if (isset($moduleJson['alias'])) {
                $moduleJson['alias'] = Str::lower($newName);
            }

            File::put($moduleJsonPath, json_encode($moduleJson, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
        } else {
            $this->error("module.json not found in the module directory.");
        }
    }

    protected function renameServiceProvider($path, $oldName, $newName)
    {
        $oldServiceProviderPath = $path . '/App/Providers/' . $oldName . 'ServiceProvider.php';
        $newServiceProviderPath = $path . '/App/Providers/' . $newName . 'ServiceProvider.php';

        if (File::exists($oldServiceProviderPath)) {
            // Rename the file
            File::move($oldServiceProviderPath, $newServiceProviderPath);

            // Update the class name inside the file
            $content = File::get($newServiceProviderPath);
            $content = str_replace("class {$oldName}ServiceProvider", "class {$newName}ServiceProvider", $content);
            File::put($newServiceProviderPath, $content);

            // Update namespace in the new ServiceProvider file
            /*$content = File::get($newServiceProviderPath);
            $content = str_replace("namespace Modules\\{$oldName}", "namespace Modules\\{$newName}", $content);
            File::put($newServiceProviderPath, $content);*/

            // update moduleName in service provider
            $content = File::get($newServiceProviderPath);
            $content = str_replace("protected string \$moduleName = '{$oldName}';", "protected string \$moduleName = '{$newName}';", $content);

            // update moduleNameLower in service provider
            $oldLowerCase  = Str::lower($oldName);
            $newLowerCase  = Str::lower($newName);
            $content = str_replace("protected string \$moduleNameLower = '{$oldLowerCase}';", "protected string \$moduleNameLower = '{$newLowerCase}';", $content);


            File::put($newServiceProviderPath, $content);

        } else {
            $this->error("ServiceProvider '{$oldName}ServiceProvider' not found in the module directory.");
        }
    }

    protected function updateRouteServiceProvider($path, $oldName, $newName)
    {
        $routeServiceProviderPath = $path . '/App/Providers/RouteServiceProvider.php';

        $content = File::get($routeServiceProviderPath);
        $content = str_replace("module_path('{$oldName}',", "module_path('{$newName}',", $content);

        File::put($routeServiceProviderPath, $content);
    }

    protected function updateModulesStatuses($oldName, $newName)
    {
        $statusesPath = base_path('modules_statuses.json');

        if (File::exists($statusesPath)) {
            $statuses = json_decode(File::get($statusesPath), true);

            if (isset($statuses[$oldName])) {
                $statuses[$newName] = $statuses[$oldName];
                unset($statuses[$oldName]);
                File::put($statusesPath, json_encode($statuses, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));
            } else {
                $this->error("Module '{$oldName}' not found in modules_statuses.json.");
            }
        } else {
            $this->error("modules_statuses.json not found.");
        }
    }
}

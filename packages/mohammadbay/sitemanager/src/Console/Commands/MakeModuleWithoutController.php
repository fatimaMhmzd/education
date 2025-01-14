<?php

namespace mohammadbay\sitemanager\Console\Commands;


use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\File;

class MakeModuleWithoutController extends Command
{
    protected $signature = 'module:make-custom {name}';
    protected $description = 'Create a new module without default controller';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->argument('name');

        // Create the module using the original command
        $this->call('module:make', ['name' => [$name]]);

        // Define the path to the default controller
        $controllerPath = base_path("Modules/{$name}/App/Http/Controllers/{$name}Controller.php");

        // Check if the controller exists and delete it
        if (File::exists($controllerPath)) {
            File::delete($controllerPath);
            $this->info("Default controller removed from the {$name} module.");
        } else {
            $this->warn("Default controller not found in the {$name} module.");
        }
        $this->emptyRoutes($name);

        Artisan::call('make:admin-route', [
            'module' => $name
        ]);
    }

    protected function emptyRoutes($name){
        $webPath = base_path("Modules/{$name}/routes/web.php");
        $apiPath = base_path("Modules/{$name}/routes/api.php");
        $content = "<?php

use Illuminate\Support\Facades\Route;

";
        File::put($webPath, $content);
        File::put($apiPath, $content);
    }
}

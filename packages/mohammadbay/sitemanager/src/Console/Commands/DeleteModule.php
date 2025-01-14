<?php

namespace mohammadbay\sitemanager\Console\Commands;

use Illuminate\Console\Command;
use Nwidart\Modules\Facades\Module;
use Illuminate\Support\Facades\File;

class DeleteModule extends Command
{
    protected $signature = 'module:delete {name}';
    protected $description = 'Delete a module and update modules_statuses.json';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $name = $this->argument('name');

        // Check if module exists
        if (!Module::has($name)) {
            $this->error("Module '{$name}' does not exist.");
            return;
        }

        // Delete the module
        Module::delete($name);
        $this->info("Module '{$name}' has been deleted.");

        // Update modules_statuses.json
        $statusesPath = base_path('modules_statuses.json');

        if (File::exists($statusesPath)) {
            $statuses = json_decode(File::get($statusesPath), true);

            if (isset($statuses[$name])) {
                unset($statuses[$name]);
                File::put($statusesPath, json_encode($statuses, JSON_PRETTY_PRINT));
                $this->info("Module '{$name}' has been removed from modules_statuses.json.");
            } else {
                $this->warn("Module '{$name}' was not found in modules_statuses.json.");
            }
        } else {
            $this->error("File 'modules_statuses.json' does not exist.");
        }
    }
}

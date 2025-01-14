<?php

namespace mohammadbay\sitemanager\Providers;

use Illuminate\Support\ServiceProvider;

class sitemanagerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
//        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sitemanager');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->commands([
            \mohammadbay\sitemanager\Console\Commands\RenameModule::class,
            \mohammadbay\sitemanager\Console\Commands\MakeModuleWithoutController::class,
            \mohammadbay\sitemanager\Console\Commands\DeleteModule::class,
            \mohammadbay\sitemanager\Console\Commands\MakeModelWithSoftDeletes::class,
            \mohammadbay\sitemanager\Console\Commands\MakeRepository::class,
            \mohammadbay\sitemanager\Console\Commands\CreateServiceFile::class,
            \mohammadbay\sitemanager\Console\Commands\MakeValidateDeleteRequest::class,
            \mohammadbay\sitemanager\Console\Commands\MakeValidateRequest::class,
            \mohammadbay\sitemanager\Console\Commands\MakeAdminRoute::class,
            \mohammadbay\sitemanager\Console\Commands\MakeAdminController::class,
            \mohammadbay\sitemanager\Console\Commands\MakeApiController::class,
        ]);

        // Publish the public assets
        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/sitemanager'),
        ], 'public');

        // Publish the views
        $this->publishes([
            __DIR__.'/../../resources/views' => resource_path('views/vendor/sitemanager'),
        ], 'views');

        // Publish the config
        $this->publishes([
            __DIR__.'/../../config/sitemanager.php' => config_path('sitemanager.php'),
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

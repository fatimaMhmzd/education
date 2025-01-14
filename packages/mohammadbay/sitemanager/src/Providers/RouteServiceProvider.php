<?php

namespace mohammadbay\sitemanager\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadWebRoutes();
        $this->loadApiRoutes();
    }

    protected function loadWebRoutes()
    {
        Route::middleware(['web'])
            ->group(__DIR__.'/../routes/web.php');
    }

    protected function loadApiRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->group(__DIR__.'/../routes/api.php');
    }

}

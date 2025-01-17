<?php

namespace Modules\Education\App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The module namespace to assume when generating URLs to actions.
     */
    protected string $moduleNamespace = 'Modules\Education\App\Http\Controllers';

    /**
     * Called before routes are registered.
     *
     * Register any model bindings or pattern based filters.
     */
    public function boot(): void
    {
        parent::boot();
    }

    /**
     * Define the routes for the application.
     */
    public function map(): void
    {
        $this->mapAdminRoutes();
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     */
    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Education', '/routes/web.php'));
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Education', '/routes/master.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     */
    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('Education', '/routes/api.php'));
    }

    /**
     * Define the "admin" routes for the application.
     *
     * These routes typically handle admin panel requests.
     */
    protected function mapAdminRoutes(): void
    {
        Route::prefix('admin')->as('admin_')
            ->middleware('web') // یا هر middleware دیگری که نیاز دارید
            ->namespace($this->moduleNamespace)
            ->group(module_path('Education', '/routes/admin.php'));
    }

}

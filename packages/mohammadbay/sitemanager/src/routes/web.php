<?php

use Illuminate\Support\Facades\Route;
use mohammadbay\sitemanager\Http\Controllers\AdminController;
use mohammadbay\sitemanager\Http\Controllers\ComponentController;
use mohammadbay\sitemanager\Http\Controllers\ComponentItemController;
use mohammadbay\sitemanager\Http\Controllers\ModuleController;

Route::group(['prefix' => 'site-manager', 'as' => 'site_manager_'], function () {
    Route::group(['prefix' => 'admin', 'as' => 'admin_'], function () {

        Route::get('/', [AdminController::class, 'index'])->name('dashboard');

        Route::group(['prefix' => 'modules', 'as' => 'modules_'], function () {
            Route::get('/', [ModuleController::class, 'index'])->name('index');
            Route::post('/', [ModuleController::class, 'storeOrUpdate'])->name('storeOrUpdate');
            Route::get('/list', [ModuleController::class, 'list'])->name('list');
            Route::get('/{id}', [ModuleController::class, 'detail'])->name('detail');
            Route::delete('/{id}', [ModuleController::class, 'delete'])->name('delete');
        });

        Route::group(['prefix' => 'component', 'as' => 'component_'], function () {
            Route::get('/', [ComponentController::class, 'index'])->name('index');
            Route::post('/', [ComponentController::class, 'storeOrUpdate'])->name('storeOrUpdate');
            Route::get('/list', [ComponentController::class, 'list'])->name('list');
            Route::get('/{id}', [ComponentController::class, 'detail'])->name('detail');
            Route::delete('/{id}', [ComponentController::class, 'delete'])->name('delete');

            Route::group(['prefix' => 'item', 'as' => 'item_'], function () {
                Route::get('/generate-code/{id}', [ComponentItemController::class, 'generateCode'])->name('generateCode');
                Route::post('/{id}', [ComponentItemController::class, 'store'])->name('store');
                Route::get('/{id}', [ComponentItemController::class, 'index'])->name('index');

            });
        });
    });
});

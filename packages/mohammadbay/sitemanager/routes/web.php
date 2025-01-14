<?php

use Illuminate\Support\Facades\Route;
use mohammadbay\sitemanager\Http\Controllers\AdminController;

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
});

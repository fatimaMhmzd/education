<?php

use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index'])->name('index');
});

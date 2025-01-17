<?php


use Modules\Education\App\Http\Controllers\Admin\EducationGroupController;
use Illuminate\Support\Facades\Route;
use Modules\Education\App\Http\Controllers\Admin\EducationLessonController;
use Modules\Education\App\Http\Controllers\Admin\EducationMasterController;
use Modules\Education\App\Http\Controllers\Admin\EducationProductController;
use Modules\Education\App\Http\Controllers\Admin\EducationSeasonController;
use Modules\Education\App\Http\Controllers\Admin\EducationTypeController;

Route::group(['prefix' => 'education', 'as' => 'education_'], function () {
    // Routes for EducationGroup module
    Route::group(['prefix' => 'group', 'as' => 'group_'], function () {
        Route::get('/add', [EducationGroupController::class, 'add'])->name('add');
        Route::post('/add', [EducationGroupController::class, 'store'])->name('store');
        Route::get('/list', [EducationGroupController::class, 'list'])->name('list');
        Route::get('/ajax', [EducationGroupController::class, 'ajax'])->name('ajax');
        Route::get('/delete/{id}', [EducationGroupController::class, 'delete'])->name('delete');
        Route::get('/update/{id}', [EducationGroupController::class, 'update'])->name('update');
        Route::post('/update', [EducationGroupController::class, 'storeUpdate'])->name('storeUpdate');

    });
    Route::group(['prefix' => 'master', 'as' => 'master_'], function () {
        Route::get('/add', [EducationMasterController::class, 'add'])->name('add');
        Route::post('/add', [EducationMasterController::class, 'store'])->name('store');
        Route::get('/list', [EducationMasterController::class, 'list'])->name('list');
        Route::get('/ajax', [EducationMasterController::class, 'ajax'])->name('ajax');
        Route::get('/delete/{id}', [EducationMasterController::class, 'delete'])->name('delete');
        Route::get('/update/{id}', [EducationMasterController::class, 'update'])->name('update');
        Route::post('/update', [EducationMasterController::class, 'storeUpdate'])->name('storeUpdate');

    });
    Route::group(['prefix' => 'product', 'as' => 'product_'], function () {
        Route::get('/add', [EducationProductController::class, 'add'])->name('add');
        Route::post('/add', [EducationProductController::class, 'store'])->name('store');
        Route::post('/update', [EducationProductController::class, 'storeUpdate'])->name('storeUpdate');
        Route::get('/list', [EducationProductController::class, 'list'])->name('list');
        Route::get('/ajax', [EducationProductController::class, 'ajax'])->name('ajax');
        Route::get('/delete/{id}', [EducationProductController::class, 'delete'])->name('delete');
        Route::get('/update/{id}', [EducationProductController::class, 'update'])->name('update');
        Route::get('/upload/{id}', [EducationProductController::class, 'uploadView'])->name('upload');
        Route::get('/changeStatus/{id}', [EducationProductController::class, 'changeStatus'])->name('changeStatus');
        Route::post('/changeStatus', [EducationProductController::class, 'storeChangeStatus'])->name('storeChangeStatus');
    });
    Route::group(['prefix' => 'session', 'as' => 'session_'], function () {
        Route::get('/add/{productId}', [EducationSeasonController::class, 'add'])->name('add');
        Route::post('/add', [EducationSeasonController::class, 'store'])->name('store');
        Route::post('/update', [EducationSeasonController::class, 'storeUpdate'])->name('storeUpdate');
        Route::get('/list/{productId}', [EducationSeasonController::class, 'list'])->name('list');
        Route::get('/ajax/{productId}', [EducationSeasonController::class, 'ajax'])->name('ajax');
        Route::get('/delete/{id}', [EducationSeasonController::class, 'delete'])->name('delete');
        Route::get('/update/{id}', [EducationSeasonController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'lesson', 'as' => 'lesson_'], function () {
        Route::get('/add/{seasonId}', [EducationLessonController::class, 'add'])->name('add');
        Route::post('/add', [EducationLessonController::class, 'store'])->name('store');
        Route::post('/update', [EducationLessonController::class, 'storeUpdate'])->name('storeUpdate');
        Route::get('/list/{seasonId}', [EducationLessonController::class, 'list'])->name('list');
        Route::get('/ajax/{seasonId}', [EducationLessonController::class, 'ajax'])->name('ajax');
        Route::get('/delete/{id}', [EducationLessonController::class, 'delete'])->name('delete');
        Route::get('/update/{id}', [EducationLessonController::class, 'update'])->name('update');
    });
    Route::group(['prefix' => 'type', 'as' => 'type_'], function () {
        Route::get('/add', [EducationTypeController::class, 'add'])->name('add');
        Route::post('/add', [EducationTypeController::class, 'store'])->name('store');
        Route::post('/update', [EducationTypeController::class, 'storeUpdate'])->name('store_update');
        Route::get('/list', [EducationTypeController::class, 'list'])->name('list');
        Route::get('/ajax', [EducationTypeController::class, 'ajax'])->name('ajax');
        Route::get('/delete/{id}', [EducationTypeController::class, 'delete'])->name('delete');
        Route::get('/update/{id}', [EducationTypeController::class, 'update'])->name('update');
        Route::post('/update', [EducationTypeController::class, 'storeUpdate'])->name('storeUpdate');
    });
    Route::post('/uploadVideo', [EducationProductController::class, 'upload'])->name('upload');
});

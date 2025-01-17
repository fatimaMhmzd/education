<?php


use Illuminate\Support\Facades\Route;
use Modules\Form\App\Http\Controllers\Admin\FormController;
use Modules\Form\App\Http\Controllers\Admin\QuestionController;

Route::group(['prefix' => 'admin', 'as' => 'admin_'], function () {
    Route::group(['prefix' => 'form', 'as' => 'form_'], function () {

        Route::group(['prefix' => 'question', 'as' => 'question_'], function () {
            Route::get('/', [QuestionController::class, 'index'])->name('index');
            Route::post('/', [FormController::class, 'storeOrUpdate'])->name('storeOrUpdate');
            Route::get('/list', [FormController::class, 'list'])->name('list');
            Route::get('/{id}', [FormController::class, 'detail'])->name('detail');
            Route::delete('/{id}', [FormController::class, 'delete'])->name('delete');

        });

        Route::get('/', [FormController::class, 'index'])->name('index');
        Route::post('/', [FormController::class, 'storeOrUpdate'])->name('storeOrUpdate');
        Route::get('/list', [FormController::class, 'list'])->name('list');
        Route::get('/{id}', [FormController::class, 'detail'])->name('detail');
        Route::delete('/{id}', [FormController::class, 'delete'])->name('delete');


    });
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Modules\Education\App\Http\Controllers\Master\CourseController;
use Modules\Education\App\Http\Controllers\Master\PublicController;


Route::group(['prefix' => 'education', 'as' => 'education_'/*, 'middleware' => ['auth']*/], function () {
    Route::group(['prefix' => 'master', 'as' => 'master_'], function () {

        Route::get('/', [PublicController::class, 'index'])->name('index');
        Route::get('/test', [CourseController::class, 'test'])->name('test');

        Route::group(['prefix' => 'course', 'as' => 'course_'], function () {
            Route::get('/', [CourseController::class, 'index'])->name('index');
            Route::get('/firstStep', [CourseController::class, 'create'])->name('firstStep');
            Route::group(['prefix' => 'update', 'as' => 'update_'], function () {
                Route::get('/firstStep/{id?}', [CourseController::class, 'firstStep'])->name('firstStep');
                Route::get('/secondStep/{id?}', [CourseController::class, 'secondStep'])->name('secondStep');
                Route::get('/thirdStep/{id?}', [CourseController::class, 'thirdStep'])->name('thirdStep');
                Route::post('/firstStep', [CourseController::class, 'firstStepStore'])->name('firstStepStore');
                Route::post('/secondStep', [CourseController::class, 'secondStepStore'])->name('secondStepStore');
                Route::post('/thirdStep', [CourseController::class, 'thirdStepStore'])->name('thirdStepStore');
                Route::post('/text', [CourseController::class, 'textUpload'])->name('text');
                Route::post('/link', [CourseController::class, 'linkUpload'])->name('link');
                //Route::post('/chunk', [UploadController::class, 'upload'])->name('chunk');
            });
            Route::group(['prefix' => 'qa', 'as' => 'qa_'], function () {
               // Route::get('/{id?}', [QuestionAnswerController::class, 'index'])->name('index');
            });

            Route::group(['prefix' => 'api', 'as' => 'api_'], function () {
                Route::group(['prefix' => 'season', 'as' => 'season_'], function () {
                   // Route::get('create/{productId}/{title}/{subject?}', [EducationSeasonController::class, 'create'])->name('create');
                });
                Route::group(['prefix' => 'lesson', 'as' => 'lesson_'], function () {
                   // Route::get('create/{seasonId}/{title}/{subject?}', [EducationLessonController::class, 'create'])->name('create');
                });
            });

        });


    });
});





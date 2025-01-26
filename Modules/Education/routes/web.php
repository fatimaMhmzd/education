<?php

use Illuminate\Support\Facades\Route;
use Modules\Education\App\Http\Controllers\client\ProductController;
use Modules\Education\App\Http\Controllers\Master\PublicController;
use Modules\Education\Http\Controllers\client\CommentController;

/*Route::get('/test', function () {
    return 'test';
});*/

Route::get('/', [ProductController::class, 'index'])->name('index');

Route::group(['as' => 'education_', 'prefix' => 'education'], function () {
    Route::get('/', [ProductController::class, 'education'])->name('education');
    Route::get('/storeLike/{id}/{type}', [ProductController::class, 'storeLike'])->name('storeLike');
    Route::get('/storeSave/{id}/{type}', [ProductController::class, 'storeSave'])->name('storeSave');
    Route::get('/list', [ProductController::class, 'list'])->name('list');
    Route::get('/detail/{id}', [ProductController::class, 'eduDetail'])->name('eduDetail');
    Route::get('/desk', [ProductController::class, 'desk'])->name('desk');
    Route::get('/course', [ProductController::class, 'course'])->name('course');
    Route::get('/freeCourse', [ProductController::class, 'freeCourse'])->name('freeCourse');
    Route::get('/allCourse', [ProductController::class, 'allCourse'])->name('allCourse');
    Route::get('/specialCourses', [ProductController::class, 'courses'])->name('courses');
    Route::get('/favorite', [ProductController::class, 'edufavorite'])->name('edufavorite');
    Route::get('/registered', [ProductController::class, 'registered'])->name('registered');
    Route::get('/registeredHistory', [ProductController::class, 'history'])->name('history');
    Route::get('/testsResults', [ProductController::class, 'results'])->name('results');
    Route::get('/requset', [ProductController::class, 'requset'])->name('requset');
    Route::get('/educationPlace', [ProductController::class, 'place'])->name('place');
    Route::get('/shoppingCart', [ProductController::class, 'cart'])->name('cart');
    //temporary
    Route::get('/blog', [ProductController::class, 'blog'])->name('blog');
    Route::group(['as' => 'test_', 'prefix' => 'test'], function () {
        Route::get('/allTests', [ProductController::class, 'allTests'])->name('allTests');
        Route::get('/myTests', [ProductController::class, 'myTests'])->name('myTests');
    });
    Route::group(['as' => 'comment_', 'prefix' => 'comment'], function () {
        Route::get('/{productId}', [CommentController::class, 'index'])->name('index');
        Route::post('/', [CommentController::class, 'store'])->name('store');
    });


});

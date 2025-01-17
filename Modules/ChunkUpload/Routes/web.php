<?php

use Illuminate\Support\Facades\Route;
use Modules\ChunkUpload\Http\Controllers\ChunkUploadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(["prefix" => "chunk", "as" => "chunk_"], function () {
    Route::get('/index', [ChunkUploadController::class, 'index'])->name('index');
    Route::post('/chunk', [ChunkUploadController::class, 'upload'])->name('chunk');
});

<?php

use Illuminate\Support\Facades\Route;
use Modules\Education\App\Http\Controllers\Master\PublicController;

/*Route::get('/test', function () {
    return 'test';
});*/

Route::get('/', [PublicController::class, 'index'])->name('index');



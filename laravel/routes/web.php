<?php

use App\Http\Controllers\BbsController;

Route::get('/', [BbsController::class, 'index'])->name('index');
Route::get('/{bb}', [BbsController::class, 'detail'])->name('detail');

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportItemController;

Route::get('/', [ImportItemController::class, 'index']);

Route::resource('items', ImportItemController::class);
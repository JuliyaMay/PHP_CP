<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

Route::get('/services', [PageController::class, 'services']);
Route::get('/staff', [PageController::class, 'staff']);
Route::get('/schedule', [PageController::class, 'schedule']);
Route::get('/confirmation', [PageController::class, 'confirmation']);

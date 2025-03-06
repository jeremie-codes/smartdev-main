<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RouteController;

Route::get('/', [RouteController::class, 'index'])->name('home');
Route::get('/about', [RouteController::class, 'about'])->name('about');
Route::get('/realisations', [RouteController::class, 'real'])->name('real');

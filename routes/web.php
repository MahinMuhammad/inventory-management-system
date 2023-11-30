<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::get('/login', [AuthController::class,'show'])->name('login');

Route::post('/login', [AuthController::class,'login'])->name('loginSubmit');

Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::get('/dashboard', [ProductController::class,'showAll'])->middleware('auth');

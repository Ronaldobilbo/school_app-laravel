<?php

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\LoginControllers;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeControllers::class, 'index']);

Route::get('/login', [LoginControllers::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [LoginControllers::class, 'authenticate']);

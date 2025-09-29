<?php

use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\LoginControllers;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\RedirectResponse;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeControllers::class, 'index']);

Route::get('/login', [LoginControllers::class, 'ShowLoginForm'])->name('login');
Route::post('/login', [LoginControllers::class, 'authenticate']);

Route::post('/logout', function (\Illuminate\Http\Request $request) {
    Auth::logout();

    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/login');
})->name('logout');

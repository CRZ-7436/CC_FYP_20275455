<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('landing');
})->name('home.show');

Route::get('/about', function () {
    return view('about');
})->name('about.show');

Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup.show');
Route::post('/signup', [AuthController::class, 'register'])->name('signup.register');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.perform');
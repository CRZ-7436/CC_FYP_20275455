<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('landing');
})->name('home.show');

Route::get('/about', function () {
    return view('about');
})->name('about.show');

Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup.show');
Route::post('/signup', [AuthController::class, 'register'])->name('signup.register');


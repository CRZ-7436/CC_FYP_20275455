<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ChatOneController;
use App\Http\Controllers\ChatTwoController;
use App\Http\Controllers\ChatThreeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

// About Us Page
Route::get('/about', function () {
    return view('about');
})->name('about');

// Dashboard - requires authentication
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes - require authentication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Route for ChatGPT's API chatbot
Route::get('/chatbots/chatone', [ChatOneController::class, 'index'])->name('chatone');
//route ofr handling form submission
Route::post('/chatone/chat', [ChatOneController::class, 'chat'])->name('chatone.chat');

// Route for chatbot 2
Route::get('/chatbots/chattwo', [ChatTwoController::class, 'index'])->name('chattwo');

// Route for chatbot 3
Route::get('/chatbots/chatthree', [ChatThreeController::class, 'index'])->name('chatthree');
<?php

// routes/web.php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientLoginController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

Route::view('/', 'index')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio', 'portfolio')->name('portfolio');
Route::view('/contact', 'contact')->name('contact');
Route::view('/faq', 'faq')->name('faq');
Route::view('/get-started', 'get-started')->name('get-started');
Route::get('/client-login', [ClientLoginController::class, 'showLoginForm'])->name('client.login.form');
Route::post('/login', [ClientLoginController::class, 'login'])->name('login');
Route::view('/dashboard', 'dashboard')->name('dashboard')->middleware('auth');

Auth::routes();


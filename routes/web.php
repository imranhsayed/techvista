<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TrainController;

Route::get( '/', function () {
	return view( 'welcome' );
} );

Route::get( 'trains', [ TrainController::class, 'index' ] )->name( 'trains' );
Route::get( 'trains/{id}', [ TrainController::class, 'show' ] )->name( 'traindetail' );

Route::middleware( [\App\Http\Middleware\RequireAdmin::class] )->group(function () {
	Route::get('/admin/trains', [\App\Http\Controllers\Admin\TrainController::class, 'index'])->name('list');
	Route::get('/admin/trains/edit/{id}', [\App\Http\Controllers\Admin\TrainController::class, 'edit'])->name('TrainEdit');
	Route::put('/admin/trains/{id}', [\App\Http\Controllers\Admin\TrainController::class, 'update'])->name('TrainUpdate');
	Route::get('/admin/trains/create', [\App\Http\Controllers\Admin\TrainController::class, 'create'])->name('TrainCreate');
	Route::post('/admin/trains', [\App\Http\Controllers\Admin\TrainController::class, 'store'])->name('TrainStore');
	Route::delete('/admin/trains/{id}', [\App\Http\Controllers\Admin\TrainController::class, 'destroy'])->name('TrainDelete');
});

Auth::routes();

Route::get( '/home', [ App\Http\Controllers\HomeController::class, 'index' ] )->name( 'home' );
Route::get('/about', fn() => view('about', []))->name('about');
Route::get('/services', fn() => view('services', []))->name('services');
Route::get('/portfolio', fn() => view('portfolio', []))->name('portfolio');
Route::get('/contact', fn() => view('contact', []))->name('contact');
Route::get('/faq', fn() => view('faq', []))->name('faq');

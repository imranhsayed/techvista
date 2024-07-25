<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InquiryController;
use App\Http\Controllers\ContactController;

Route::get( '/', function () {
	return view( 'welcome' );
} );

Route::get( 'inquiries', [ InquiryController::class, 'index' ] )->name( 'inquiries' );
Route::get( 'inquiries/{id}', [ InquiryController::class, 'show' ] )->name( 'traindetail' );

Route::get( '/home', [ App\Http\Controllers\HomeController::class, 'index' ] )->name( 'home' );
Route::get('/about', fn() => view('about', []))->name('about');
Route::get('/services', fn() => view('services', []))->name('services');
Route::get('/portfolio', fn() => view('portfolio', []))->name('portfolio');
Route::get('/contact', [ ContactController::class, 'index' ] )->name( 'contact' );
Route::get('/faq', fn() => view('faq', []))->name('faq');
Route::get('/thank-you', fn() => view('thank-you', []))->name('thank-you');
Route::post('/admin/inquiry', [\App\Http\Controllers\Admin\InquiryController::class, 'store'])->name('InquiryStore');

Auth::routes();
Route::middleware( [\App\Http\Middleware\RequireAdmin::class] )->group(function () {
	Route::get('/admin/inquiry', [\App\Http\Controllers\Admin\InquiryController::class, 'index'])->name('list');
	Route::get('/admin/inquiry/edit/{id}', [\App\Http\Controllers\Admin\InquiryController::class, 'edit'])->name('InquiryEdit');
	Route::put('/admin/inquiry/{id}', [\App\Http\Controllers\Admin\InquiryController::class, 'update'])->name('InquiryUpdate');
	Route::get('/admin/inquiry/create', [\App\Http\Controllers\Admin\InquiryController::class, 'create'])->name('InquiryCreate');
	Route::delete('/admin/inquiry/{id}', [\App\Http\Controllers\Admin\InquiryController::class, 'destroy'])->name('InquiryDelete');
});

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Admin\ProjectManagementController;
use App\Http\Middleware\RequireAdmin;
use App\Http\Middleware\EnsureUserIsAuthenticated;

Route::get('/', function () {
    return view('welcome');
});

// Public Routes

Route::get('/about', fn() => view('about'))->name('about');
Route::get('/services', fn() => view('services'))->name('services');
Route::get('/portfolio', fn() => view('portfolio'))->name('portfolio');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('InquiryStore');  
Route::get('/faq', fn() => view('faq'))->name('faq');
Route::get('/thank-you', fn() => view('thank-you'))->name('thank-you');

// Authentication Routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// User Routes
Route::middleware(['auth', EnsureUserIsAuthenticated::class])->group(function () {
    Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');

    Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
  
});

// Admin Routes
Route::middleware(['auth', RequireAdmin::class])->group(function () {
    // Inquiry Routes
    Route::get('/admin/inquiries', [InquiryController::class, 'index'])->name('admin.inquiries.index');
    Route::get('/admin/inquiries/{id}', [InquiryController::class, 'show'])->name('admin.inquiries.show');
    Route::post('/admin/inquiries', [InquiryController::class, 'store'])->name('admin.inquiries.store');
    Route::get('/admin/inquiries/create', [InquiryController::class, 'create'])->name('admin.inquiries.create');
    Route::get('/admin/inquiries/edit/{id}', [InquiryController::class, 'edit'])->name('admin.inquiries.edit');
    Route::put('/admin/inquiries/{id}', [InquiryController::class, 'update'])->name('admin.inquiries.update');
    Route::delete('/admin/inquiries/{id}', [InquiryController::class, 'destroy'])->name('admin.inquiries.destroy');
    Route::put('/admin/inquiries/{id}/update-status', [InquiryController::class, 'updateStatus'])->name('admin.inquiries.updateStatus');
    Route::put('/admin/inquiries/{id}/update-notes', [InquiryController::class, 'updateNotes'])->name('admin.inquiries.updateNotes');
    
    // Project Management Routes
    Route::resource('/admin/projects', ProjectManagementController::class, ['as' => 'admin']);
});


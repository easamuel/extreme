<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Pages
Route::get('/products/hr', [ProductController::class, 'hr'])->name('products.hr');
Route::get('/products/school', [ProductController::class, 'school'])->name('products.school');

// Contact Form (CSRF protected by default)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Dashboard (requires authentication)
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

// Authentication Routes
require __DIR__.'/auth.php';

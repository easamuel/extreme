<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsletterController;

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
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/academy', [HomeController::class, 'academy'])->name('academy');

// Product Pages
Route::get('/products/school', [ProductController::class, 'school'])->name('products.school');
Route::get('/products/espass', [ProductController::class, 'espass'])->name('products.espass');
Route::get('/products/hr', [ProductController::class, 'hr'])->name('products.hr');

// Contact Form (CSRF protected by default)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Newsletter Signup
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.subscribe');

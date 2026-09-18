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
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Product Pages
Route::get('/products/school', [ProductController::class, 'school'])->name('products.school');
Route::get('/products/espass', [ProductController::class, 'espass'])->name('products.espass');
Route::get('/products/hr', [ProductController::class, 'hr'])->name('products.hr');

// Contact Form (CSRF protected by default)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

// Newsletter Signup
Route::post('/newsletter', [NewsletterController::class, 'store'])->name('newsletter.subscribe');

// Direct SEO Discovery Routes (ensures valid headers on cPanel / Nginx / Apache)
Route::get('/robots.txt', function () {
    $path = public_path('robots.txt');
    if (file_exists($path)) {
        return response(file_get_contents($path), 200, [
            'Content-Type' => 'text/plain; charset=UTF-8',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }
    return response("User-agent: *\nAllow: /\nSitemap: https://extremesolutions.com.ng/sitemap.xml\n", 200, [
        'Content-Type' => 'text/plain; charset=UTF-8',
    ]);
});

Route::get('/sitemap.xml', function () {
    $path = public_path('sitemap.xml');
    if (file_exists($path)) {
        return response(file_get_contents($path), 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
            'Cache-Control' => 'public, max-age=86400',
        ]);
    }
    abort(404);
});

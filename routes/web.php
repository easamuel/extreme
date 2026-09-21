<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\DiscoveryController;

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

// 1. INSTITUTIONAL SUPPORT & ACTIVE BACKER FUNNEL
Route::prefix('support')->name('support.')->group(function () {
    Route::get('/', [SupportController::class, 'index'])->name('index'); // ExtremeSolutions Mission & Support
    Route::get('/campaign', [SupportController::class, 'campaign'])->name('campaign'); // Active Support Campaign Letter (Public / Recipient)
    Route::get('/invest', [SupportController::class, 'invest'])->name('invest'); // Option B: Commercial Partner Advance Memo
    Route::get('/dispatch', [SupportController::class, 'dispatchMemo'])->name('dispatch'); // Secret Admin Dispatch Generator
    Route::get('/export-pdf', [SupportController::class, 'exportPdf'])->name('pdf');
});

// Top-level direct alias for Option B
Route::get('/invest', [SupportController::class, 'invest'])->name('invest');

// 2. STRATEGIC PARTNERSHIP & SCHOOL PROPOSAL
Route::prefix('partner')->name('partner.')->group(function () {
    Route::get('/', [PartnerController::class, 'index'])->name('index'); // ExtremeSolutions Partner Ecosystem
    Route::get('/school', [PartnerController::class, 'schoolProposal'])->name('school'); // Commercial School Proposal Letter (Public / Recipient)
    Route::get('/dispatch', [PartnerController::class, 'dispatchProposal'])->name('dispatch'); // Secret Admin Dispatch Generator
    Route::get('/export-pdf', [PartnerController::class, 'exportPdf'])->name('pdf');
});

// 3. DISCOVERIES & R&D PIPELINE (Unlisted & Gated Stealth)
Route::prefix('discoveries')->name('discoveries.')->group(function () {
    Route::get('/', [DiscoveryController::class, 'systemsIndex'])->name('systems');
    Route::get('/stealth/{token}', [DiscoveryController::class, 'stealthBrief'])->name('stealth');
    Route::get('/stealth/{token}/export-pdf', [DiscoveryController::class, 'exportStealthPdf'])->name('stealth.pdf');
});

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

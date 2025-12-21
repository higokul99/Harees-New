<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::get('/sign-in', [AuthController::class, 'showLogin'])->name('sign-in'); // Alias
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
    
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::get('/sign-up', [AuthController::class, 'showRegister'])->name('sign-up'); // Alias
    Route::post('/register', [AuthController::class, 'register'])->name('register.post');
    
    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('password.request');
    Route::get('/sign-forget', [AuthController::class, 'showForgotPassword'])->name('sign-forget'); // Alias
    Route::post('/forgot-password', [AuthController::class, 'forgotPassword'])->name('password.email');
    Route::post('/verify-security', [AuthController::class, 'verifySecurity'])->name('password.verify');
    Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Product Routes
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/product', [ProductController::class, 'index'])->name('product'); // Legacy: product.php
Route::get('/product-all', [ProductController::class, 'all'])->name('product-all'); // Legacy: product-all.php
Route::get('/product-detail', [ProductController::class, 'show'])->name('product.show'); // Legacy: product-detail.php
Route::get('/search', [ProductController::class, 'search'])->name('search');
Route::get('/search/suggestions', [ProductController::class, 'suggestions'])->name('search.suggestions');

// Cart Action Placeholder (To be moved to CartController)
Route::post('/uadd_to_cart', function() {
    return redirect()->back()->with('success', 'Item added to cart (Simulation)');
})->name('uadd_to_cart');

// Static Pages
Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contact-us');
Route::get('/stores', [PageController::class, 'stores'])->name('stores');
Route::get('/store', [PageController::class, 'stores'])->name('store'); // Alias
Route::get('/gold-rate', [PageController::class, 'goldRate'])->name('gold-rate');
Route::get('/our-brands', [PageController::class, 'ourBrands'])->name('our-brands');
Route::get('/career', [PageController::class, 'career'])->name('career');

// Help & Support
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/refund-policy', [PageController::class, 'refundPolicy'])->name('refund-policy');
Route::get('/track-your-order', [PageController::class, 'trackOrder'])->name('track-order');
Route::get('/shipping-policy', [PageController::class, 'shippingPolicy'])->name('shipping-policy');

// Legal Pages
Route::get('/terms-and-conditions', [PageController::class, 'termsConditions'])->name('terms-conditions');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/return-or-exchange-policy', [PageController::class, 'returnExchange'])->name('return-exchange');
Route::get('/cancellation-policy', [PageController::class, 'cancellationPolicy'])->name('cancellation-policy');

// Services
Route::get('/gold-scheme-booking', [PageController::class, 'goldScheme'])->name('gold-scheme');
Route::get('/advance-gold-booking', [PageController::class, 'advanceBooking'])->name('advance-booking');
Route::get('/custom-jewellery', [PageController::class, 'customJewellery'])->name('custom-jewellery');
Route::get('/support', [PageController::class, 'support'])->name('support');

// Authenticated User Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () { return view('user.profile'); })->name('profile');
    Route::get('/uprofile', function () { return view('user.profile'); })->name('uprofile'); // Alias
    Route::post('/profile/update', [AuthController::class, 'updateProfile'])->name('profile.update');
    
    Route::get('/my-orders', function () { return view('user.orders'); })->name('orders');
    Route::get('/umyorders', function () { return view('user.orders'); })->name('umyorders'); // Alias
    
    Route::get('/my-schemes', function () { return view('user.schemes'); })->name('schemes');
    Route::get('/umyschemes', function () { return view('user.schemes'); })->name('umyschemes'); // Alias
    
    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::get('/ucart', [CartController::class, 'index'])->name('ucart'); // Alias
    Route::post('/cart/add', [CartController::class, 'add'])->name('cart.add');
    Route::post('/cart/remove', [CartController::class, 'remove'])->name('cart.remove');
    Route::post('/uadd_to_cart', [CartController::class, 'add'])->name('uadd_to_cart');
    
    Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist');
    Route::post('/wishlist/toggle', [WishlistController::class, 'toggle'])->name('wishlist.toggle');
    Route::post('/wishlist/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');
    
    Route::get('/home', function () { return view('user.home'); })->name('user.home');
    Route::get('/uhome', function () { return view('user.home'); })->name('uhome'); // Alias
});

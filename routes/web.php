<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;

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

// Shop pages routes using ShopController
Route::get('/', [ShopController::class, 'index'])->name('home');
Route::get('/about', [ShopController::class, 'about'])->name('about');
Route::get('/contact', [ShopController::class, 'contact'])->name('contact');

// Product routes using ProductController
// Products listing page
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
// Single product page
Route::get('/products/{product}', [ProductController::class, 'show'])->name('products.show');

// Contact form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

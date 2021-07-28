<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();


Route::view('/', 'home')->name('home');

// Route::view('/shopping-cart', 'theme.shopping-cart');

// Route::view('/shop', 'theme.shop');

// Route::view('/product', 'theme.product');

// Route::view('/check-out', 'theme.check-out');

// Route::view('/blog', 'theme.blog');

// Route::view('/blog-details', 'theme.blog-details');

Route::resource('products', 'ProductController');
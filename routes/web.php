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

define("PAGINATION_COUNT",5);

Auth::routes();

Route::resource('posts', 'PostController');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/shop', 'ShopController@index');

Route::view('/shopping-cart', 'theme.shopping-cart');

Route::view('/product', 'theme.product');

Route::view('/check-out', 'theme.check-out');

Route::view('/blog', 'theme.blog');

Route::view('/blog-details', 'theme.blog-details');

Route::view('/admin-dashboard', 'dashboard.admin-dashboard.index');

Route::view('/blanke', 'dashboard.admin-dashboard.blanke');



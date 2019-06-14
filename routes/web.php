<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/home', 'ViewController@home') -> name('home');

Route::get('/blog', 'ViewController@blog') -> name('blog');

Route::get('/404', 'ViewController@error') -> name('error');

Route::get('/about', 'ViewController@about') -> name('about');

Route::get('/category', 'ViewController@category') -> name('category');

Route::get('/faq', 'ViewController@faq') -> name('faq');

Route::get('/blog-details', 'ViewController@blogDetails') -> name('blog-details');

Route::get('/checkout', 'ViewController@checkout') -> name('checkout');

Route::get('/sign-in', 'ViewController@signIn') -> name('sign-in');

Route::get('/shopping-cart', 'ViewController@shoppingCart') -> name('shopping-cart');

Route::get('/my-wishlist', 'ViewController@myWishlist') -> name('my-wishlist');

Route::get('/contact', 'ViewController@contact') -> name('contact');

Route::get('/detail', 'ViewController@detail') -> name('detail');

Route::get('/product-comparison', 'ViewController@productComparison') -> name('product-comparison');

Route::get('/terms-conditions', 'ViewController@termsConditions') -> name('terms-conditions');

Route::get('/track-orders', 'ViewController@trackOrders') -> name('track-orders');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

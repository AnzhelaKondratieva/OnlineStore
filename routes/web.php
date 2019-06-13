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
Route::get('/home', 'ViewController@home');

Route::get('/blog', 'ViewController@blog');

Route::get('/404', 'ViewController@error');

Route::get('/about', 'ViewController@about');

Route::get('/category', 'ViewController@category');

Route::get('/faq', 'ViewController@faq');

Route::get('/blog-details', 'ViewController@blogDetails');

Route::get('/checkout', 'ViewController@checkout');

Route::get('/sign-in', 'ViewController@signIn');

Route::get('/shopping-cart', 'ViewController@shoppingCart');

Route::get('/my-wishlist', 'ViewController@myWishlist');

Route::get('/contact', 'ViewController@contact');

Route::get('/detail', 'ViewController@detail');

Route::get('/product-comparison', 'ViewController@productComparison');

Route::get('/terms-conditions', 'ViewController@termsConditions');

Route::get('/track-orders', 'ViewController@trackOrders');
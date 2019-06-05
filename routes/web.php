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
Route::get('/home', function () {
    dump(\App\Product::$categories);
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/category', function () {
    return view('category');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/blog-details', function () {
    return view('blog-details');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/shopping-cart', function () {
    return view('shopping-cart');
});

Route::get('/my-wishlist', function () {
    return view('my-wishlist');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/product-comparison', function () {
    return view('product-comparison');
});

Route::get('/terms-conditions', function () {
    return view('terms-conditions');
});

Route::get('/track-orders', function () {
    return view('track-orders');
});


Route::get('/products/{slug}', function ($slug) {
    $product = \App\Product::find($slug);
    dd($product->attributes);
    return view('category');
})->name('products.index');
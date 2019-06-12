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
    return view('blog.blog');
});

Route::get('/404', function () {
    return view('404');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/category', function () {
    return view('products.category');
});

Route::get('/faq', function () {
    return view('info.faq');
});

Route::get('/blog-details', function () {
    return view('blog.blog-details');
});

Route::get('/checkout', function () {
    return view('order.checkout');
});

Route::get('/sign-in', function () {
    return view('sign-in');
});

Route::get('/shopping-cart', function () {
    return view('order.shopping-cart');
});

Route::get('/my-wishlist', function () {
    return view('order.my-wishlist');
});

Route::get('/contact', function () {
    return view('info.contact');
});

Route::get('/detail', function () {
    return view('detail');
});

Route::get('/product-comparison', function () {
    return view('order.product-comparison');
});

Route::get('/terms-conditions', function () {
    return view('info.terms-conditions');
});

Route::get('/track-orders', function () {
    return view('order.track-orders');
});


Route::get('/products/{slug}', function ($slug) {
    $product = \App\Product::find($slug);
    dd($product->attributes);
    return view('category');
})->name('products.index');
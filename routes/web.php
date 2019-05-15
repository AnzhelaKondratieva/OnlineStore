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
Route::get('/index', function () {
return view('index');
});

Route::get('/index2', function () {
return view('index-02');
});

Route::get('/index3', function () {
return view('index-03');
});

Route::get('/index4', function () {
return view('index-04');
});

Route::get('/shop', function () {
return view('shop');
});

Route::get('/shop2', function () {
return view('shop-02');
});

Route::get('/shop3', function () {
return view('shop-03');
});

Route::get('/shop4', function () {
return view('shop-04');
});

Route::get('/404', function () {
return view('404');
});

Route::get('/about', function () {
return view('about');
});

Route::get('/blog', function () {
return view('blog');
}); 

Route::get('/blog2', function () {
return view('blog-02');
});

Route::get('/blog3', function () {
return view('blog-03');
});

Route::get('/blog4', function () {
return view('blog-04');
});

Route::get('/faq', function () {
return view('faq');
});

Route::get('/blog-detail2', function () {
return view('blog-detail-02');
});

Route::get('/blog-detail3', function () {
return view('blog-detail-03');
});

Route::get('/blog-detail', function () {
return view('blog-detail');
});

Route::get('/check-out', function () {
return view('check-out');
});

Route::get('/elements', function () {
return view('elements');
});

Route::get('/links', function () {
return view('links');
});

Route::get('/login', function () {
return view('login');
});

Route::get('/shop-cart', function () {
return view('shop-cart');
});

Route::get('/shop-detail', function () {
return view('shop-detail');
});

Route::get('/shop-detail2', function () {
return view('shop-detail-02');
});

Route::get('/shop-detail3', function () {
return view('shop-detail-03');
});

Route::get('/wish-list', function () {
return view('wish-list');
});

Route::get('/register', function () {
return view('register');
});
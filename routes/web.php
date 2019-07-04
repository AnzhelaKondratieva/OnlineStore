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


Route::get('/blog-details/{slug}', 'ViewController@blogDetails') -> name('blog-details');


Route::get('/404', 'ViewController@error') -> name('error');


Route::get('/about', 'ViewController@about') -> name('about');


Route::get('/categories', 'ViewController@categories') -> name('categories');


Route::get('/category-detail/{slug}', 'ViewController@category') -> name('category-detail');


Route::get('/product/{id}', 'ViewController@product') -> name('product');


Route::get('/faq', 'ViewController@faq') -> name('faq');


Route::post('/checkout', 'ViewController@checkout') -> name('checkout');



// Админка для редактирования пользователей

Route::get('/accounts/list', 'ViewController@accountsList') -> name('accounts.list');

Route::post('/myaccount/{id?}', 'ViewController@myAccount') -> name('myaccount');

Route::post('/myaccount/save{id}', 'ViewController@myAccountSave') -> name('myaccount.save');

Route::post('/myaccount/delete{id}', 'ViewController@myAccountDelete') -> name('myaccount.delete');

Route::post('/myaccount/create', 'ViewController@myAccountCreate') -> name('myaccount.create');


// Админка для блога

Route::get('/blog/list', 'ViewController@blogList') -> name('blog.list');

Route::get('/blog/create', 'ViewController@blogCreate') -> name('blog.create');

Route::get('/blog/edit/{id?}', 'ViewController@blogEdit') -> name('blog.edit');

Route::get('/blog/save/{id}', 'ViewController@blogSave') -> name('blog.save');

Route::get('/blog/delete', 'ViewController@blogDelete') -> name('blog.delete');


// Админка для категорий

Route::get('/categories/list', 'ViewController@сategoriesList') -> name('categories.list');

Route::get('/categories/edit/{id?}', 'ViewController@сategoriesEdit') -> name('categories.edit');

Route::get('/categories/save/{id}', 'ViewController@categoriesSave') -> name('categories.save');

Route::get('/categories/create', 'ViewController@categoriesCreate') -> name('categories.create');

Route::get('/categories/delete', 'ViewController@categoriesDelete') -> name('categories.delete');



//Админка для продуктов

Route::get('/products/list', 'ViewController@productsList') -> name('products.list');

Route::get('/products/edit/{id?}', 'ViewController@productsEdit') -> name('products.edit');

Route::get('/products/save/{id}', 'ViewController@productsSave') -> name('products.save');

Route::get('/products/create', 'ViewController@productsCreate') -> name('products.create');

Route::get('/products/delete', 'ViewController@productsDelete') -> name('products.delete');





Route::get('/shopping-cart', 'ViewController@shoppingCart') -> name('shopping-cart');


Route::get('my-wishlist', 'ViewController@myWishlist') -> name('my-wishlist');


Route::get('/contact', 'ViewController@contact') -> name('contact');


Route::get('/detail', 'ViewController@detail') -> name('detail');


Route::get('/product-comparison', 'ViewController@productComparison') -> name('product-comparison');


Route::get('/terms-conditions', 'ViewController@termsConditions') -> name('terms-conditions');


Route::get('/track-orders', 'ViewController@trackOrders') -> name('track-orders');

Route::auth();

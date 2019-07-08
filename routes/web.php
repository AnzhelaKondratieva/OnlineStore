<?php

//ОСНОВНЫЕ СТРАНИЦЫ САЙТА
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


Route::get('/shopping-cart', 'ViewController@shoppingCart') -> name('shopping-cart');


Route::get('my-wishlist', 'ViewController@myWishlist') -> name('my-wishlist');


Route::get('/contact', 'ViewController@contact') -> name('contact');


Route::get('/detail', 'ViewController@detail') -> name('detail');


Route::get('/product-comparison', 'ViewController@productComparison') -> name('product-comparison');


Route::get('/terms-conditions', 'ViewController@termsConditions') -> name('terms-conditions');


Route::get('/track-orders', 'ViewController@trackOrders') -> name('track-orders');

Route::auth();



// АДМИНКА ДЛЯ РЕДАКТИРОВАНИЯ ПОЛЬЗОВАТЕЛЕЙ

Route::get('/accounts/list', 'ViewController@accountsList') -> name('accounts.list');

Route::get('/myaccount/{id?}', 'ViewController@myAccount') -> name('myaccount');

Route::post('/myaccount/save/{id?}', 'ViewController@myAccountSave') -> name('myaccount.save');

Route::get('/myaccount/delete/{id}', 'ViewController@myAccountDelete') -> name('myaccount.delete');

Route::get('/myaccount/create', 'ViewController@myAccountCreate') -> name('myaccount.create');


// АДМИНКА ДЛЯ БЛОГА

Route::get('/blog/list', 'ViewController@blogList') -> name('blog.list');

Route::get('/blog/create', 'ViewController@blogCreate') -> name('blog.create');

Route::get('/blog/edit/{id?}', 'ViewController@blogEdit') -> name('blog.edit');

Route::post('/blog/save/{id?}', 'ViewController@blogSave') -> name('blog.save');

Route::get('/blog/delete/{id}', 'ViewController@blogDelete') -> name('blog.delete');


// АДМИНКА ДЛЯ КАТЕГОРИЙ

Route::get('/categories/list', 'ViewController@сategoriesList') -> name('categories.list');

Route::get('/categories/edit/{id?}', 'ViewController@сategoriesEdit') -> name('categories.edit');

Route::post('/categories/save/{id?}', 'ViewController@categoriesSave') -> name('categories.save');

Route::get('/categories/create', 'ViewController@categoriesCreate') -> name('categories.create');

Route::get('/categories/delete/{id}', 'ViewController@categoriesDelete') -> name('categories.delete');



//АДМИНКА ДЛЯ ПРОДУКТОВ

Route::get('/products/list', 'ViewController@productsList') -> name('products.list');

Route::get('/products/edit/{id?}', 'ViewController@productsEdit') -> name('products.edit');

Route::post('/products/save/{id?}', 'ViewController@productsSave') -> name('products.save');

Route::get('/products/create', 'ViewController@productsCreate') -> name('products.create');

Route::get('/products/delete/{id}', 'ViewController@productsDelete') -> name('products.delete');



//АДМИНКА ДЛЯ ЗАКАЗОВ

Route::get('/orders/list', 'ViewController@ordersList') -> name('orders.list');

Route::get('/orders/edit/{id?}', 'ViewController@ordersEdit') -> name('orders.edit');

Route::post('/orders/save/{id?}', 'ViewController@ordersSave') -> name('orders.save');

Route::get('/orders/create', 'ViewController@ordersCreate') -> name('orders.create');

Route::get('/orders/delete/{id}', 'ViewController@ordersDelete') -> name('orders.delete');



//КОРЗИНА
Route::post('/cart/add', 'CartController@add')->name('cart.add');

Route::post('/cart/remove', 'CartController@remove')->name('cart.remove');

Route::post('/cart/change', 'CartController@change')->name('cart.change');

Route::post('/cart/clear', 'CartController@clear')->name('cart.clear');





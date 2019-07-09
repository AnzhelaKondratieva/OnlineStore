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




Route::get('/adminpanel', 'AdminController@adminpanel') -> name('adminpanel');
// АДМИНКА ДЛЯ РЕДАКТИРОВАНИЯ ПОЛЬЗОВАТЕЛЕЙ

Route::get('/adminpanel/accounts/list', 'AdminController@accountsList') -> name('accounts.list');

Route::get('/adminpanel/myaccount/{id?}', 'AdminController@myAccount') -> name('myaccount');

Route::post('/adminpanel/myaccount/save/{id?}', 'AdminController@myAccountSave') -> name('myaccount.save');

Route::get('/adminpanel/myaccount/delete/{id}', 'AdminController@myAccountDelete') -> name('myaccount.delete');

Route::get('/adminpanel/myaccount/create', 'AdminController@myAccountCreate') -> name('myaccount.create');


// АДМИНКА ДЛЯ БЛОГА

Route::get('/adminpanel/blog/list', 'AdminController@blogList') -> name('blog.list');

Route::get('/adminpanel/blog/create', 'AdminController@blogCreate') -> name('blog.create');

Route::get('/adminpanel/blog/edit/{id?}', 'AdminController@blogEdit') -> name('blog.edit');

Route::post('/adminpanel/blog/save/{id?}', 'AdminController@blogSave') -> name('blog.save');

Route::get('/adminpanel/blog/delete/{id}', 'AdminController@blogDelete') -> name('blog.delete');


// АДМИНКА ДЛЯ КАТЕГОРИЙ

Route::get('/adminpanel/categories/list', 'AdminController@сategoriesList') -> name('categories.list');

Route::get('/adminpanel/categories/edit/{id?}', 'AdminController@сategoriesEdit') -> name('categories.edit');

Route::post('/adminpanel/categories/save/{id?}', 'AdminController@categoriesSave') -> name('categories.save');

Route::get('/adminpanel/categories/create', 'AdminController@categoriesCreate') -> name('categories.create');

Route::get('/adminpanel/categories/delete/{id}', 'AdminController@categoriesDelete') -> name('categories.delete');



//АДМИНКА ДЛЯ ПРОДУКТОВ

Route::get('/adminpanel/products/list', 'AdminController@productsList') -> name('products.list');

Route::get('/adminpanel/products/edit/{id?}', 'AdminController@productsEdit') -> name('products.edit');

Route::post('/adminpanel/products/save/{id?}', 'AdminController@productsSave') -> name('products.save');

Route::get('/adminpanel/products/create', 'AdminController@productsCreate') -> name('products.create');

Route::get('/adminpanel/products/delete/{id}', 'AdminController@productsDelete') -> name('products.delete');



//АДМИНКА ДЛЯ ЗАКАЗОВ

Route::get('/adminpanel/orders/list', 'AdminController@ordersList') -> name('orders.list');

Route::get('/adminpanel/orders/edit/{id?}', 'AdminController@ordersEdit') -> name('orders.edit');

Route::post('/adminpanel/orders/save/{id?}', 'AdminController@ordersSave') -> name('orders.save');

Route::get('/adminpanel/orders/create', 'AdminController@ordersCreate') -> name('orders.create');

Route::get('/adminpanel/orders/delete/{id}', 'AdminController@ordersDelete') -> name('orders.delete');



//КОРЗИНА
Route::post('/cart/add', 'CartController@add')->name('cart.add');

Route::post('/cart/remove', 'CartController@remove')->name('cart.remove');

Route::post('/cart/change', 'CartController@change')->name('cart.change');

Route::post('/cart/clear', 'CartController@clear')->name('cart.clear');





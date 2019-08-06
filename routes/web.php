<?php

//ОСНОВНЫЕ СТРАНИЦЫ САЙТА
Route::get('/home', 'ViewController@home') -> name('home');


Route::get('/404', 'ViewController@error') -> name('error');


Route::get('/faq', 'ViewController@faq') -> name('faq');


Route::post('/checkout', 'ViewController@checkout') -> name('checkout');


Route::get('my-wishlist', 'ViewController@myWishlist') -> name('my-wishlist');


Route::get('/contact', 'ViewController@contact') -> name('contact');


Route::get('/product-comparison', 'ViewController@productComparison') -> name('product-comparison');


Route::get('/terms-conditions', 'ViewController@termsConditions') -> name('terms-conditions');


Route::get('/track-orders', 'ViewController@trackOrders') -> name('track-orders');


Route::auth();




//БЛОГ

Route::get('/blog', 'BlogController@blog') -> name('blog');


Route::post('/blog-details/{slug}', 'BlogController@blogDetails') -> name('blog-details');


Route::post('/blog-details/{slug}/comments', 'BlogController@addComment') -> name('blog.addComment');



//КАТЕГОРИИ И ПРОДУКТЫ

Route::get('/categories', 'CategoriesController@categories') -> name('categories');


Route::get('/category-detail/{slug}', 'CategoriesController@category') -> name('category-detail');


Route::get('/product/{id}', 'CategoriesController@product') -> name('product');



//АДМИНКА
Route::get('/adminpanel', 'AdminController@adminpanel') -> name('adminpanel');

// АДМИНКА ДЛЯ РЕДАКТИРОВАНИЯ ПОЛЬЗОВАТЕЛЕЙ

Route::get('/adminpanel/accounts/list', 'AdminController@accountsList') -> name('admin.accountsList');

Route::get('/adminpanel/myaccount/{id?}', 'AdminController@myAccountEdit') -> name('admin.myAccountEdit');

Route::post('/adminpanel/myaccount/save/{id?}', 'AdminController@myAccountSave') -> name('admin.myAccountSave');

Route::get('/adminpanel/myaccount/delete/{id}', 'AdminController@myAccountDelete') -> name('admin.myAccountDelete');

Route::get('/adminpanel/myaccount/create', 'AdminController@myAccountCreate') -> name('admin.myAccountCreate');



// АДМИНКА ДЛЯ БЛОГА

Route::get('/adminpanel/blog/list', 'AdminController@blogList') -> name('admin.blogList');

Route::get('/adminpanel/blog/create', 'AdminController@blogCreate') -> name('admin.blogCreate');

Route::get('/adminpanel/blog/edit/{id?}', 'AdminController@blogEdit') -> name('admin.blogEdit');

Route::post('/adminpanel/blog/save/{id?}', 'AdminController@blogSave') -> name('admin.blogSave');

Route::get('/adminpanel/blog/delete/{id}', 'AdminController@blogDelete') -> name('admin.blogDelete');



// АДМИНКА ДЛЯ КАТЕГОРИЙ

Route::get('/adminpanel/categories/list', 'AdminController@сategoriesList') -> name('admin.categoryList');

Route::get('/adminpanel/categories/edit/{id?}', 'AdminController@сategoriesEdit') -> name('admin.categoryEdit');

Route::post('/adminpanel/categories/save/{id?}', 'AdminController@categoriesSave') -> name('admin.categorySave');

Route::get('/adminpanel/categories/create', 'AdminController@categoriesCreate') -> name('admin.categoryCreate');

Route::get('/adminpanel/categories/delete/{id}', 'AdminController@categoriesDelete') -> name('admin.categoryDelete');



//АДМИНКА ДЛЯ ПРОДУКТОВ

Route::get('/adminpanel/products/list', 'AdminController@productsList') -> name('admin.productList');

Route::get('/adminpanel/products/edit/{id?}', 'AdminController@productsEdit') -> name('admin.productEdit');

Route::post('/adminpanel/products/save/{id?}', 'AdminController@productsSave') -> name('admin.productSave');

Route::get('/adminpanel/products/create', 'AdminController@productsCreate') -> name('admin.productCreate');

Route::get('/adminpanel/products/delete/{id}', 'AdminController@productsDelete') -> name('admin.productDelete');



//АДМИНКА ДЛЯ ЗАКАЗОВ

Route::get('/adminpanel/orders/list', 'AdminController@ordersList') -> name('admin.ordersList');

Route::get('/adminpanel/orders/edit/{id?}', 'AdminController@ordersEdit') -> name('admin.ordersEdit');

Route::post('/adminpanel/orders/save/{id?}', 'AdminController@ordersSave') -> name('admin.ordersSave');

Route::get('/adminpanel/orders/create', 'AdminController@ordersCreate') -> name('admin.ordersCreate');

Route::get('/adminpanel/orders/delete/{id}', 'AdminController@ordersDelete') -> name('admin.ordersDelete');



//КОРЗИНА
Route::get('/shopping-cart', 'CartController@shoppingCart') -> name('shopping-cart');

Route::post('/shopping-cart/add', 'CartController@add') -> name('shopping-cart.add');

Route::post('/shopping-cart/remove', 'CartController@remove')->name('shopping-cart.remove');

Route::post('/shopping-cart/change', 'CartController@change')->name('shopping-cart.change');

Route::post('/shopping-cart/buy', 'CartController@buy')->name('shopping-cart.buy');


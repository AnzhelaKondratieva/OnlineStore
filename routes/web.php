<?php

//ОСНОВНЫЕ СТРАНИЦЫ САЙТА
Route::get('/home', 'ViewController@home') -> name('home');


Route::get('/404', 'ViewController@error') -> name('error');


Route::get('/faq', 'ViewController@faq') -> name('faq');


Route::get('/checkout', 'ViewController@checkout') -> name('checkout');


Route::get('/product-comparison', 'ViewController@productComparison') -> name('product-comparison');


Route::get('/terms-conditions', 'ViewController@termsConditions') -> name('terms-conditions');


Route::get('/track-orders', 'ViewController@trackOrders') -> name('track-orders');


Route::auth();


Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');



//КОНТАКТНАЯ ФОРМА ДЛЯ ОТПРАВКИ СООБЩЕНИЙ

Route::get('/contact', 'ContactUsController@contact') -> name('contact');


Route::post('/contact/send', 'ContactUsController@contactSend') -> name('contact.send');



//БЛОГ

Route::get('/blog', 'BlogController@blog') -> name('blog');


Route::get('/blog-details/{slug}', 'BlogController@blogDetails') -> name('blog-details');


Route::post('/blog-details/{slug}/comments', 'BlogController@addComment') -> name('blog.addComment');



//КАТЕГОРИИ И ПРОДУКТЫ

Route::get('/categories', 'CategoriesController@categories') -> name('categories');


Route::get('/category-detail/{slug}', 'CategoriesController@category') -> name('category-detail');


Route::get('/product/{id}', 'CategoriesController@product') -> name('product');



//АДМИНКА


Route::group(['prefix' => '/adminpanel',  'middleware' => 'admin'], function()
{
    // АДМИНКА ДЛЯ РЕДАКТИРОВАНИЯ ПОЛЬЗОВАТЕЛЕЙ
    Route::get('', 'AdminController@adminpanel') -> name('adminpanel');

    Route::get('/accounts/list', 'AdminController@accountsList') -> name('admin.accountsList');

    Route::get('/myaccount/{id?}', 'AdminController@myAccountEdit') -> name('admin.myAccountEdit');

    Route::post('/myaccount/save/{id?}', 'AdminController@myAccountSave') -> name('admin.myAccountSave');

    Route::get('/myaccount/delete/{id}', 'AdminController@myAccountDelete') -> name('admin.myAccountDelete');

    Route::get('/myaccount/create', 'AdminController@myAccountCreate') -> name('admin.myAccountCreate');

    // АДМИНКА ДЛЯ БЛОГА

    Route::get('/blog/list', 'AdminController@blogList') -> name('admin.blogList');

    Route::get('/blog/create', 'AdminController@blogCreate') -> name('admin.blogCreate');

    Route::get('/blog/edit/{id?}', 'AdminController@blogEdit') -> name('admin.blogEdit');

    Route::post('/blog/save/{id?}', 'AdminController@blogSave') -> name('admin.blogSave');

    Route::get('/blog/delete/{id}', 'AdminController@blogDelete') -> name('admin.blogDelete');

    // АДМИНКА ДЛЯ КАТЕГОРИЙ

    Route::get('/categories/list', 'AdminController@сategoriesList') -> name('admin.categoryList');

    Route::get('/categories/edit/{id?}', 'AdminController@сategoriesEdit') -> name('admin.categoryEdit');

    Route::post('/categories/save/{id?}', 'AdminController@categoriesSave') -> name('admin.categorySave');

    Route::get('/categories/create', 'AdminController@categoriesCreate') -> name('admin.categoryCreate');

    Route::get('/categories/delete/{id}', 'AdminController@categoriesDelete') -> name('admin.categoryDelete');

    //АДМИНКА ДЛЯ ПРОДУКТОВ

    Route::get('/products/list', 'AdminController@productsList') -> name('admin.productList');

    Route::get('/products/edit/{id?}', 'AdminController@productsEdit') -> name('admin.productEdit');

    Route::post('/products/save/{id?}', 'AdminController@productsSave') -> name('admin.productSave');

    Route::get('/products/create', 'AdminController@productsCreate') -> name('admin.productCreate');

    Route::get('/products/delete/{id}', 'AdminController@productsDelete') -> name('admin.productDelete');

    //АДМИНКА ДЛЯ ЗАКАЗОВ

    Route::get('/orders/list', 'AdminController@ordersList') -> name('admin.ordersList');

    Route::get('/orders/edit/{id?}', 'AdminController@ordersEdit') -> name('admin.ordersEdit');

    Route::post('/orders/save/{id?}', 'AdminController@ordersSave') -> name('admin.ordersSave');

    Route::get('/orders/create', 'AdminController@ordersCreate') -> name('admin.ordersCreate');

    Route::get('/orders/delete/{id}', 'AdminController@ordersDelete') -> name('admin.ordersDelete');
});



//КОРЗИНА
Route::get('/shopping-cart', 'CartController@shoppingCart') -> name('shopping-cart');

Route::post('/shopping-cart/add', 'CartController@add') -> name('shopping-cart.add');

Route::post('/shopping-cart/remove', 'CartController@remove')->name('shopping-cart.remove');

Route::post('/shopping-cart/change', 'CartController@change')->name('shopping-cart.change');

Route::post('/shopping-cart/buy', 'CartController@buy')->name('shopping-cart.buy');



//WISHLIST

Route::get('my-wishlist', 'WishListController@myWishlist') -> name('my-wishlist');

Route::post('/my-wishlist/add', 'WishListController@add') -> name('my-wishlist.add');

Route::post('/my-wishlist/destroy', 'WishListController@destroy')->name('my-wishlist.destroy');





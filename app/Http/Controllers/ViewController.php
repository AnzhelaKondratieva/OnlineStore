<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home() {
        return view('home', [
            'user' => $model
            ]
            );
    }
    public function blog() {
        return view('blog.blog');
    }
    public function error() {
        return view('404');
    }
    public function about() {
        return view('about');
    }

    public function category($slug) {
        $category = Category::where(
            [
                'is_public' => 1,
                'slug' => $slug
            ]
        )->firstOrFail();
        return view('products.category', ['category'=>$category]);
    }

    public function faq() {
        return view('info.faq');
    }
    public function blogDetails() {
        return view('blog.blog-details');
    }
    public function checkout() {
        return view('order.checkout');
    }
    public function logIn() {
        return view('auth.login');
    }
    public function shoppingCart() {
        return view('order.shopping-cart');
    }
    public function myWishlist() {
        return view('order.my-wishlist');
    }
    public function contact() {
        return view('info.contact');
    }
    public function detail() {
        return view('products.detail');
    }
    public function myAccount() {
        return view('auth.myaccount');
    }
    public function productComparison() {
        return view('order.product-comparison');
    }
    public function termsConditions() {
        return view('info.terms-conditions');
    }
    public function trackOrders() {
        return view('order.track-orders');
    }
}

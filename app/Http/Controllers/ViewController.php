<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    //ОСНОВНЫЕ СТРАНИЦЫ САЙТА

    public function home() {
        $article = Article::where(
            [
                'is_publish' => 1
            ]
        )->get();
        $product = Product::inRandomOrder()->take(5)->get();
        return view('home', [
            'article' => $article, 'product' => $product
        ]);
    }


    public function error() {
        return view('404');
    }


    public function about() {
        return view('about');
    }


    public function faq() {
        return view('info.faq');
    }

    public function checkout() {
        return view('order.checkout');
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
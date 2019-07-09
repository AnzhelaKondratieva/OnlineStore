<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class ViewController extends Controller
{

    //ОСНОВНЫЕ СТРАНИЦЫ САЙТА

    public function home() {
        return view('home');
    }

    public function blog() {
        $article = Article::where(
            [
                'is_publish' => 1
            ]
        )->paginate(2);
        return view('blog.blog', ['article' => $article]);
    }


    public function error() {
        return view('404');
    }


    public function about() {
        return view('about');
    }


    public function category($slug) {
        $category = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category->id)->paginate(10);
        return view('products.category-detail', ['products' => $products,  'categories' => Category::where('is_publish', 1)->get()]);

    }


    public function categories() {
        $categories = Category::all();
        return view('products.categories', ['categories' => $categories]);
    }

    public function product($id) {
        $product = Product::find($id);
        return view('products.product', ['product' => $product]);
    }


    public function faq() {
        return view('info.faq');
    }


    public function blogDetails($slug) {
        $article = Article::where('slug', $slug)->first();
        return view('blog.blog-details', [
            'article' => $article
        ]);
    }


    public function checkout() {
        return view('order.checkout');
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
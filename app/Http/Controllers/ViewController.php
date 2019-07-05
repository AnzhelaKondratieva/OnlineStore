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
    public function home() {
        return view('home', [
            'categories' => Category::where('is_publish', 1)->get()
        ]);
    }

    public function blog() {
        $article = Article::where(
            [
                'is_publish' => 1
            ]
        )->paginate(2);
        return view('blog.blog', ['article' => $article, 'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function error() {
        return view('404', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function about() {
        return view('about', [
            'categories' => Category::where('is_publish', 1)->get()]);
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
        return view('products.product', ['product' => $product,
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function faq() {
        return view('info.faq', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function blogDetails($slug) {
        $article = Article::where('slug', $slug)->first();
        return view('blog.blog-details', [
            'article' => $article, 'categories' => Category::where('is_publish', 1)->get()
        ]);
    }


    public function checkout() {
        return view('order.checkout', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function shoppingCart() {
        return view('order.shopping-cart', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function myWishlist() {
        return view('order.my-wishlist', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function contact() {
        return view('info.contact', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function detail() {
        return view('products.detail', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }




    // Админка для редактирования пользователей
    public function accountsList() {
        $users = User::paginate(20);
        return view('auth.list', ['users' => $users]);
    }


    public function myAccount($id) {
        $user = User::find($id);
        return view('auth.myaccount', [ 'user' => $user]);
    }


    public function myAccountSave($id=null, Request $request) {
        $request->validate([
            'name' => 'required|max:255|unique:users,name',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

        if($id === null) {
            $user = new User;
            $user->password = \Hash::make($request->password);
        }
       else {
           $user = User::find($id);
       }
        $user->fill($request->only('name', 'email', 'password'));
        $user->save();
        return redirect(route('accounts.list'))->with('success','User' . $user->name . '!');
    }


    public function myAccountDelete($id) {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with('success','User deleted successfully!');
    }


    public function myAccountCreate() {
        return view('auth.myaccount');
    }


    //Админка для блога

    public function blogList() {
        $articles = Article::paginate(5);
        return view('blog.list', ['articles' => $articles]);
    }


    public function blogEdit($id) {
        $article = Article::find($id);
        return view('blog.edit', [ 'article' => $article]);
    }

    public function blogSave($id=null, Request $request) {
        $request->validate([
            'title' => 'required|max:255|unique:articles,title',
            'description' => 'required',
            'image_path' => 'required',
            'slug' => 'required',
            'is_publish' => 'required|max:11'
        ]);

        if($id === null) {
            $article = new Article;
        }
        else {
            $article = Article::find($id);
        }
        $article->fill($request->only('title', 'description', 'image_path', 'slug', 'is_publish'));
        $article->save();
        return redirect(route('blog.list'))->with('success','Article' . $article->title . '!');
    }

    public function blogCreate() {
        return view('blog.edit');
    }


    public function blogDelete($id) {
        $article = Article::find($id);
        $article->delete();
        return redirect()->back()->with('success','Article deleted successfully!');
    }



    //Админка для категорий

    public function сategoriesList() {
        $categories = Category::paginate(10);
        return view('products.category_list', ['categories' => $categories]);
    }


    public function сategoriesEdit($id) {
        $category = Category::find($id);
        return view('products.category_edit', [ 'category' => $category]);
    }

    public function categoriesSave($id=null, Request $request) {
        $request->validate([
            'name' => 'required|max:255|unique:categories,name',
            'description' => 'required',
            'parent_id' => 'required|max:11',
            'is_publish' => 'required|max:11',
            'slug' => 'required'
        ]);

        if($id === null) {
            $category = new Category;
        }
        else {
            $category = Category::find($id);
        }
        $category->fill($request->only('name', 'description', 'parent_id', 'is_publish', 'slug'));
        $category->save();
        return redirect(route('categories.list'))->with('success','Category' . $category->title . '!');
    }


    public function categoriesCreate() {
        return view('products.category_edit');
    }


    public function categoriesDelete($id) {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('success','Category deleted successfully!');
    }


    //Админка для продуктов

    public function productsList() {
        $products = Product::paginate(10);
        return view('products.products_list', ['products' => $products]);
    }


    public function productsEdit($id) {
        $product = Product::find($id);
        return view('products.products_edit', [ 'product' => $product]);
    }

    public function productsSave($id=null, Request $request) {
        $request->validate([
            'name' => 'required|max:255',
            'articul' => 'required|max:255',
            'brand' => 'required',
            'image_path' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required|max:11'
        ]);

        if($id === null) {
            $product = new Product;
            $product->is_publish = false;
        }
        else {
            $product = Product::find($id);
        }
        $product->fill($request->only('name', 'articul', 'brand', 'image_path', 'description', 'price', 'category_id', 'is_publish'));
        $product->save();
        return redirect(route('products.list'))->with('success','Category' . $product->title . '!');
    }

    public function productsCreate() {
        return view('products.products_edit');
    }


    public function productsDelete($id) {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('success','Category deleted successfully!');
    }




    //Админка для заказов

    public function ordersList() {
        $orders = Order::paginate(10);
        return view('auth.orders_list', ['orders' => $orders]);
    }


    public function ordersEdit($id) {
        $order = Order::find($id);
        return view('auth.orders_edit', [ 'order' => $order]);
    }

    public function ordersSave($id=null, Request $request) {
        $request->validate([
            'user_id' => 'required|max:11',
            'phone' => 'required|max:11'
        ]);

        if($id === null) {
            $order = new Order;
            $order->validate([
                'user_id' => 'required|max:11',
                'phone' => 'required|max:11'
            ]);
        }
        else {
            $product = Product::find($id);
        }
        $order->fill($request->only('user_id', 'phone'));
        $order->save();
        return redirect(route('auth.orders_list'))->with('success','Category' . $order->id . '!');
    }

    public function ordersCreate() {
        return view('auth.orders_edit');
    }


    public function ordersDelete($id) {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back()->with('success','Category deleted successfully!');
    }












    public function productComparison() {
        return view('order.product-comparison', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function termsConditions() {
        return view('info.terms-conditions', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }


    public function trackOrders() {
        return view('order.track-orders', [
            'categories' => Category::where('is_publish', 1)->get()]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminpanel() {
        return view('adminpanel');
    }
    // АДМИНКА ДЛЯ РЕДАКТИРОВАНИЯ ПОЛЬЗОВАТЕЛЕЙ
    public function accountsList() {
        $users = User::paginate(20);
        return view('auth.list', ['users' => $users]);
    }


    public function myAccount($id) {
        $user = User::find($id);
        return view('auth.myaccount', [ 'user' => $user]);
    }


    public function myAccountSave($id=null, Request $request) {
        if($id === null) {
            $user = new User;
            $user->password = \Hash::make($request->password);
        }
        else {
            $user = User::find($id);
            $user->password = \Hash::make($request->password);
        }

        $email_rules = 'required|email';
        if($user->isDirty('email') || $user->id===null) {
            $email_rules.='|unique:users,email';
        }

        $request->validate([
            'name' => 'required|max:255',
            'email' => $email_rules,
            'password' => 'required|min:8',
            'role' => 'required'
        ]);

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



    //АДМИНКА ДЛЯ БЛОГА

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

        if ($request->has('image_path')) {
            // Get image file
            $image = $request->file('image_path');
            // Define folder path
            $name = md5(time());
            $folder = '/assets/images/blog-post/';
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $name. '.' . $image->getClientOriginalExtension());
            // Set user profile image path in database to filePath
            $article->image_path = $filePath;
        }

        $article->fill($request->only('title', 'description', 'slug', 'is_publish'));
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



    //АДМИНКА ДЛЯ КАТЕГОРИЙ

    public function сategoriesList() {
        $categories = Category::paginate(10);
        return view('products.category_list', ['categories' => $categories]);
    }


    public function сategoriesEdit($id) {
        $category = Category::find($id);
        return view('products.category_edit', [ 'category' => $category]);
    }

    public function categoriesSave($id=null, Request $request) {

        if($id === null) {
            $category = new Category;
            $request->validate([
                'name' => 'required|max:255|unique:categories,name',
                'description' => 'required',
                'parent_id' => 'required|max:11',
                'is_publish' => 'required|max:11',
                'slug' => 'required'
            ]);
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


    //АДМИНКА ДЛЯ ПРОДУКТОВ

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

        $product->fill($request->only('name', 'articul', 'brand', 'description', 'price', 'category_id', 'is_publish'));
        if ($request->has('image_path')) {
            // Get image file
            $image = $request->file('image_path');
            // Define folder path
            $name = md5(time());
            $folder = '/assets/images/products/'.$product->getUrl().'/';
            dd($folder);
            // Make a file path where image will be stored [ folder path + file name + file extension]
            $filePath = $folder . $name. '.' . $image->getClientOriginalExtension();
            $image->move(public_path($folder), $name. '.' . $image->getClientOriginalExtension());
            // Set user profile image path in database to filePath
            $article->image_path = $filePath;
        }
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



    //АДМИНКА ДЛЯ ЗАКАЗОВ

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
            'phone' => 'required|max:20'
        ]);

        if($id === null) {
            $order = new Order;
            $request->validate([
                'user_id' => 'required|max:11',
                'phone' => 'required|max:20'
            ]);
        }
        else {
            $order = Product::find($id);
        }
        $order->fill($request->only('user_id', 'phone'));
        $order->save();
        return redirect(route('orders.list'))->with('success','Category' . $order->id . '!');
    }

    public function ordersCreate() {
        return view('auth.orders_edit');
    }


    public function ordersDelete($id) {
        $order = Order::find($id);
        $order->delete();
        return redirect()->back()->with('success','Category deleted successfully!');
    }
}

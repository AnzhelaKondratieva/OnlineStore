<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function category($slug) {
        $category = Category::where('slug',$slug)->first();
        $products = Product::where('category_id',$category->id)->paginate(10);
        return view('products.category-detail', ['category' => $category, 'products' => $products,  'categories' => Category::where('is_publish', 1)->get()]);

    }


    public function categories() {
        $categories = Category::all();
        return view('products.categories', ['categories' => $categories]);
    }

    public function product($id) {
        $product = Product::find($id);
        $productHot = Product::inRandomOrder()->take(1)->get();
//        \DB::enableQueryLog();
//        dd($product->category()->get(),
//            \DB::getQueryLog());
        return view('products.product', ['product' => $product, 'productHot' => $productHot]);
    }

    public function product_search(Request $request) {
        dd($reauest->q);
    }
}

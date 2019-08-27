<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;


class CartController extends Controller
{
    private $cart;

//    public function __construct(){
//        //     $this->cart = new Cart();
//        // }

    public function add(Request $request) {
        $id = $request->id;
        $count = $request->count;

        if($count == null) {
            $count = 1;
        }

        $product = Product::find($id);
        $this->cart = new Cart();
        $this->cart->add($product, $count);
        return redirect(route('shopping-cart'));

    }
    public function shoppingCart(Request $request) {
//        dd(session()->all());
        $this->cart = new Cart();
        $ids=[];
        foreach($this->cart->products as $product) {
            $ids[] = $product['id'];
        }
        $products = Product::whereIn('id',$ids)
            ->get()->keyBy('id');
        return view('order.shopping-cart',[
            'cart'=> $this->cart,
            'products' => $products
        ]);
    }

    public function remove(Request $request) {
        $id = $request->id;
        $this->cart = new Cart();
        $this->cart->remove($id);
        return redirect(route('shopping-cart'));

    }
    public function change(Request $request) {
        $id = $request->id;
        $count = $request->count;
        $this->cart = new Cart();
        $this->cart->change($id, $count);
        return redirect(route('shopping-cart'));
    }
    public function buy() {
        $this->cart = new Cart();
        $body = '';
        foreach($this->cart->products as $product){
            $body .= $product['id'].' '. $product['count'].'<br>';
        }

        $res =  \Mail::raw($body, function($message)
        {
            $message->from('anzhela.testmail@gmail.com', 'anzhela.testmail@gmail.com');

            $message->to('kondratieva.anzhelika92@gmail.com');
        });
        $this->cart->clear();
        return redirect(route('shopping-cart',[
            'cart'=> $this->cart
        ]))->with('success','You successfully made your order!');

    }


}

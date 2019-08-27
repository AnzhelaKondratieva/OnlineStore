<?php

namespace App\Http\ViewComposers;

use App\Models\Cart;
use Illuminate\View\View;

class CartComposer
{
    public function compose(View $view)
    {
//        dump(session()->all());
        $cart = new Cart();
        return $view->with('cartproducts', $cart->products);
    }
}
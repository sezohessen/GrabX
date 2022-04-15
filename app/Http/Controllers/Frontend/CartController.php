<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request,$id)
    {

        dd($request->all());
        $cart = session()->get('cart');

        if(isset($cart[$id]['copy'])) {

        }
        
        $cart[$id] = [

        ];
        session()->put('cart', $cart);
        return redirect()->route('shop.cart');
    }
}

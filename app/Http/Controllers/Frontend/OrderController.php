<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Request as FacadesRequest;

class OrderController extends Controller
{
    public function show()
    {
        $ip      = FacadesRequest::ip();
        $cart    = Cart::where('ip',$ip)->first();
        $isExist = CartItem::where('cart_id',$cart->id)->get()->count();
        return view('Frontend.order',compact('cart','isExist'));
    }
}

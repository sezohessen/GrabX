<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Support\Facades\Request as FacadesRequest;

class OrderController extends Controller
{
    public function show()
    {
        $ip     = FacadesRequest::ip();
        $cart   = Cart::where('ip',$ip)->first();
        return view('Frontend.order',compact('cart'));
    }
}

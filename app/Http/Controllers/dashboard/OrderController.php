<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('dashboard.Orders.index');
    }
    public function pending()
    {
        return view('dashboard.Orders.pending');
    }
    public function show($id)
    {

        $order      = Order::findOrFail($id);
/*         $products   = Product::whereHas('orders', function($q) use($id){
            $q->where('order_items.order_id', $id);
        })->get(); */
        $products   = $order->products;
        return view('dashboard.Orders.show',compact('order','products'));
    }
}

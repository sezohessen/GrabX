<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
class TrackOrder extends Controller
{
    public function index()
    {
        $ip     = FacadesRequest::ip();
        $order  = Order::where('ip',$ip)
        ->whereIn('status',  [Order::Pending,Order::OnWay])
        ->first();
        return view('Frontend.track',compact('order'));
    }
}

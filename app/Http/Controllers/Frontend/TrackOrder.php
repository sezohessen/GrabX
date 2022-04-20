<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
class TrackOrder extends Controller
{
    public function index($id)
    {
        $ip     = FacadesRequest::ip();
        $order  = Order::where('ip',$ip)
        ->where('id', $id)
        ->first();

        return ($order) ? view('Frontend.track',compact('order')) : redirect()->route('tenant.Homepage');
    }
}

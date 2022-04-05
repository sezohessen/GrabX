<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\PromoCode;
use Carbon\Carbon;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $orders             = Order::get();
        $totalOrderPrice    = Order::all()->sum('total');
        $IsSeeded           = Order::first();
        $canceldOrders      = Order::where('status','4')->get();
        $products           = Product::all();
        $soldProducts       = OrderItem::all();
        $promoCodeUsage     = PromoCode::all()->sum('usable');
        $mostPromoCodeUsed  = PromoCode::max('usable');
        $maxCode            = PromoCode::where('usable',$mostPromoCodeUsed)->first();

        // if website has data
        if($IsSeeded != null)
        {
            // calculate percentage of order sales
            $dateFrom           = Carbon::now()->subDays(30);
            $dateTo             = Carbon::now();
            $weekly             = Order::whereBetween('created_at', [$dateFrom, $dateTo])->sum('total');
            $previousDateFrom   = Carbon::now()->subDays(60);
            $previousDateTo     = Carbon::now()->subDays(31);
            $previousMonthly    = Order::whereBetween('created_at', [$previousDateFrom,$previousDateTo])->sum('total');
            if($previousMonthly < $weekly){
                if($previousMonthly > 0){
                    $percent_from = $weekly - $previousMonthly;
                    $float  = $percent_from / $previousMonthly * 100; //increase percent
                    $percent = bcadd($float,'0',2);
                }else{
                    $percent = 100; //increase percent
                }
            }else{
                $percent_from = $previousMonthly - $weekly;
                $float = $percent_from / $previousMonthly * 100; //decrease percent
                $percent = bcadd($float,'0',2);
            }
            // end calculate percentage of order sales

            return view('dashboard.HomePage',
            compact('orders','totalOrderPrice','IsSeeded','previousMonthly','weekly'
            ,'percent','products','soldProducts','promoCodeUsage','canceldOrders','maxCode','mostPromoCodeUsed'));
        } else { // new website [Without data]
            return view('dashboard.HomePage',
            compact('orders','totalOrderPrice','IsSeeded','products','soldProducts','promoCodeUsage','canceldOrders','maxCode','mostPromoCodeUsed'));
        }

    }
}

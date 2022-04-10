<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GuestIp;
use App\Models\Order ;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\PromoCode;
use App\Models\Setting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{



    public function index(Request $request)
    {

        // $ip                 =  request()->ip();
        // $getIp              =  geoip()->getLocation($ip);
        // $storeIp            =  GuestIp ::create([
        //     'ip'            => $getIp->ip,
        //     'iso_code'      => $getIp->iso_code,
        //     'country'       => $getIp->country,
        //     'city'          => $getIp->city,
        //     'state'         => $getIp->state,
        //     'state_name'    => $getIp->state_name,
        //     'postal_code'   => $getIp->postal_code,
        //     'lat'           => $getIp->lat,
        //     'lon'           => $getIp->lon,
        //     'timezone'      => $getIp->timezone,
        //     'continent'     => $getIp->continent,
        //     'currency'      => $getIp->currency,
        // ]);
        // End get Ip


        $Setting            = Setting::first();
        $orders             = Order::get();
        $totalOrderPrice    = Order::all()->sum('total');
        $IsSeeded           = Order::first();
        $canceldOrders      = Order::where('status','4')->get();
        $products           = Product::all();
        $soldProducts       = OrderItem::all();
        $promoCodeUsage     = PromoCode::all()->sum('usable');
        $mostPromoCodeUsed  = PromoCode::max('usable');
        $maxCode            = PromoCode::where('usable',$mostPromoCodeUsed)->first();
        $guests             = GuestIp::orderBy('id','DESC')->take(100)->get();
        $visitorsCount      = GuestIp::all()->count();
        $countryCount       = DB::table('guests_ip')->select('country', DB::raw('COUNT(*) as `count`'))
        ->groupBy('country')->orderBy('count','DESC')
        ->get();

        //refunded orders
        $refundedOrders          = Order::where('status',4)->get();
        $refundedOrdersTotal     = Order::where('status',4)->sum('total');
        for ($i = 0; $i < 7; $i++) {
            $refundedOrdersArray[] = $refundedOrders->whereBetween(
                'created_at',
                [Carbon::now()->subDay($i + 1), Carbon::now()->subDay($i)]
            )->count();
        }
        for ($i = 0; $i < 7; $i++) {
            $refundedOrdersCash[] = $refundedOrders->whereBetween(
                'created_at',
                [Carbon::now()->subDay($i + 1), Carbon::now()->subDay($i)]
            )->sum('total');
        }

        // Top sold product'
        $TopSales = Product::query()
        ->leftJoin('order_items','products.id','=','order_items.product_id')
        ->selectRaw('products.* , COALESCE(sum(order_items.qty),0) total_sold')
        ->groupBy('products.id')
        ->orderBy('total_sold','desc')
        ->take(10)
        ->get();
        // if website has data
        $previousMonthly = 0;
        $weekly          = 0;
        $percent         = 0;
        // calculate percentage of order sales
        $dateFrom           = Carbon::now()->subDays(30);
        $dateTo             = Carbon::now();
        $weekly             = Order::whereBetween('created_at', [$dateFrom, $dateTo])->where('status', '=', 3)->sum('total');
        $previousDateFrom   = Carbon::now()->subDays(60);
        $previousDateTo     = Carbon::now()->subDays(31);
        $previousMonthly    = Order::whereBetween('created_at', [$previousDateFrom,$previousDateTo])->where('status', '=', 3)->sum('total');
        $productWeekly      = Order::whereBetween('created_at', [$dateFrom, $dateTo])->count();
        $weekly             = Order::whereBetween('created_at', [$dateFrom, $dateTo])->sum('total');
        $previousWeekly     = Order::whereBetween('created_at', [$previousDateFrom,$previousDateTo])->sum('total');
        $percent_from       = abs($previousWeekly - $weekly);//Get Difference amount from previous and current amount of orders
        $previousWeekly     = !$previousWeekly ? 1 : $previousWeekly; // Avoid Division by zero problem
        $float              = $percent_from / max($previousWeekly,$weekly) * 100;
        $percent            = bcadd($float,'0',2);

        return view('dashboard.HomePage',compact('orders','totalOrderPrice','IsSeeded','previousMonthly','weekly','percent','products','soldProducts','promoCodeUsage','canceldOrders'
        ,'maxCode','mostPromoCodeUsed','visitorsCount','TopSales','guests','countryCount'
        ,'refundedOrders','refundedOrdersTotal','refundedOrdersArray','refundedOrdersCash'));

    }
}

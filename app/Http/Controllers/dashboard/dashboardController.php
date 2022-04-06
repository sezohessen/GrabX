<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\GuestIp;
use App\Models\Order ;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\PromoCode;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class dashboardController extends Controller
{



    public function index(Request $request)
    {
        $ip                 =  request()->ip();
        $getIp              =  geoip()->getLocation($ip);
        $storeIp            =  GuestIp ::create([
            'ip'            => $getIp->ip,
            'iso_code'      => $getIp->iso_code,
            'country'       => $getIp->country,
            'city'          => $getIp->city,
            'state'         => $getIp->state,
            'state_name'    => $getIp->state_name,
            'postal_code'   => $getIp->postal_code,
            'lat'           => $getIp->lat,
            'lon'           => $getIp->lon,
            'timezone'      => $getIp->timezone,
            'continent'     => $getIp->continent,
            'currency'      => $getIp->currency,
        ]);
        // End get Ip

        $orders             = Order::get();
        $totalOrderPrice    = Order::all()->sum('total');
        $IsSeeded           = Order::first();
        $canceldOrders      = Order::where('status','4')->get();
        $products           = Product::all();
        $soldProducts       = OrderItem::all();
        $promoCodeUsage     = PromoCode::all()->sum('usable');
        $mostPromoCodeUsed  = PromoCode::max('usable');
        $maxCode            = PromoCode::where('usable',$mostPromoCodeUsed)->first();
        $guests             = GuestIp::orderBy('country','DESC')->get();
        $visitorsCount      = GuestIp::all()->count();
        $countryCount       = DB::table('guests_ip')->select('country', DB::raw('COUNT(*) as `count`'))
        ->groupBy('country')->orderBy('count','DESC')
        ->get();

        // $guestsCities       = GuestIp::where('')


        dd($guestsCities);
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
        }
        return view('dashboard.HomePage',compact('orders','totalOrderPrice','IsSeeded','previousMonthly','weekly','percent','products','soldProducts','promoCodeUsage','canceldOrders'
        ,'maxCode','mostPromoCodeUsed','visitorsCount','TopSales','guests','countryCount'));

    }
}

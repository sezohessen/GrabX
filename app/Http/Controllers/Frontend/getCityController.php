<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class getCityController extends Controller
{
    public function getCity($id)
    {
        $cities = City::where('governorate_id', $id)->get();
        if($cities->count() > 0 ){
            return response()->json([
                'cities' => $cities
            ]);
        }
        return response()->json([
            'cities' => null
        ]);
    }

    public function deliverlyCost($id)
    {
        $city                 = City::findOrFail($id);
        $ip                   = FacadesRequest::ip();
        $discount             = Cart::where('ip',$ip)->first()->pluck('discount');
        $subtotal             = Cart::where('ip',$ip)->first()->pluck('subtotal');
        $total                = Cart::where('ip',$ip)->first()->pluck('total');
        return response()->json([
            'city'         => $city,
            'discount'     => $discount,
            'subtotal'     => $subtotal,
            'total'        => $total

        ]);
    }

}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Governorate;
use App\Models\Product;
use App\Models\ProductSelectOption;
use App\Models\ProductSelectOptionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ProductController extends Controller
{
    public function show($id)
    {
        $product                       = Product::findOrFail($id);
        // Select option name & type
        $selectOptionOneSelect         = ProductSelectOption::where('product_id',$id)->where('type',1)->get();
        $selectOptionMultipleSelect    = ProductSelectOption::where('product_id',$id)->where('type',2)->get();
        $selectOptionAdditionalSelect  = ProductSelectOption::where('product_id',$id)->where('type',3)->get();

        // dd($selectOptionAdditionalSelect[0]->Items);
        // dd($selectOptionOneSelect);
        return view('Frontend.Product',compact('product','selectOptionOneSelect','selectOptionMultipleSelect','selectOptionAdditionalSelect',));
    }
    public function BuyerDetails()
    {
        $ip             = FacadesRequest::ip();
        $governorates   = Governorate::all();
        $cart           = Cart::where('ip',$ip)->first();
        return view('Frontend.BuyerDetails',compact('governorates','cart'));
    }
}

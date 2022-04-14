<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductSelectOption;
use App\Models\ProductSelectOptionItem;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($id)
    {
        $product                       = Product::find($id);
        // Select option name & type
        $selectOptionOneSelect         = ProductSelectOption::where('product_id',$id)->where('type',1)->get();
        $selectOptionMultipleSelect    = ProductSelectOption::where('product_id',$id)->where('type',2)->get();
        $selectOptionAdditionalSelect  = ProductSelectOption::where('product_id',$id)->where('type',3)->get();

        // dd($selectOptionAdditionalSelect[0]->Items);
        // dd($selectOptionOneSelect);
        return view('Frontend.Product',compact('product','selectOptionOneSelect','selectOptionMultipleSelect','selectOptionAdditionalSelect'));
    }
}

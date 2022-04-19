<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItemOption;
use App\Models\Product;
use App\Models\ProductSelectOptionItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class CartController extends Controller
{
    public function addToCart(Request $request,$id)
    {
        $ip     = FacadesRequest::ip();
        $validated = $request->validate([
            'quantity' => 'required|gt:0',
        ]);
        $product    = Product::findOrFail($id);
        $cart       = Cart::where('ip',$ip)->first();
        if($cart){
            $CopyNum    = CartItem::where('product_id',$id)
            ->where('cart_id',$cart->id)
            ->max('copy_num');
            $CartItem   =   CartItem::create([
                'cart_id'       => $cart->id,
                'product_id'    => $product->id,
                'qty'           => $request->quantity,
                'price'         => $product->price,
                'copy_num'      => $CopyNum+1
            ]);
            $optionTotal    = 0;
            /* Create each Option that user select and add it to total amount*/
            if($request->OneSelect){
                foreach($request->OneSelect as $select){
                    $selectOpition  = ProductSelectOptionItem::findOrFail($select);
                    CartItemOption::create([
                        'cart_id'       => $cart->id,
                        'product_id'    => $product->id,
                        'product_select_option_item_id' => $selectOpition->id,
                        'copy_num'      => $CopyNum+1
                    ]);
                    $optionTotal+= $selectOpition->price;
                }
            }
            if($request->MultiSelect){
                foreach($request->MultiSelect as $select){
                    $selectOpition  = ProductSelectOptionItem::findOrFail($select);
                    CartItemOption::create([
                        'cart_id'       => $cart->id,
                        'product_id'    => $product->id,
                        'product_select_option_item_id' => $selectOpition->id,
                        'copy_num'      => $CopyNum+1
                    ]);
                    $optionTotal+= $selectOpition->price;
                }
            }
            if($request->AdditionalSelect){
                foreach($request->AdditionalSelect as $key => $select){
                    if($select){
                        $selectOpition  = ProductSelectOptionItem::findOrFail($key);
                        CartItemOption::create([
                            'cart_id'       => $cart->id,
                            'product_id'    => $product->id,
                            'product_select_option_item_id' => $selectOpition->id,
                            'copy_num'      => $CopyNum+1,
                            'qty'           => $select
                        ]);
                        $optionTotal+= ($selectOpition->price * $select);
                    }
                }
            }
            if($optionTotal){
                $CartItem->subtotal = $optionTotal;
                $CartItem->save();
            }
            $cart->subtotal   += ( ($product->price + $optionTotal) * $request->quantity);
            $discount   = 0;
            /* Calculate the precentage of discount if exist */
            if($cart->discount){
                $discount = ($cart->discount/100) * $cart->subtotal;
            }
            $cart->total  = $cart->subtotal - $discount;
            $cart->save();
        }else{
            $newCart    = Cart::create([
               'ip'         => $ip,
               'subtotal'   => 0,
               'total'      => 0,
            ]);
            $CartItem   = CartItem::create([
                'cart_id'       => $newCart->id,
                'product_id'    => $product->id,
                'qty'           => $request->quantity,
                'price'         => $product->price,
            ]);
            $optionTotal = 0;
            /* Create each Option that user select and add it to total amount*/
            if($request->OneSelect){
                foreach($request->OneSelect as $select){
                    $selectOpition  = ProductSelectOptionItem::findOrFail($select);
                    CartItemOption::create([
                        'cart_id'       => $newCart->id,
                        'product_id'    => $product->id,
                        'product_select_option_item_id' => $selectOpition->id,
                    ]);
                    $optionTotal+= $selectOpition->price;
                }
            }
            if($request->MultiSelect){
                foreach($request->MultiSelect as $select){
                    $selectOpition  = ProductSelectOptionItem::findOrFail($select);
                    CartItemOption::create([
                        'cart_id'       => $newCart->id,
                        'product_id'    => $product->id,
                        'product_select_option_item_id' => $selectOpition->id,
                    ]);
                    $optionTotal+= $selectOpition->price;
                }
            }
            if($request->AdditionalSelect){
                foreach($request->AdditionalSelect as $key => $select){
                    if($select){
                        $selectOpition  = ProductSelectOptionItem::findOrFail($key);
                        CartItemOption::create([
                            'cart_id'       => $newCart->id,
                            'product_id'    => $product->id,
                            'product_select_option_item_id' => $selectOpition->id,
                            'qty'           => $select
                        ]);
                        $optionTotal+= ($selectOpition->price * $select);
                    }
                }
            }
            if($optionTotal){
                $CartItem->subtotal = $optionTotal;
                $CartItem->save();
            }
            $newCart->subtotal  =( ($product->price + $optionTotal) * $request->quantity);
            $newCart->total     =( ($product->price + $optionTotal) * $request->quantity);
            $newCart->save();
        }
        return redirect()->route('tenant.CategoryProducts',['id'=>$product->category_id]);
    }
}

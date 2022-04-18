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
        /* dd($request->all()); */
        $validated = $request->validate([
            'quantity' => 'required|gt:0',
        ]);
        $product   = Product::findOrFail($id);
        $cart = Cart::where('ip',$ip)->first();
        $isExist   =  $cart? 1 : 0;
        if($isExist){
            $total = 0;
            CartItem::updateOrCreate([
                'cart_id'       => $cart->id,
                'product_id'    => $product->id,
                'qty'           => $request->quantity,
                'price'         => $product->price,
                'copy_num'      => $request->copy_num
            ]);
            $total+=($product->price * $request->quantity);
            /* Create each Option that user select and add it to total amount */
            if($request->OneSelect){
                foreach($request->OneSelect as $select){
                    $selectOpition  = ProductSelectOptionItem::findOrFail($select);
                    CartItemOption::create([
                        'cart_id'       => $cart->id,
                        'product_id'    => $product->id,
                        'product_select_option_item_id' => $selectOpition->id,
                    ]);
                    $total+= $selectOpition->price;
                }
            }

            if($request->MultiSelect){
                foreach($request->MultiSelect as $select){
                    $selectOpition  = ProductSelectOptionItem::findOrFail($select);
                    CartItemOption::create([
                        'cart_id'       => $cart->id,
                        'product_id'    => $product->id,
                        'product_select_option_item_id' => $selectOpition->id,
                    ]);
                    $total+= $selectOpition->price;
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
                            'qty'           => $select
                        ]);
                        $total+= ($selectOpition->price * $select);
                    }
                }
            }

            $cart->subtotal   += $total;
            $discount   = 0;
            /* Calculate the precentage of discount if exist */
            if($cart->discount){
                $discount = ($cart->discount/100) * $cart->subtotal;
            }
            $cart->total  = $cart->subtotal - $discount;
            $cart->save();
        }else{
            $total = 0;
            $newCart    = Cart::create([
               'ip'         => $ip,
               'subtotal'   => 0,
               'total'      => 0,
            ]);
            CartItem::create([
                'cart_id'       => $newCart->id,
                'product_id'    => $product->id,
                'qty'           => $request->quantity,
                'price'         => $product->price,
            ]);
            $total+=($product->price * $request->quantity);
            /* Create each Option that user select and add it to total amount */
            if($request->OneSelect){
                foreach($request->OneSelect as $select){
                    $selectOpition  = ProductSelectOptionItem::findOrFail($select);
                    CartItemOption::create([
                        'cart_id'       => $newCart->id,
                        'product_id'    => $product->id,
                        'product_select_option_item_id' => $selectOpition->id,
                    ]);
                    $total+= $selectOpition->price;
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
                    $total+= $selectOpition->price;
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
                        $total+= ($selectOpition->price * $select);
                    }
                }
            }

            $newCart->total     = $total;
            $newCart->subtotal  = $total;
            $newCart->save();
        }
        return redirect()->route('tenant.CategoryProducts',['id'=>$product->category_id]);
    }
}

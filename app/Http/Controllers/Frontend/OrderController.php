<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\PromoCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class OrderController extends Controller
{
    public function show()
    {
        $ip      = FacadesRequest::ip();
        $cart    = Cart::where('ip',$ip)->first();
        $isExist = $cart ? CartItem::where('cart_id',$cart->id)->get()->count() : NULL;
        return view('Frontend.order',compact('cart','isExist'));
    }
    public function delete($id,$copy_num)
    {
        $ip      = FacadesRequest::ip();
        $cart    = Cart::where('ip',$ip)->first();
        $cartItem   = CartItem::where('cart_id',$cart->id)
        ->where('product_id',$id)
        ->where('copy_num',$copy_num)
        ->first();
        if($cartItem){
            $productPrice   = ($cartItem->subtotal + $cartItem->price) * $cartItem->qty;
            $cart->subtotal-= $productPrice;
            $discount = 0;
            if($cart->discount){
                $discount = ($cart->discount/100) * $cart->subtotal;
            }
            $cart->total  = $cart->subtotal - $discount;
            $cart->save();
            $cartItem->delete();
            session()->flash('delete', __('Product has been removed'));
        }
        return redirect()->back();
    }
    public function promo(Request $request)
    {
        if($request->promo){
            $Check      = PromoCode::where('code',$request->promo)
            ->where('active',1)
            ->first();
            if($Check&&$Check->max_count > $Check->usable){
                $ip      = FacadesRequest::ip();
                $cart    = Cart::where('ip',$ip)->first();
                $Check->usable++;
                if($Check->usable < $Check->max_count ){
                    $cart->discount = $Check->discount;
                    $Check->save();
                    $cart->save();
                    session()->flash('promo', __($Check->discount.'% Discount has been added to your cart'));
                    return redirect()->back();
                }else{
                    session()->flash('failed', __('There is no promo code available like this'));
                    return redirect()->back();
                }
            }else{
                session()->flash('failed', __('There is no promo code available like this'));
                return redirect()->back();
            }
        }else{
            session()->flash('failed', __('There is no promo code available like this'));
            return redirect()->back();
        }

    }
}

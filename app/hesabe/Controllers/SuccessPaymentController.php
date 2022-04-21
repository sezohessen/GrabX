<?php

namespace App\hesabe\Controllers;
use App\hesabe\Controllers\PaymentController;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItemOption;
use App\Models\Order;
use App\Models\OrderDeliverly;
use App\Models\OrderItem;
use App\Models\OrderItemOption;
use App\Models\OrderPickup;
use App\Models\Payment;
use Illuminate\Http\Request;

class SuccessPaymentController extends Controller
{
    public function success(Request $request)
    {
        $PaymentController  = new PaymentController();
        $responseData       = $PaymentController->getPaymentResponse($request->data);
        $payment            = Payment::findOrFail($responseData->response['variable1']);
        $cart               = Cart::where('ip',$payment->ip)->first();
        $cartItems          = CartItem::where('cart_id',$cart->id)->get();
        $cartOption         = CartItemOption::where('cart_id',$cart->id)->get();
        if($payment->status != Payment::Success){
            if($cart->total==$payment->total){
                $order  = Order::create([
                    'ip'            => $payment->ip,
                    'name'          => $payment->name,
                    'phone'         => $payment->phone,
                    'email'         => $payment->email ? $payment->email : NULL,
                    'pickup'        => $payment->type==2 ? 1 : 0,
                    'deliverly'     => $payment->type==1 ? 1 : 0,
                    'discount'      => $cart->discount,
                    'subtotal'      => $cart->subtotal,
                    'deliverly_cost'=> $payment->deliverly_cost ? $payment->deliverly_cost : NULL,
                    'total'         => $payment->amount,
                    'status'        => Order::Pending
                ]);
                if($payment->type==1){
                    OrderDeliverly::create([
                        'order_id'          => $order->id,
                        'governorate_id'    => $payment->governorate_id,
                        'city_id'           => $payment->city_id,
                        'unit_type'         => $payment->unit_type,
                        'street'            => $payment->street,
                        'house_num'         => $payment->house_num,
                        'special_direction' => $payment->special_direction ? $payment->special_direction : NULL
                    ]);
                }else{
                    OrderPickup::create([
                        'order_id'  => $order->id,
                        'make'      => $payment->make,
                        'color'     => $payment->color,
                        'license'   => $payment->license ? $payment->license :NULL
                    ]);
                }
                /* Transfer Cart Items table to order items table */
                foreach($cartItems as $Item){
                    OrderItem::create([
                        'order_id'  => $order->id,
                        'product_id'=> $Item->product_id,
                        'qty'       => $Item->qty,
                        'price'     => $Item->price,
                        'subtotal'  => $Item->subtotal,
                        'copy_num'  => $Item->copy_num
                    ]);
                }
                /* Transfer Cart Items Options table to order items table */
                foreach($cartOption as $Option){
                    OrderItemOption::create([
                        'order_id'      => $order->id,
                        'product_id'    => $Option->product_id,
                        'product_select_option_item_id'     => $Option->product_select_option_item_id,
                        'copy_num'      => $Option->copy_num,
                        'qty'           => $Option->qty
                    ]);
                }
                $payment->status    = Payment::Success;
                $payment->order_id  = $order->id;
                $payment->save();
                $cart->delete();
            }
        }
        $ID     = $payment->order_id ? $payment->order_id: NULL;
        return view('Payment.success',compact('ID'));
    }
}

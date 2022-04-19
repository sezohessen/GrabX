<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\CartItem;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Request as FacadesRequest;

class Cart extends Component
{
    public $cart;
    public $isExist;
    public $inputQty;
    public $productId;

    public function mount()
    {
        $ip                     = FacadesRequest::ip();
        $this->cart             = ModelsCart::where('ip',$ip)->first();

        // $this->inputQty = $CartItem->qty;
        $this->isExist          = CartItem::where('cart_id',$this->cart->id)->get()->count();
    }

    public function increment($id)
    {
        $CartItem            = CartItem::where('product_id',$id)->first();
        $maxQty              = Product::find($id)->availabe_qty;
        if($CartItem->qty < $maxQty)
        {
            // increment product qty
            $CartItem->qty++;
            $CartItem->save();
            // call models to save data
            $this->inputQty         =  $CartItem->qty;
            // increment total
            $this->cart->subtotal        += $CartItem->price;
            $this->cart->total           += $CartItem->price;
            $this->cart->save();


        } else {
            session()->flash('max_'.$id, __('There is no other quantity to order'));
        }

    }


    public function render()
    {
        return view('livewire.cart');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\Governorate;
use Livewire\Component;
use Illuminate\Support\Facades\Request as FacadesRequest;


class OrderType extends Component
{

    public $governorates;
    public $cart;


    public function mount()
    {
        $this->governorates   = Governorate::all();
        $ip                   = FacadesRequest::ip();
        $this->cart           = Cart::where('ip',$ip)->first();
    }

    public function render()
    {
        return view('livewire.order-type');
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class SelectOptionEdit extends Component
{
    public $product;
    public function mount($product)
    {
        $this->product = $product;
    }
    public function render()
    {
        return view('livewire.select-option-edit');
    }
}

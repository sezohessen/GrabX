<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

class Search extends Component
{

    public $search;

    public function render()
    {
        $searchResult = [];

        if(strlen($this->search) >= 1)
        {
            $searchResult = Product::where('name', 'LIKE', '%'. $this->search .'%')
            ->orWhere('name_ar','LIKE', '%'. $this->search .'%')->take(10)->get();
        }


        return view('livewire.search',[
            'searchResult' => $searchResult
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;


class ProductIndex extends Component
{

    use WithPagination;


    protected $paginationTheme = 'bootstrap';
    public $search = '';
    public $page = 1;

    protected $queryString = [
        'search' => ['except' => '', 'as' => 's'],
        'page' => ['except' => 1, 'as' => 'p'],
    ];

    public function render()
    {
        return view('livewire.product-index',[
            'products'          => Product::orderBy('id','DESC')->where('name', 'LIKE', '%'. $this->search .'%')
                ->orWhere('name_ar','LIKE', '%'. $this->search .'%')->paginate(10),
            'productsCount'     => Product::all()->count(),
        ]);
    }
}

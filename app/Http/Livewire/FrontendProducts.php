<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendProducts extends Component
{

    public $category;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public    $search      = '';
    public    $page        = 1;
    private   $pagination  = 10;

    public function mount($id)
    {
        $this->category = Category::find($id);
    }

    public function render()
    {
        $products = Product::where('active',1)->where('category_id',$this->category->id)->paginate(10);

        return view('livewire.frontend-products',compact('products'));
    }

    // Add to cart
    public function addToCart()
    {
        
    }
}

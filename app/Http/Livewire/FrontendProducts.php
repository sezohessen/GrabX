<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class FrontendProducts extends Component
{

    public $category;
    public $products;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public    $search      = '';
    public    $page        = 1;
    private   $pagination  = 10;

    public function mount($id)
    {
        $this->category = Category::find($id);
        $this->products = Product::where('active',1)->where('category_id',$id)->paginate(10);
    }

    public function render()
    {

        return view('livewire.frontend-products');
    }
}

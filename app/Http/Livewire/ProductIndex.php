<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Illuminate\Contracts\Pagination\Paginator;
use Livewire\Component;
use Livewire\WithPagination;


class ProductIndex extends Component
{

    use WithPagination;


    protected $paginationTheme = 'bootstrap';
    public    $search      = '';
    public    $page        = 1;
    private   $pagination  = 10;

    protected $queryString = [
        'page' => ['except' => 1, 'as' => 'p'],
        'search' => ['except' => '', 'as' => 's'],
    ];
    // fix search on paginate
    public function updatingSearch()
    {
        $this->resetPage();
    }


    // Change active status in product Homepage
    public $product;
    public function changeActive($id)
    {
        $this->product = Product::where('id',$id)->first();
        $this->product->update([
            'active' => !$this->product->active
        ]);
        session()->flash('change', __('availability has successfully been changed'));
    }

    public function deleteProduct($id)
    {
        Product::find($id)->delete();
        session()->flash('delete', __('Product has successfully been deleted'));
    }

    public function render()
    {
        return view('livewire.product-index',[
            'products'          => Product::orderBy('id','DESC')->where('name', 'LIKE', '%'. $this->search .'%')
                ->orWhere('name_ar','LIKE', '%'. $this->search .'%')->paginate($this->pagination)
                ->appends('search', $this->search),
            'productsCount'     => Product::all()->count(),
        ]);
    }
}

<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\CartItemOption;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSelectOptionItem;
use Livewire\Component;
use Livewire\WithPagination;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;
class FrontendProducts extends Component
{

    public $category;

    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public    $search      = '';
    public    $page        = 1;
    private   $pagination  = 10;
    public    $cartCount;
    public    $total;


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
    public function addToCart(Request $request,$id)
    {
        $ip         = FacadesRequest::ip();
        $product    = Product::findOrFail($id);
        $cart       = Cart::where('ip',$ip)->first();
        // $isExist    =  $cart? 1 : 0;
        $hasOption  = ProductSelectOptionItem::where('product_id',$product->id)->first();

        if(!$hasOption)
        {
            if(!$cart){
                $total = 0;
                $newCart    = Cart::create([
                'ip'         => $ip,
                'subtotal'   => 0,
                'total'      => 0,
                ]);
                CartItem::create([
                    'cart_id'       => $newCart->id,
                    'product_id'    => $product->id,
                    'qty'           => ($request->quantity) ? $request->quantity : 1,
                    'price'         => $product->price,
                ]);
                $this->total+=($product->price * $request->quantity);
                $newCart->total     = $this->total;
                $newCart->subtotal  = $this->total;
                $newCart->save();

                dd($this->total);
                session()->flash('add', __('Product has successfully been added to cart'));
            }
        } else {
            return redirect()->route('tenant.Product',['id' => $product->id]);
        }


    }
}

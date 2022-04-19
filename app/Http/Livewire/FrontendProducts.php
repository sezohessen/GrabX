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
    public    $productExist;
    public    $inputQty;



    public function mount($id)
    {
        $this->category         = Category::find($id);
        $this->total            = Cart::get()->pluck('total');
        // Total cart itmes count
        $ip                     = FacadesRequest::ip();
        $cart                   = Cart::where('ip', $ip)->first();
        if($cart)
        {
            $this->cartCount        = CartItem::where('cart_id',$cart->id)->sum('qty');
        }
    }

    public function render()
    {
        $products = Product::where('active', 1)->where('category_id', $this->category->id)->paginate(10);

        return view('livewire.frontend-products', compact('products'));
    }

    // Add to cart
    public function addToCart(Request $request, $id)
    {
        $ip         = FacadesRequest::ip();
        $product    = Product::findOrFail($id);
        $cart       = Cart::where('ip', $ip)->first();
        // $isExist    =  $cart? 1 : 0;
        $hasOption  = ProductSelectOptionItem::where('product_id', $product->id)->first();
        $qty        = ($request->quantity) ? $request->quantity : 1;
        if (!$hasOption) {
            $ip         = FacadesRequest::ip();
            $product    = Product::findOrFail($id);
            $cart       = Cart::where('ip', $ip)->first();
            if ($cart) {
                $CopyNum    = CartItem::where('product_id', $id)
                    ->where('cart_id', $cart->id)
                    ->max('copy_num');
                $CartItem   =   CartItem::create([
                    'cart_id'       => $cart->id,
                    'product_id'    => $product->id,
                    'qty'           => $qty,
                    'price'         => $product->price,
                    'copy_num'      => $CopyNum + 1
                ]);
                $cart->subtotal     += ( $product->price  * $qty);
                $cart->total        += ( $product->price  * $qty);
                $cart->save();
                $this->cartCount++;
                $this->total            = Cart::get()->pluck('total');
                $this->inputQty         = $CartItem->qty;
                session()->flash('add', __('Product has successfully been added to cart'));
            } else {
                $newCart    = Cart::create([
                    'ip'         => $ip,
                    'subtotal'   => 0,
                    'total'      => 0,
                ]);
                $CartItem   = CartItem::create([
                    'cart_id'       => $newCart->id,
                    'product_id'    => $product->id,
                    'qty'           => $qty,
                    'price'         => $product->price,
                ]);
                $this->cartCount        = 1;
                $newCart->subtotal      = ($product->price  * $qty);
                $newCart->total         = ($product->price  * $qty);
                $newCart->save();
                $this->total            = Cart::first()->pluck('total');

                session()->flash('add', __('Product has successfully been added to cart'));
            }
        } else {
            return redirect()->route('tenant.Product', ['id' => $product->id]);
        }
    }
    public function increment($id)
    {
        $CartItem            = CartItem::where('product_id',$id)->first();
        $maxQty              = Product::find($id)->availabe_qty;
        $ip                  = FacadesRequest::ip();
        $cart                = Cart::where('ip', $ip)->first();
        if($CartItem->qty < $maxQty)
        {
            // increment total qty
            $this->cartCount++;
            // increment product qty
            $CartItem->qty++;
            $CartItem->save();
            // call models to save data
            $this->inputQty         =  $CartItem->qty;
            // increment total
            $cart->subtotal        += $CartItem->price;
            $cart->total           += $CartItem->price;
            $cart->save();
            $this->total[0]        += $CartItem->price;

        } else {
            session()->flash('max_'.$id, __('There is no other quantity to order'));
        }

    }

    public function decrement($id)
    {
        $CartItem            = CartItem::where('product_id',$id)->first();
        $ip                  = FacadesRequest::ip();
        $cart                = Cart::where('ip', $ip)->first();
        $CartItem            = CartItem::where('product_id',$id)->first();
        if($CartItem)
        {
            if($CartItem->qty > 1)
            {
                // decrement total qty
                $this->cartCount--;
                // decrement product qty
                $CartItem->qty--;
                $CartItem->save();
                // call models to save data
                $this->inputQty         =  $CartItem->qty;
                // decrement total
                $cart->subtotal        -= $CartItem->price;
                $cart->total           -= $CartItem->price;
                $cart->save();
                $this->total[0]        -= $CartItem->price;
            } else {
                // total count decrement
                $this->cartCount--;
                // delete product from cart item and delete price from cart
                $cart->subtotal        -= $CartItem->price;
                $cart->total           -= $CartItem->price;
                $cart->save();
                $this->total[0]        -= $CartItem->price;
                $CartItem->delete();
            }
        }

    }

}

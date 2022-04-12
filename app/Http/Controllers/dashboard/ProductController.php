<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductSelectOption;
use App\Models\ProductSelectOptionItem;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.Product.Products');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('dashboard.Product.Product_add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /* dd($request->all()); */
        $imageID        = add_Image($request->image,NULL,Product::base);   // Store image
        $credentials    = Product::credentials($request,$imageID); // Store product
        $product        = Product::create($credentials);
        $this->CreateOptions($request,$product);
        return redirect()->route('tenant.Product.index');
    }
    public function CreateOptions($request,$product)
    {
        /* One Select Options */
        if($request->mainSelect){
            foreach($request->mainSelect as $key => $select){
                if($select){
                    if($request->secondSelctName[$key]&&$request->secondSelctPrice[$key]){
                        for ($i=0; $i < count($request->secondSelctName[$key]); $i++) {
                            if($request->secondSelctName[$key][$i]&&$request->secondSelctPrice[$key][$i]){
                                if(!$i){
                                    $option = ProductSelectOption::create([
                                        'name'          => $select,
                                        'type'          => ProductSelectOptionItem::OneSelect,
                                        'product_id'    => $product->id,
                                    ]);
                                }
                                ProductSelectOptionItem::create([
                                    'name'  =>  $request->secondSelctName[$key][$i],
                                    'price' =>  $request->secondSelctPrice[$key][$i],
                                    'product_select_option_id'  =>  $option->id,
                                    'product_id'    => $product->id
                                ]);
                            }
                        }
                    }
                }
            }
        }
        /* Multiple Select Options */
        if($request->MultiSelect){
            foreach($request->MultiSelect as $key => $select){
                if($select){
                    if($request->MultiSelectName[$key]&&$request->MultiSelectPrice[$key]){
                        for ($i=0; $i < count($request->MultiSelectName[$key]); $i++) {
                            if($request->MultiSelectName[$key][$i]&&$request->MultiSelectPrice[$key][$i]){
                                if(!$i){
                                    $option = ProductSelectOption::create([
                                        'name'          => $select,
                                        'type'          => ProductSelectOptionItem::MultipleSelect,
                                        'product_id'    => $product->id,
                                    ]);
                                }
                                ProductSelectOptionItem::create([
                                    'name'  =>  $request->MultiSelectName[$key][$i],
                                    'price' =>  $request->MultiSelectPrice[$key][$i],
                                    'product_select_option_id'  =>  $option->id,
                                    'product_id'    => $product->id
                                ]);
                            }
                        }
                    }
                }
            }
        }
        /* Additional Select Options */
        if($request->AdditionalSelect){
            foreach($request->AdditionalSelect as $key => $select){
                if($select){
                    if($request->AdditionalSelectName[$key]&&$request->AdditionalSelectPrice[$key]){
                        for ($i=0; $i < count($request->AdditionalSelectName[$key]); $i++) {
                            if($request->AdditionalSelectName[$key][$i]&&$request->AdditionalSelectPrice[$key][$i]){
                                if(!$i){
                                    $option = ProductSelectOption::create([
                                        'name'          => $select,
                                        'type'          => ProductSelectOptionItem::AdditionalSelect,
                                        'product_id'    => $product->id,
                                    ]);
                                }
                                ProductSelectOptionItem::create([
                                    'name'  =>  $request->AdditionalSelectName[$key][$i],
                                    'price' =>  $request->AdditionalSelectPrice[$key][$i],
                                    'max_count' => $request->MaxQty[$key][$i] ? $request->MaxQty[$key][$i]:10,
                                    'product_select_option_id'  =>  $option->id,
                                    'product_id'    => $product->id
                                ]);
                            }
                        }
                    }
                }
            }
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $Product)
    {
        $categories = Category::orderBy('id', 'DESC')->get();
        return view('dashboard.Product.Product_edit',compact('Product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $Product)
    {
        // Check if a new image has been added or it's the old one
        if($request->image == null)
        {
            $imageID        = $Product->image_id;
        } else {
            $imageID        = add_Image($request->image,NULL,Product::base);
        }
        // Active Or not
        if($request->active == null)
        {
            $active = 0;
        } else {
            $active = 1;
        }
        $credentials    = Product::credentials($request,$imageID,$active); // Store product
        $Product->update($credentials);

        if($request->AdditionalSelect||$request->MultiSelect||$request->mainSelect){
            $Product->SelectOption()->delete();
            $this->CreateOptions($request,$Product);
        }
        return redirect()->route('tenant.Product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $Product)
    {
        // $Product->delete();
    }
}

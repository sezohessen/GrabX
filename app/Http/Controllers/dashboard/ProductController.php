<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Category;
use App\Models\Product;
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
        $imageID        = add_Image($request->image,NULL,Product::base);   // Store image
        $credentials    = Product::credentials($request,$imageID); // Store product
        $product        = Product::create($credentials);
        return redirect()->route('tenant.Product.index');
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

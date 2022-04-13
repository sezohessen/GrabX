@extends('Frontend.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4 class="header-title"> {{ LangDetail($product->name,$product->name_ar) }} </h4>
            </div>
            <div class="col-md-12">
                <div class="product-img">
                    <img src="{{ find_image($product->image ,  App\Models\Product::base ) }}" alt="product-img">
                </div>
            </div>
        </div>
        {{-- Start section --}}
        <div class="row my-2 product-card" >
            <div class="col-md-6">
                @lang('Description')
            </div>
            <div class="col-md-6">
                {{ LangDetail($product->desc,$product->desc_ar) }}
            </div>
        </div>
        {{-- Start section --}}
        <div class="row my-2 product-card" >
            <div class="col-md-6">
                @lang('Price')
            </div>
            <div class="col-md-6">
                {{ $product->price }} @lang('KWD')
            </div>
        </div>
        {{-- Start section --}}
        <div class="row my-2 product-card" >
            <div class="col-md-6">
                @lang('Available quantity')
           </div>
           <div class="col-md-6">
              <span class="ava-qty"> {{ $product->availabe_qty }}</span>
          </div>
          <hr style="margin: 10px 0">
            <div class="col-md-6">
                @lang('Quantity')
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11A.5.5 0 0 1 2 8Z"/>
                              </svg>
                        </button>
                    </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1">
                    <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
                              </svg>
                        </button>
                    </span>
                </div>
            </div>

        </div>
    </div>
@endsection

@extends('Frontend.layouts.app')
@section('content')
    <div class="header-title">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <span class="back-icon">
                        <a href="{{ route('tenant.Homepage') }}" title="@lang('Category page')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
                            </svg>
                        </a>
                    </span>
                </div>
                <div class="col-md-10">
                    <h4> {{ LangDetail($category->name,$category->name_ar) }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-md-6">
                    <div class="osahan-slider-item">
                        <div class="list-card bg-gray h-100 rounded overflow-hidden position-relative shadow-sm margin-t-40">
                            <div class="list-card-image">
                                <a href="#">
                                    <img alt="product" src="{{ find_image($product->image ,  App\Models\Product::base ) }}" class="img-thumbnail">
                                </a>
                            </div>
                            <div class="p-3 position-relative">
                                <div class="list-card-body">
                                    <h6 class="mb-1"><a href="restaurant.html" class="text-black"> {{ LangDetail($product->name,$product->name_ar) }} </a></h6>
                                    <p class="text-gray mb-3" style="cursor: pointer" title="{{ LangDetail($product->desc,$product->desc_ar) }}"> {{ LangDetail($product->desc,$product->desc_ar) }} </p>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="text-gray price"> {{ $product->price }} @lang('KWD') </p>
                                        </div>
                                        {{-- Add to cart --}}
                                        <div class="col-md-6">
                                            <button type="button" class="add-button">@lang('Add') <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                              </svg></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@extends('Frontend.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ global_asset('css/Frontend/reviewOrder.css') }}">
@endsection
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
                <h4> @lang('Review Order')</h4>
            </div>
        </div>
    </div>

</div>
<hr class="order-hr">
<div class="container-fluid">
    <div class="row">
        <div class="order-info">
            <h5>@lang('Order Items')</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h6 class="text-danger mt-1">Product Name</h6>
            <div class="Multiple-group mt-3">
                <input type="button" value="-" id="decrease" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "onclick="decreaseValue(0)">
                <input type="number" id="number_0" value="1" name="quantity" class="quantity-field border-0 text-center" style="width: 30px">
                <input type="button" value="+" id="increase" class="button-plus border rounded-circle icon-shape icon-sm " onclick="increaseValue(0)">
            </div>
        </div>
        <div class="col-md-4">
            <p><strong>1.25 @lang('KWD')</strong></p>
            <button class="btn btn-light"><span class="text-danger">@lang('Remove')</span></button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <h6 class="text-danger mt-1">Product Name</h6>
            <div class="Multiple-group mt-3">
                <input type="button" value="-" id="decrease" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "onclick="decreaseValue(0)">
                <input type="number" id="number_0" value="1" name="quantity" class="quantity-field border-0 text-center" style="width: 30px">
                <input type="button" value="+" id="increase" class="button-plus border rounded-circle icon-shape icon-sm " onclick="increaseValue(0)">
            </div>
        </div>
        <div class="col-md-4">
            <p><strong>1.25 @lang('KWD')</strong></p>
            <button class="btn btn-light"><span class="text-danger">@lang('Remove')</span></button>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-8">
            <h6 class="text-danger mt-1">Product Name</h6>
            <div class="Multiple-group mt-3">
                <input type="button" value="-" id="decrease" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "onclick="decreaseValue(0)">
                <input type="number" id="number_0" value="1" name="quantity" class="quantity-field border-0 text-center" style="width: 30px">
                <input type="button" value="+" id="increase" class="button-plus border rounded-circle icon-shape icon-sm " onclick="increaseValue(0)">
            </div>
        </div>
        <div class="col-md-4">
            <p><strong>1.25 @lang('KWD')</strong></p>
            <button class="btn btn-light"><span class="text-danger">@lang('Remove')</span></button>
        </div>
    </div>

</div>
<hr class="order-hr">
<div class="container-fluid">
    <div class="row">
        <div class="order-info">
            <h5>@lang('Promo code')</h5>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <input class="w-100 form-control" type="text" name="promo" id="" placeholder="@lang('Enter code')">
        </div>
        <div class="col-md-1 xs-hidden"></div>
        <div class="col-md-3">
            <button class="btn btn-danger btn-md">@lang('Apply')</button>
        </div>
    </div>
</div>
<hr class="order-hr">
<div class="container-fluid">
    <div class="row  text-muted">
        <div class="col-md-8">
            <span>@lang('Subtotal')</span>
        </div>
        <div class="col-md-4">
            <span>10.25 @lang('KWD')</span>
        </div>
        <div class="col-md-8">
            <span>@lang('Delivery cost')</span>
        </div>
        <div class="col-md-4">
            <span>1.25 @lang('KWD')</span>
        </div>
    </div>
    <div class="row font-weight-bold mt-2">
        <div class="col-md-8">
            <span>@lang('Total')</span>
        </div>
        <div class="col-md-4">
            <span>150.2 @lang('KWD')</span>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mt-4 mb-2">
                <button class="w-100 btn btn-danger btn-lg">@lang('Go to checkout')</button>
            </div>
        </div>
    </div>
</div>
@endsection

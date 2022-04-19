@extends('Frontend.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ global_asset('css/Frontend/reviewOrder.css') }}">
@endsection
@section('js')
    <script>
    function increaseValue(id) {
        var value = parseInt(document.getElementById('number_'+id).value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number_'+id).value = value;
    }

    function decreaseValue(id) {
        var value = parseInt(document.getElementById('number_'+id).value, 10);
        value = isNaN(value) ? 0 : value;
        value < 1 ? value = 1 : '';
        value--;
        document.getElementById('number_'+id).value = value;
    }

    </script>
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
@if ($cart && $isExist)
    <hr class="order-hr">
    <div class="container-fluid">
        <div class="row">
            <div class="order-info">
                <h5>@lang('Order Items')</h5>
            </div>
        </div>
        <div class="row products">
            @foreach ($cart->products as  $key =>$product)
            <?php $options = App\Models\CartItemOption::where('cart_id',$cart->id)
                ->where('product_id',$product->id)
                ->where('copy_num',$product->pivot->copy_num)
                ->get();
            ?>
            <div class="col-md-8">
                <h6 class="text-danger mt-1">
                    @if($product->pivot->qty>1)
                    <span class="text-danger">{{ $product->pivot->qty }}x</span>
                    @endif
                    {{ LangDetail($product->name, $product->name_ar) }}
                </h6>
                @foreach ($options as $selectOption)
                    @if($selectOption->item)
                        <p class="mb-0">
                            @if($selectOption->item->option->type==3&&$selectOption->qty > 0 ) <span class="text-info">{{ $selectOption->qty }}x</span> @endif
                            {{ $selectOption->item->name }}
                        <span class="text-success">{{ $selectOption->item->price }} @lang('KWD')</span>
                        </p>
                    @else
                        <p class="text-warning">@lang('Option Deleted')</p>
                    @endif
                @endforeach
                <div class="Multiple-group mt-3">
                    <input type="button" value="+" id="increase" class="button-plus border rounded-circle icon-shape icon-sm " onclick="increaseValue({{ $key }})">
                    <input type="number" id="number_{{ $key }}" value="1" name="quantity" class="quantity-field border-0 text-center" style="width: 30px">
                    <input type="button" value="-" id="decrease" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "onclick="decreaseValue({{ $key }})">

                </div>
            </div>
            <div class="col-md-4">
                <p>
                    <strong>
                        {{ ($product->pivot->price + $product->pivot->subtotal) * $product->pivot->qty }}
                        @lang('KWD')
                    </strong>
                </p>
                <button class="btn btn-light"><span class="text-danger">@lang('Remove')</span></button>
            </div>
            <hr class="my-2">
            @endforeach
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
        @if ($cart->discount)
        <div class="row text-muted mt-2">
            <div class="col-md-8">
                <span>@lang('Discount')</span>
            </div>
            <div class="col-md-4">
                <span>{{ (($cart->discount /100) * $cart->subtotal) }} @lang('KWD')</span>
            </div>
        </div>
        @endif
        <div class="row font-weight-bold mt-2">
            <div class="col-md-8">
                <span>@lang('Subtotal')</span>
            </div>
            <div class="col-md-4">
                <span>{{ $cart->subtotal - (($cart->discount /100) * $cart->subtotal) }} @lang('KWD')</span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="mt-4 mb-2">
                    <a href="{{ route('tenant.BuyerDetails') }}">
                        <button class="w-100 btn btn-danger btn-lg">@lang('Go to checkout')</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="card mt-4  mx-4">
        <div class="text-center my-4">
            <i class="fas-solid fas-bag-shopping"></i>
            <h4>@lang('Your bag is empty')</h4>
            <p>@lang('Browse menu and add items to your order to proceed')</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="mt-4 mb-2">
                <a href="{{ route('tenant.Homepage') }}">
                    <button class="w-100 btn btn-danger btn-lg">@lang('Browse Menu')</button>
                </a>
            </div>
        </div>
    </div>
@endif

@endsection

@extends('Frontend.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ global_asset('css/dashboard/order.css') }}">
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
                <h4> @lang('Order details')</h4>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <h4 class="card-header-title"> {{ __('Order status') }} </h4>
        </div>
        <div class="col-md-6">
            @if ($order->status == App\Models\Order::Pending)
                <button class="btn btn-primary btn-sm pe-none">
                    <i class="fa-solid fa-bars-progress"></i>
                    {{ App\Models\Order::StatusType()[App\Models\Order::Pending] }}
                </button>
            @elseif($order->status == App\Models\Order::OnWay)
                <button class="btn btn-info btn-sm pe-none">
                    <i class="fa-solid fa-motorcycle"></i>
                    {{ App\Models\Order::StatusType()[App\Models\Order::OnWay] }}
                </button>
            @elseif($order->status == App\Models\Order::Delivered)
                <button class="btn btn-success btn-sm pe-none">
                    <i class="bi bi-check"></i>
                    {{ App\Models\Order::StatusType()[App\Models\Order::Delivered] }}
                </button>
            @else
                <button class="btn btn-danger btn-sm pe-none">
                    <i class="bi bi-x-circle-fill"></i>
                    {{ App\Models\Order::StatusType()[App\Models\Order::Canceled] }}
                </button>
            @endif
        </div>
    </div>
    @if ($order)
    <div class="font-weight-bold text-center mt-4">
        <div class="card mb-3 mb-lg-5">
            <!-- Header -->
            <div class="card-header">
            <h4 class="card-header-title"> {{ __('Order information') }} </h4>
            </div>
            <!-- End Header -->
            {{-- Form --}}
            <!-- Body -->
            <div class="card-body">
                <h5>@lang("Order's products")</h5>
                <hr>
                <div class="card orders-product">
                    @foreach ($order->products as $product)
                    <?php $options = App\Models\OrderItemOption::where('order_id',$order->id)
                        ->where('product_id',$product->id)
                        ->where('copy_num',$product->pivot->copy_num)
                        ->get();
                    ?>
                        <div class="row my-2 mx-2">
                            <div class="col-md-2 ">
                                <img class="avatar avatar-lg img-thumbnail" src="{{ find_image($product->image ,  App\Models\Product::base ) }}" alt="Image Description">
                            </div>
                            <div class="col-md-7">
                                <h5 class="text-inherit mb-0 text-danger" >
                                    <span>{{ $product->pivot->qty }}x</span>
                                    {{ LangDetail($product->name, $product->name_ar) }}
                                </h5>
                                @foreach ($options as $selectOption)
                                    @if($selectOption->item)
                                        <p class="mb-0">
                                            @if($selectOption->item->option->type==3&&$selectOption->qty > 0 ) <span class="text-info">{{ $selectOption->qty }}x</span> @endif
                                            {{ $selectOption->item->name }} :
                                        <span class="text-success">{{ $selectOption->item->price }} @lang('KWD')</span>
                                        </p>
                                    @else
                                        <p class="text-warning">@lang('Option Deleted')</p>
                                    @endif
                                @endforeach

                            </div>
                            <div class="col-md-3">
                                <h6>@lang('Price per unit')</h6><span>{{ $product->pivot->price + $product->pivot->subtotal}} @lang('KWD') ({{ $product->pivot->qty }})</span>
                            </div>
                        </div>
                        <hr class="my-1">
                    @endforeach
                </div>
            </div>
            <div class="card-footer mb-3 mb-lg-5">
                <h4 class="card-header-title"> {{ __('Order price') }} </h4>
                <hr>
                <h5>@lang('Subtotal') : <span><u> {{ $order->subtotal }}</u></span> </h5>
                @if($order->deliverly_cost)<h5>@lang('Delivery Cost') : <span><u> +{{ $order->deliverly_cost }}</u></span> </h5> @endif
                @if($order->discount)<h5>@lang('Discount') : <span><u> {{ $order->discount }}%</u></span> </h5> @endif
                <h4>@lang('Total') : <span><u> {{ $order->total }}</u> @lang('KWD')</span> </h5>
                <hr>
            </div>
            <!-- End Card -->
        </div>
    </div>
    @else
        <div class="font-weight-bold text-center mt-4">
            <div class="alert alert-danger">
                <h3>@lang('Not ordered Yet')</h3>
            </div>
        </div>
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
</div>


@endsection


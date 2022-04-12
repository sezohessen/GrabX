@extends('dashboard.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ global_asset('css/dashboard/order.css') }}">
@endsection
@section('content')

<!-- Content -->
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                    <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('tenant.order.index') }}"> {{ __('Orders') }} </a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ __('Order Show') }}</li>
                </ol>
                </nav>

                <h1 class="page-header-title">{{ __('Order number') }} : {{ $order->id }}</h1>

            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->

    <div class="row">
        <div class="col-md-8">
            <!-- Card -->
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
                                <div class="col-md-2">
                                    <img class="avatar avatar-lg" src="{{ find_image($product->image ,  App\Models\Product::base ) }}" alt="Image Description">
                                </div>
                                <div class="col-md-7">
                                    <h5 class="text-inherit mb-0">
                                        <span class="text-danger">{{ $product->pivot->qty }}x</span>
                                        {{ LangDetail($product->name, $product->name_ar) }}
                                    </h5>
                                    @foreach ($options as $selectOption)
                                    <p class="mb-0">
                                         {{ LangDetail($selectOption->item->option->name,$selectOption->item->option->name_ar) }} :
                                         {{ LangDetail($selectOption->item->name,$selectOption->item->name_ar) }}
                                        <span class="text-success">{{ $selectOption->item->price }} @lang('KWD')</span>
                                    </p>
                                    @endforeach
                                   {{--  @foreach ($product->orderProductAdditionalOption as $selectAddi)
                                    <p class="mb-0">
                                         <span class="text-info">{{ $selectAddi->qty }}x</span>
                                         {{ LangDetail($selectAddi->item->name,$selectAddi->item->name_ar) }}
                                        <span class="text-success">{{ $selectAddi->item->price }}
                                             ({{ $selectAddi->item->price * $selectAddi->qty }})
                                            @lang('KWD')</span>
                                    </p>
                                    @endforeach
                                    @foreach ($product->orderProductMultiOption as $selectMulti)
                                    <p class="mb-0">
                                        {{ LangDetail($selectMulti->item->name,$selectMulti->item->name_ar) }}
                                        <span class="text-success">{{ $selectMulti->item->price }} @lang('KWD')</span>
                                    </p>
                                    @endforeach --}}

                                </div>
                                <div class="col-md-3">
                                    <h6>@lang('Price per unit')</h6><span class="text-success">{{ $product->pivot->price }} @lang('KWD')</span>
                                </div>
                            </div>
                            <hr class="my-1">
                        @endforeach
                    </div>
                </div>

                <div class="card-footer mb-3 mb-lg-5">
                    <h4 class="card-header-title"> {{ __('Order price') }} </h4>
                    <hr>
                    <h5>@lang('Subtotal') : <span class="text-success"><u> {{ $order->subtotal }}</u></span> </h5>
                    @if($order->deliverly_cost)<h5>@lang('Delivery Cost') : <span class="text-success"><u> +{{ $order->deliverly_cost }}</u></span> </h5> @endif
                    @if($order->discount)<h5>@lang('Discount') : <span class="text-success"><u> {{ $order->discount }}%</u></span> </h5> @endif
                    <h4>@lang('Total') : <span class="text-success"><u> {{ $order->total }}</u> @lang('KWD')</span> </h5>
                    <hr>
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->


        <!-- End Col -->
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title"> {{ __('User information') }} </h4>
                        </div>
                        <div class="card-body">
                            <h5>@lang('Name') : <u>{{ $order->name }}</u></h5>
                            <h5>@lang('Phone') : <u>{{ $order->phone }}</u></h5>
                            @if($order->email)<h5>@lang('Email') : <u>{{ $order->email }}</u></h5> @endif
                            <h5>@lang('Ordered At') : <u>{{ $order->created_at->format('d/m/Y H:i A') }}</u></h5>
                        </div>
                        <!-- End Card -->
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="card mb-3 mb-lg-5">
                        <!-- Header -->
                        <div class="card-header">
                            <h4 class="card-header-title"> {{ __('Deliver way') }} :
                                <span class="">
                                    @if ($order->pickup)
                                        <i class="fas fa-car"></i>
                                        <u>@lang('Car pick up')</u>
                                    @else
                                        <i class="bi bi-truck"></i>
                                        <u>@lang('Deliverly')</u>
                                    @endif
                                </span>
                            </h4>
                        </div>
                        <div class="card-body">
                            @if ($order->pickup)
                            <h5>@lang('Car Maker') : <u>{{ $order->pickupRelation->make }}</u></h5>
                            <h5>@lang('Car Color') : <u>{{ $order->pickupRelation->color }}</u></h5>
                            @if($order->pickupRelation->license)<h5>@lang('Car License') : <u>{{ $order->pickupRelation->license }}</u></h5> @endif
                            @else
                                <h5>@lang('Governorate') : <u>{{ LangDetail($order->deliverlyRelation->governorate->name,$order->deliverlyRelation->governorate->name_ar) }}</u></h5>
                                <h5>@lang('City') : <u>{{ LangDetail($order->deliverlyRelation->city->name,$order->deliverlyRelation->city->name_ar) }}</u></h5>
                                <h5>@lang('Unit Type') : <u> {{ App\Models\Order::UnitType()[$order->deliverlyRelation->unit_type] }} </u></h5>
                                @if($order->deliverlyRelation->street)<h5>@lang('Street') : <u>{{ $order->deliverlyRelation->street }}</u></h5> @endif
                                @if($order->deliverlyRelation->house_num)<h5>@lang('House Number') : <u>{{ $order->deliverlyRelation->house_num }}</u></h5> @endif
                                @if($order->deliverlyRelation->special_direction)<h5>@lang('Special Direction') : <u>{{ $order->deliverlyRelation->special_direction }}</u></h5> @endif
                            @endif

                        </div>
                        <!-- End Card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- End Content -->
@endsection

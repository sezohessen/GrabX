

<div>
    <div class="header-title">
        <div class="container">
            <div class="row">
                <div class="col-md-1">
                    <span class="back-icon">
                        <a href="{{ route('tenant.Homepage') }}" title="@lang('Category page')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                                <path
                                    d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z" />
                            </svg>
                        </a>
                    </span>
                </div>
                <div class="col-md-10">
                    <h4> {{ LangDetail($category->name,$category->name_ar) }}</h4>
                </div>
                @if (session()->has('add'))
                <div class="alert alert-success">
                    {{ session('add') }}
                </div>
                @endif
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row" style="margin-bottom: 50px">
            @foreach ($products as $key => $product)
            <div class="col-md-6">
                <div class="osahan-slider-item">
                    <div class="list-card bg-gray h-100 rounded overflow-hidden position-relative margin-t-40">
                        <div class="list-card-image">
                            <a href="{{ route('tenant.Product',['id' => $product->id]) }}">
                                <img alt="product" src="{{ find_image($product->image ,  App\Models\Product::base ) }}"
                                    class="img-thumbnail">
                            </a>
                        </div>
                        <div class="p-3 position-relative">
                            <div class="list-card-body">
                                <h6 class="mb-1"><a href="restaurant.html" class="text-black"> {{
                                        LangDetail($product->name,$product->name_ar) }} </a></h6>
                                <p class="text-gray mb-3" style="cursor: pointer"
                                    title="{{ LangDetail($product->desc,$product->desc_ar) }}"> {{
                                    LangDetail($product->desc,$product->desc_ar) }} </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="text-gray price"> {{ $product->price }} @lang('KWD') </p>
                                    </div>
                                    @php
                                        $productExist     =  App\Models\CartItem::where('product_id',$product->id)->first();
                                        $hasOption        =  App\Models\ProductSelectOptionItem::where('product_id', $product->id)->first();
                                        $inputQty         =  App\Models\CartItem::where('product_id',$product->id)->get()->pluck('qty');
                                    @endphp
                                    @if($productExist)
                                    {{-- increase and decrease quantity --}}
                                        <x-qty-input
                                         :key="$key"
                                         :id="$product->id"
                                         :inputQty="$inputQty[0]"/>
                                    @else
                                    {{-- Add to cart for first time --}}
                                    <div class="col-md-6">
                                        <button wire:click="addToCart({{ $product->id }})" class="add-button">@lang('Add')
                                            @if($hasOption)
                                            <svg width="1em" height="1em" viewBox="0 0 13 16"><path d="M12.321 12.195a.683.683 0 010 1.366h-1.746v1.756a.679.679 0 11-1.358 0v-1.756H7.471a.683.683 0 010-1.366h1.746V10.44a.679.679 0 111.358 0v1.76h1.746zM10.7 2.927a1.309 1.309 0 011.329 1.29.882.882 0 010 .09L11.8 7.561a.68.68 0 11-1.355-.1l.224-3.17H1.651a.683.683 0 01-.074 0 .683.683 0 01-.075 0h-.13l.56 6.586a2.436 2.436 0 002.629 1.8.683.683 0 010 1.366c-2.068 0-3.832-1.3-3.981-3.054L.015 4.36a1.153 1.153 0 01.206-.954 1.481 1.481 0 011.279-.48.584.584 0 01.073.005.683.683 0 01.074 0h1.33a.684.684 0 01-.065-.293A2.627 2.627 0 015.53 0h.97a2.627 2.627 0 012.62 2.634.684.684 0 01-.065.293H10.7zm-2.938-.293A1.265 1.265 0 006.5 1.366h-.97a1.265 1.265 0 00-1.26 1.268.684.684 0 01-.065.293h3.622a.684.684 0 01-.065-.293z"></path></svg>
                                            @endif
                                        </button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @php
        $message = __('Review order');
        @endphp
        {{-- Checkout --}}
        <div class="button-card">
            <x-checkout-button :message="$message" />
            {{-- Cart items --}}
            @if($total->first())
                <span class="cart-items-count"> {{ $cartCount }} </span>
            @else
                <span class="cart-items-count"> 0 </span>
            @endif
            {{-- Cart price --}}
            @if($total->first())
                <span class="cart-items-price"> {{ number_format($total[0], 0, '.', ',') }} @lang('KWD') </span>
            @else
                <span class="cart-items-price"> 0 @lang('KWD') </span>
            @endif
        </div>
    </div>
</div>

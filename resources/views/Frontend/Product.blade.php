@extends('Frontend.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ global_asset('css/Frontend/app.css') }}">
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
<div class="container">
    <div class="row">
        <div class="col-md-1">
            <span class="back-icon">
                <a href="{{ route('tenant.CategoryProducts',['id' => $product->category_id]) }}" title="@lang('Products page')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
                    </svg>
                </a>
            </span>
        </div>
        <div class="col-md-12">
            <div class="product-img">
                <img src="{{ find_image($product->image ,  App\Models\Product::base ) }}" alt="product-img">
            </div>
        </div>
        <div class="col-md-12">
            <h4 class="header-title"> {{ LangDetail($product->name,$product->name_ar) }} </h4>
        </div>
    </div>
    <div class="bg-white p-3 mb-3 restaurant-detailed-ratings-and-reviews rounded">
        {{-- Start section --}}
        <div class="reviews-members py-3">
            <div class="media">
                <div class="media-body">
                    <div class="reviews-members-body">
                        @if ($product->desc)
                        <div class="row my-2">
                            <div class="col-md-4">
                                @lang('Description')
                            </div>
                            <div class="col-md-8">
                                {{ LangDetail($product->desc,$product->desc_ar) }}
                            </div>
                        </div>
                        @endif
                        {{-- Start section --}}
                        <div class="row my-2">
                            <div class="col-md-4">
                                @lang('Price')
                            </div>
                            <div class="col-md-8 price">
                                {{ $product->price }} @lang('KWD')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End --}}
        <form action="{{ route('tenant.cart.addToCart',['id'=>$product->id]) }}" method="POST" >
            @csrf
            @method('POST')
            <input type="hidden" value="1" name="copy_num">
            {{-- Start ordering --}}
            <div class="reviews-members-body">
                {{-- One Select --}}
                @if($selectOptionOneSelect->first())
                <hr style="margin: 10px 0">
                @foreach ($selectOptionOneSelect as $selectOne )
                <div class="row">
                    <div class="col-md-12">
                        <h4> {{$selectOne->name}}</h4>
                    </div>
                </div>
                <div class="check-box">
                    @foreach ($selectOne->Items as $key => $Item)
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="OneSelect[]" value="{{ $Item->id }}"
                                @if (!$key)
                                    {{ 'checked' }}
                                @endif
                                    id="flexRadioDefault1">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ $Item->name }}
                                </label>
                            </div>
                        </div>
                        @if($Item->price)
                        <div class="col-md-6">
                            <div class="mini-price">+{{ $Item->price }} @lang('KWD') </div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endforeach
                @endif
                {{-- End one Select --}}
                {{-- Start Multiple select --}}
                @if($selectOptionMultipleSelect->first())
                    <hr style="margin: 10px 0">
                    @foreach ($selectOptionMultipleSelect as $MultipleSelect)
                    <div class="row">
                        <div class="col-md-12">
                            <h4> {{$MultipleSelect->name}}</h4>
                        </div>
                    </div>
                    @endforeach
                    @if($selectOptionMultipleSelect->first())
                    @foreach ($MultipleSelect->Items as $Item)
                    {{-- Option --}}
                    <div class="row py-2 Additional-Select">
                        <div class="col-md-4">
                            {{ $Item->name }}
                        </div>
                        <div class="col-md-4">
                            <div class="value-button" id="decrease" onclick="decreaseValue({{ $Item->id }})" value="Decrease Value">-</div>
                            <input type="number" id="number_{{ $Item->id }}" name="AdditionalSelect[{{ $Item->id }}]" value="0" />
                            <div class="value-button" id="increase" onclick="increaseValue({{ $Item->id }})" value="Increase Value">+</div>
                        </div>
                        <div class="col-md-4">
                            <span class="mini-price"> +{{ $Item->price }} @lang('KWD')</span>
                        </div>
                    </div>
                    {{-- End Option --}}
                    @endforeach
                    @endif
                @endif
                {{-- End Multiple select --}}
                {{-- Start Additional Select --}}
                @if($selectOptionAdditionalSelect->first())
                <hr style="margin: 10px 0">
                @foreach ($selectOptionAdditionalSelect as $selectOne )
                <div class="row">
                    <div class="col-md-12">
                        <h4> {{$selectOne->name}}</h4>
                    </div>
                </div>
                <div class="check-box">
                    @foreach ($selectOne->Items as $Item)
                    <div class="row py-2">
                        <div class="col-md-6">
                            <div class="form-check">
                                <input class="form-check-input" name="MultiSelect[]" type="checkbox" value="{{ $Item->id }}" id="flexCheckDefault">
                                <label class="form-check-label" for="flexRadioDefault1">
                                    {{ $Item->name }}
                                </label>
                            </div>
                        </div>
                        @if($Item->price)
                        <div class="col-md-6">
                            <div class="mini-price">+{{ $Item->price }} @lang('KWD') </div>
                        </div>
                        @endif
                    </div>
                    @endforeach
                </div>
                @endforeach
                @endif
                {{-- End Additional Select --}}
                <hr style="margin: 10px 0">
                {{-- Qty --}}
                <div class="row py-4">
                    <div class="col-md-6">
                        <h6>@lang('Quantity')</h6>
                    </div>
                    <div class="col-md-6">
                        <div class="Multiple-group">
                            <input type="button" value="-" id="decrease" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 "onclick="decreaseValue(0)">
                            <input type="number" id="number_0" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                            <input type="button" value="+" id="increase" class="button-plus border rounded-circle icon-shape icon-sm " onclick="increaseValue(0)">
                            @error('quantity')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Qty --}}
            {{-- Order button --}}
            <div class="row">
                <div class="col-md-7">
                    <div class="order-button">
                        <button type="submit"> @lang('Add To Cart') <span> [Price] </span> </button>
                    </div>
                </div>
                {{-- End  ordering--}}
            </div>
        </form>
    </div>
</div>
@endsection

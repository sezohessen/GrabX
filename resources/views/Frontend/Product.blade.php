@extends('Frontend.layouts.app')

@section('js')
    <script>
        function incrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal)) {
            parent.find('input[name=' + fieldName + ']').val(currentVal + 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    function decrementValue(e) {
        e.preventDefault();
        var fieldName = $(e.target).data('field');
        var parent = $(e.target).closest('div');
        var currentVal = parseInt(parent.find('input[name=' + fieldName + ']').val(), 10);

        if (!isNaN(currentVal) && currentVal > 0) {
            parent.find('input[name=' + fieldName + ']').val(currentVal - 1);
        } else {
            parent.find('input[name=' + fieldName + ']').val(0);
        }
    }

    $('.Multiple-group').on('click', '.button-plus', function(e) {
        incrementValue(e);
    });

    $('.Multiple-group').on('click', '.button-minus', function(e) {
        decrementValue(e);
    });

    </script>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="product-img">
                <img src="{{ find_image($product->image ,  App\Models\Product::base ) }}" alt="product-img">
            </div>
        </div>
        <div class="col-md-12">
            <h4 class="header-title"> {{ LangDetail($product->name,$product->name_ar) }} </h4>
        </div>
    </div>
    <div class="bg-white p-3 mb-3 restaurant-detailed-ratings-and-reviews shadow-sm rounded">
        {{-- Start section --}}
        <div class="reviews-members py-3">
            <div class="media">
                <div class="media-body">
                    <div class="reviews-members-body">
                        <div class="row my-2">
                            <div class="col-md-4">
                                @lang('Description')
                            </div>
                            <div class="col-md-8">
                                {{ LangDetail($product->desc,$product->desc_ar) }}
                            </div>
                        </div>
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
        <hr style="margin: 10px 0">
        <form action="">
        {{-- Start ordering --}}
        <div class="reviews-members-body">
            {{-- One Select --}}
            @if($selectOptionOneSelect)
            @foreach ($selectOptionOneSelect as $selectOne )
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
                            <input class="form-check-input" type="radio" name="flexRadioDefault"
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
            <hr style="margin: 10px 0">
            {{-- Start Multiple select --}}
            @if($selectOptionMultipleSelect)
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
                <div class="row py-2">
                    <div class="col-md-4">
                        {{ $Item->name }}
                    </div>
                    <div class="col-md-4 Multiple-group">
                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                        <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
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
            <hr style="margin: 10px 0">
            {{-- Start Additional Select --}}
            @if($selectOptionAdditionalSelect)
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
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
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
                        <input type="button" value="-" class="button-minus border rounded-circle  icon-shape icon-sm mx-1 " data-field="quantity">
                        <input type="number" step="1" max="10" value="1" name="quantity" class="quantity-field border-0 text-center w-25">
                        <input type="button" value="+" class="button-plus border rounded-circle icon-shape icon-sm " data-field="quantity">
                    </div>
                </div>
            </div>
            {{-- End Qty --}}
            {{-- Order button --}}
            <div class="row">
                <div class="col-md-12" style="position: relative">
                    <div class="order-button">
                        <button type="submit">Order <span> [Price] </span> </button>
                    </div>
                </div>
            </div>
            {{-- End  ordering--}}
        </div>
        </form>
    </div>
</div>
@endsection

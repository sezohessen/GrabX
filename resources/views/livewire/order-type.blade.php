<div>
    <div class="container">
        <div class="row justify-content-md-around">
            <div class="col-md-12">
                <h4 class="header">@lang('Choose order type')</h4>
            </div>
            <div class="btn-group"  role="group" aria-label="Basic radio toggle button group">
                <input data-bs-toggle="collapse" href=".multi-collapse" role="button"
                aria-expanded="false" aria-controls="multiCollapseExample1" type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off" checked>
                <label class="btn checkbox-button" for="btnradio4"> @lang('Delivery')
                    <img src="{{ global_asset('img/icons/delivery-man.png') }}" alt="">
                </label>

                <input data-bs-toggle="collapse" href=".multi-collapse" role="button"
                aria-expanded="false" aria-controls="multiCollapseExample2" type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                <label class="btn checkbox-button" for="btnradio5">@lang('Pickup')
                    <img src="{{ global_asset('img/icons/location.png') }}" alt="">
                </label>
              </div>

        </div>
        <div class="row my-4">
            {{-- Delivery --}}
            <div class="col-md-12">
                <div class="collapse multi-collapse show" id="multiCollapseExample1">
                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form -->
                        <form>
                            <!-- Select governorate -->
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="categoryLabel" class="form-label"> {{ __('Governorate') }} </label>
                                </div>
                                <div class="col-md-8">
                                    <!-- Select -->
                                    <select required name="governorate_id" class="gover" id="select-beast" name="governorate_id"
                                        placeholder="{{ __('Select governorate') }}" autocomplete="off">
                                        <option class="option1" value=""> {{ __('Select governorate') }}</option>
                                        @foreach ($governorates as $governorate )
                                        <option value="{{ $governorate->id }}"> {{ LangDetail($governorate->name,
                                            $governorate->name_ar)
                                            }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    <!-- End Select -->
                                </div>
                            </div>

                            <!-- Select city -->
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="categoryLabel" class="form-label"> {{ __('City') }} </label>
                                </div>
                                <div class="col-md-8">
                                    <!-- Select -->
                                    <select required class="form-select city" aria-label="Default select example" name="city_id" id="" autocomplete="off">
                                        <option selected  value=""> {{ __('Select governorate first') }}</option>
                                    </select>

                                    @error('category_id')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                    <!-- End Select -->
                                </div>
                            </div>
                            <!-- unit type -->
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="organizationLabel" class="col-form-label form-label">@lang('Unit type')</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="btn-group"  role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="unit_type" id="btnradio1" autocomplete="off" value="1" checked>
                                        <label class="btn checkbox-button" for="btnradio1"> @lang('House') </label>

                                        <input type="radio" class="btn-check" name="unit_type" id="btnradio2" autocomplete="off" value="2">
                                        <label class="btn checkbox-button" for="btnradio2">@lang('Apartment')  </label>

                                        <input type="radio" class="btn-check" name="unit_type" id="btnradio3" autocomplete="off" value="3">
                                        <label class="btn checkbox-button" for="btnradio3">@lang('Office') </label>
                                      </div>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label for="departmentLabel" class="col-form-label form-label">@lang('Street')</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="street" id="departmentLabel"
                                        placeholder="@lang('Street name')" aria-label="Your department">
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">@lang('Unit number')</label>
                                </div>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" name="house_num" id="departmentLabel"
                                        placeholder="@lang("Unit number")" aria-label="Your department">
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- Form -->
                            <div class="row mb-4">
                                <div class="col-md-4">
                                    <label class="col-form-label form-label">@lang('Special direction')</label>
                                </div>
                                <div class="col-sm-8">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="" id="floatingTextarea2"
                                            style="height: 100px"></textarea>
                                        <label for="floatingTextarea2">@lang('write your own direction with landmarks')</label>
                                    </div>
                                </div>
                            </div>
                            <div class="container-fluid">
                                <div class="row text-muted mt-2">
                                    <div class="col-md-8">
                                        <span>@lang('Deliverly Cost')</span>
                                    </div>
                                    <div class="col-md-4" id="deliverly">
                                        <span > 0 @lang('KWD')</span>
                                    </div>
                                </div>
                                <div class="row text-muted mt-2">
                                @if($cart->discount)
                                <div class="col-md-8">
                                    <span>@lang('Before discount')</span>
                                </div>
                                @else
                                <div class="col-md-8">
                                    <span>@lang('subtotal')</span>
                                </div>
                                @endif
                                @if ($cart->discount)
                                    <div class="col-md-4" style="text-decoration: line-through">
                                        <span id="outcome">
                                            <span id="subtotal">{{ $cart->subtotal }} </span>
                                        </span>
                                        @lang('KWD')
                                    </div>
                                @else
                                    <div class="col-md-4">
                                        <span id="outcome">
                                            <span id="subtotal">{{ $cart->subtotal }} </span>
                                        </span>
                                        @lang('KWD')
                                    </div>
                                @endif
                                </div>
                                @if ($cart->discount)
                                <div class="row text-muted mt-2">
                                    <div class="col-md-8">
                                        <span>@lang('Discount')</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span > <span id="discount"> {{ $cart->discount }}%- </span> </span>
                                    </div>
                                </div>
                                @endif
                                <div class="row font-weight-bold mt-2">
                                    <div class="col-md-8">
                                        <span>@lang('Total')</span>
                                    </div>
                                    <div class="col-md-4">
                                        <span id="new_value">{{ $cart->total - (($cart->discount /100) * $cart->subtotal)}} </span>
                                        <span> @lang('KWD') </span>
                                    </div>
                                </div>
                            </div>
                            <!-- End Form -->

                            <!-- End Form -->
                            {{-- Button 1 --}}
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="mt-4 mb-2">
                                        <button class="w-100 btn btn-danger btn-lg">@lang('Proceed to payment')</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- End Form -->
                    </div>
                    <!-- End Body -->
                </div>
            </div>
            {{-- Pickup --}}
            <div class="col-md-12">
                <div class="collapse multi-collapse" id="multiCollapseExample2">
                    <div class="card-body">
                        <form action="">
                            <div class="row">
                                <!-- start Form -->
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="organizationLabel" class="col-form-label form-label">@lang('Vehicle type')</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="organization" id="organizationLabel"
                                            placeholder="@lang('Toyota, Mitsubishi, Rolls-Royce')"
                                            aria-label="Your organization" value="">
                                    </div>
                                </div>
                                <!-- End Form -->
                                <!-- start Form -->
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="organizationLabel" class="col-form-label form-label">@lang('Vehicle color')</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="organization" id="organizationLabel"
                                            placeholder="@lang('Red, Black, Yellow')" aria-label="Your organization"
                                            value="">
                                    </div>
                                </div>
                                <!-- End Form -->
                                <!-- start Form -->
                                <div class="row mb-4">
                                    <div class="col-md-4">
                                        <label for="organizationLabel" class="col-form-label form-label">@lang('Vehicle plate number')</label>
                                    </div>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="organization" id="organizationLabel"
                                            placeholder="@lang('59881')" aria-label="Your organization" value="">
                                    </div>
                                </div>
                                <div class="row">

                                    @if ($cart->discount)
                                    <div class="row text-muted mt-2">
                                        <div class="col-md-8">
                                            <span>@lang('Before discount')</span>
                                        </div>
                                        <div class="col-md-4">
                                            <span>{{ $cart->subtotal }} @lang('KWD')</span>
                                        </div>
                                    </div>
                                    <div class="row text-muted mt-2">
                                        <div class="col-md-8">
                                            <span>@lang('Discount')</span>
                                        </div>
                                        <div class="col-md-4">
                                            <span > <span id="discount"> {{ $cart->discount }}%- </span> </span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="row text-muted mt-2">
                                        <div class="col-md-8">
                                            <span>@lang('subtotal')</span>
                                        </div>
                                        <div class="col-md-4">
                                            <span>{{ $cart->subtotal }} @lang('KWD')</span>
                                        </div>
                                    </div>
                                    @endif
                                    <div class="row font-weight-bold mt-2">
                                        <div class="col-md-8">
                                            <span>@lang('Total')</span>
                                        </div>
                                        <div class="col-md-4">
                                            <span id="new_value">{{ $cart->total - (($cart->discount /100) * $cart->subtotal)}} </span>@lang('KWD')
                                        </div>
                                    </div>
                                </div>
                                <!-- End Form -->
                                {{-- Button 2 --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="mt-4 mb-2">
                                            <button class="w-100 btn btn-danger btn-lg">@lang('Proceed to payment')</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

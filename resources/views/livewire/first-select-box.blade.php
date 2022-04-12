@section('css')
    <style>
        .Select-Options input{
            margin: 10px 0;
        }
    </style>
@endsection
<div class="Select-Options container card-body" x-data="{ open: true }">
    {{-- First Selct --}}
    <div x-if="open">
        <div class="mt-4">
            <div class="row" x-data="{ open: false }">
                <div class="col-md-6">
                    <div class="row" id="OneSelect">
                        <div class="col-md-12">
                            <label for="productNameLabel" class="form-label"></i>@lang('Add Select Option(Choose One)') </label>
                            <div class="mb-4">
                                <a style="background-color:cadetblue;color:white;border:0" onclick="AddSelect()"
                                    class="btn btn-praimry"> @lang('Add Options') </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row" id="Multi">
                        <div class="col-md-12">
                            <label for="productNameLabel" class="form-label"></i>@lang('Add Select Option(Choose Multiple)') </label>
                            <div class="mb-4">
                                <a style="background-color:cadetblue;color:white;border:0" onclick="AddMulti()"
                                    class="btn btn-praimry"> @lang('Add Options') </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row" id="Additional">
                        <div class="col-md-12">
                            <label for="productNameLabel" class="form-label"></i>@lang('Add Select Option With Qty(Choose Multiple)') </label>
                            <div class="mb-4">
                                <a style="background-color:cadetblue;color:white;border:0" onclick="AddAdditional()"
                                    class="btn btn-praimry"> @lang('Add Options') </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@section('js')
    <script>
        function AddMoreSelect(i,index) {
            var name = '<input type="text" class="form-control" name="secondSelctName['+index+'][]" placeholder="{{ __("Name") }}">';
            var price = '<input type="number" class="form-control price" name="secondSelctPrice['+index+'][]" placeholder="{{ __('0.00') }}">';
            $('#SelectName'+i).append(name);
            $('#SelectPrice'+i).append(price);
        }
        function AddMoreAddSelect(i,index) {
            var name = '<input type="text" class="form-control" name="AdditionalSelectName['+index+'][]" placeholder="{{ __("Name") }}">';
            var price = '<input type="number" class="form-control price" name="AdditionalSelectPrice['+index+'][]" placeholder="{{ __('0.00') }}">';
            var Qty = '<input type="number" class="form-control" name="MaxQty['+index+'][]" placeholder="{{ __('0') }}">'
            $('#AddSelectName'+i).append(name);
            $('#AddSelectPrice'+i).append(price);
            $('#MaxQty'+i).append(Qty);
        }
        function AddMoreMultiSelect(i,index) {
            var name = '<input type="text" class="form-control" name="MultiSelectName['+index+'][]" placeholder="{{ __("Name") }}">';
            var price = '<input type="number" class="form-control price" name="MultiSelectPrice['+index+'][]" placeholder="{{ __('0.00') }}">';
            $('#MultiSelectName'+i).append(name);
            $('#MultiSelectPrice'+i).append(price);
        }
        var i = 0;
        var index = -1;
        function AddSelect(){
            i++;
            index++;
            var text =
            `
            <div class="col-md-8">
                <!-- Form -->
                <div class="mb-4">
                    <label for="productNameLabel" class="form-label">@lang('Select only one') <i
                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="@lang('User can only select one option of it')">
                        </i></label>
                    <input required type="text" class="form-control" name="mainSelect[]"
                        id="productNameLabel" placeholder="{{ __('Name') }}" value="">
                    @error('mainSelect.*')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <!-- End Form -->
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="productNameLabel" class="form-label">{{ __('Add more') }}</label>
                    <div class="mb-4">
                        <button type="button" onclick="AddMoreSelect(`+i+`,`+index+`);" class="btn btn-praimry"> <i
                                class="fa-solid fa-circle-plus fa-2x"></i> </button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    </i></label>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="" class="form-label">@lang('Name')</label>
                            <div id="SelectName`+i+`">
                                <input type="text" class="form-control" name="secondSelctName[`+index+`][]"
                                    placeholder="{{ __('Name') }}">
                                @error('secondSelctName.*')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">@lang('Price')</label>
                            <div id="SelectPrice`+i+`">
                                <input type="number" class="form-control price"
                                    name="secondSelctPrice[`+index+`][]" placeholder="{{ __('0.00') }}">
                                @error('secondSelctPrice.*')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
            $('#OneSelect').append(text);
        }
        var Multii = 0;
        var Multiindex = -1;
        function AddMulti(){
            Multii++;
            Multiindex++;
            var text = `
            <div class="col-md-8">
                <!-- Form -->
                <div class="mb-4">
                    <label for="productNameLabel" class="form-label">
                        @lang('Select multiple options')
                        <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                            data-bs-placement="top"
                            title="@lang('User can select multiple options of it')">
                        </i>
                    </label>
                    <input required type="text" class="form-control" name="MultiSelect[]"
                        id="productNameLabel" placeholder="{{ __('Name') }}" value="">
                    @error('MultiSelect.*')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                </div>
                <!-- End Form -->
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <label for="productNameLabel" class="form-label">{{ __('Add more') }}</label>
                    <div class="mb-4">
                        <button type="button" onclick="AddMoreMultiSelect(`+Multii+`,`+Multiindex+`);" class="btn btn-praimry"> <i
                                class="fa-solid fa-circle-plus fa-2x"></i> </button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="mb-4">
                    </i></label>
                    <div class="row">
                        <div class="col-md-8">
                            <label for="" class="form-label">@lang('Name')</label>
                            <div id="MultiSelectName`+Multii+`">
                                <input type="text" class="form-control" name="MultiSelectName[`+Multiindex+`][]"
                                    placeholder="{{ __('Name') }}">
                                @error('MultiSelectName.*')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label for="" class="form-label">@lang('Price')</label>
                            <div id="MultiSelectPrice`+Multii+`">
                                <input type="number" class="form-control price"
                                    name="MultiSelectPrice[`+Multiindex+`][]" placeholder="{{ __('0.00') }}">
                                @error('MultiSelectPrice.*')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            `;
            $('#Multi').append(text);
        }
        var Addi = 0;
        var Addindex = -1;
        function AddAdditional(){
            Addi++;
            Addindex++;
            var text =`
            <div class="col-md-8">
                            <!-- Form -->
                            <div class="mb-4">
                                <label for="productNameLabel" class="form-label">@lang('Additional Quantity Select')
                                    <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                        data-bs-placement="top"
                                        title="@lang('You can add options that user can select and choose this quantity')">
                                    </i></label>
                                <input required type="text" class="form-control" name="AdditionalSelect[]"
                                    id="productNameLabel" placeholder="{{ __('Name') }}" value="">
                                @error('AdditionalSelect.*')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- End Form -->
                        </div>
                        <div class="col-md-4">
                            <div class="mb-4">
                                <label for="productNameLabel" class="form-label">{{ __('Add more') }}</label>
                                <div class="mb-4">
                                    <button type="button" onclick="AddMoreAddSelect(`+Addi+`,`+Addindex+`);" class="btn btn-praimry"> <i
                                            class="fa-solid fa-circle-plus fa-2x"></i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="mb-4">
                                </i></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">@lang('Name')</label>
                                        <div id="AddSelectName`+Addi+`">
                                            <input type="text" class="form-control" name="AdditionalSelectName[`+Addindex+`][]"
                                                placeholder="{{ __('Name') }}">
                                            @error('AdditionalSelectName.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">@lang('Price')</label>
                                        <div id="AddSelectPrice`+Addi+`">
                                            <input type="number" class="form-control"
                                                name="AdditionalSelectPrice[`+Addindex+`][]" placeholder="{{ __('0.00') }}">
                                            @error('AdditionalSelectPrice.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">
                                            @lang('Qty')
                                            <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="@lang('Max quantity that user can add')">
                                            </i>
                                        </label>
                                        <div id="MaxQty`+Addi+`">
                                            <input type="number" class="form-control" name="MaxQty[`+Addindex+`][]"
                                                placeholder="{{ __('0') }}">
                                            @error('MaxQty.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
            `;
            $('#Additional').append(text);
        }
    </script>
@endsection

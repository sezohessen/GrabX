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
                    <div class="row">
                        <div class="col-md-4">
                            <label for="productNameLabel" class="form-label"></i>@lang('Add') </label>
                            <div class="mb-4">
                                <a style="background-color:cadetblue;color:white;border:0" @click="open = true"
                                    class="btn btn-praimry"> @lang('Add Select box') </a>
                            </div>
                        </div>
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
                                    <button type="button" onclick="AddMoreSelect();" class="btn btn-praimry"> <i
                                            class="fa-solid fa-circle-plus fa-2x"></i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-4">
                                </i></label>
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="" class="form-label">@lang('Name')</label>
                                        <div id="SelectName">
                                            <input type="text" class="form-control" name="secondSelctName[][]"
                                                placeholder="{{ __('Name') }}">
                                            @error('secondSelctName.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">@lang('Price')</label>
                                        <div id="SelectPrice">
                                            <input type="number" class="form-control price"
                                                name="secondSelctPrice[][]" placeholder="{{ __('0.00') }}">
                                            @error('secondSelctPrice.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="productNameLabel" class="form-label"></i>@lang('Add') </label>
                            <div class="mb-4">
                                <a style="background-color:cadetblue;color:white;border:0" @click="open = true"
                                    class="btn btn-praimry"> @lang('Add Select box') </a>
                            </div>
                        </div>
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
                                    <button type="button" onclick="AddMoreMultiSelect();" class="btn btn-praimry"> <i
                                            class="fa-solid fa-circle-plus fa-2x"></i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-4">
                                </i></label>
                                <div class="row">
                                    <div class="col-md-8">
                                        <label for="" class="form-label">@lang('Name')</label>
                                        <div id="MultiSelectName">
                                            <input type="text" class="form-control" name="MultiSelectName[][]"
                                                placeholder="{{ __('Name') }}">
                                            @error('MultiSelectName.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <label for="" class="form-label">@lang('Price')</label>
                                        <div id="MultiSelectPrice">
                                            <input type="number" class="form-control price"
                                                name="MultiSelectPrice[][]" placeholder="{{ __('0.00') }}">
                                            @error('MultiSelectPrice.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-4">
                            <label for="productNameLabel" class="form-label"></i>@lang('Add') </label>
                            <div class="mb-4">
                                <a style="background-color:cadetblue;color:white;border:0" @click="open = true"
                                    class="btn btn-praimry"> @lang('Add Select box') </a>
                            </div>
                        </div>
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
                                    <button type="button" onclick="AddMoreAddSelect();" class="btn btn-praimry"> <i
                                            class="fa-solid fa-circle-plus fa-2x"></i> </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="mb-4">
                                </i></label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="" class="form-label">@lang('Name')</label>
                                        <div id="AddSelectName">
                                            <input type="text" class="form-control" name="AdditionalSelectName[][]"
                                                placeholder="{{ __('Name') }}">
                                            @error('AdditionalSelectName.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <label for="" class="form-label">@lang('Price')</label>
                                        <div id="AddSelectPrice">
                                            <input type="number" class="form-control"
                                                name="AdditionalSelectPrice[][]" placeholder="{{ __('0.00') }}">
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
                                        <div id="MaxQty">
                                            <input type="number" class="form-control" name="MaxQty[][]"
                                                placeholder="{{ __('0') }}">
                                            @error('MaxQty.*')
                                                <div class="alert alert-danger mt-2">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
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
        function AddMoreSelect() {
            var name = '<input type="text" class="form-control" name="secondSelctName[][]" placeholder="{{ __('Name') }}">';
            var price = '<input type="number" class="form-control price" name="secondSelctPrice[][]" placeholder="{{ __('0.00') }}">';
            $('#SelectName').append(name);
            $('#SelectPrice').append(price);
        }
        function AddMoreAddSelect() {
            var name = '<input type="text" class="form-control" name="AdditionalSelectName[][]" placeholder="{{ __('Name') }}">';
            var price = '<input type="number" class="form-control price" name="AdditionalSelectPrice[][]" placeholder="{{ __('0.00') }}">';
            var Qty = '<input type="number" class="form-control" name="MaxQty[][]" placeholder="{{ __('0') }}">'
            $('#AddSelectName').append(name);
            $('#AddSelectPrice').append(price);
            $('#MaxQty').append(Qty);
        }
        function AddMoreMultiSelect() {
            var name = '<input type="text" class="form-control" name="MultiSelectName[][]" placeholder="{{ __('Name') }}">';
            var price = '<input type="number" class="form-control price" name="MultiSelectPrice[][]" placeholder="{{ __('0.00') }}">';
            $('#MultiSelectName').append(name);
            $('#MultiSelectPrice').append(price);
        }
    </script>
@endsection

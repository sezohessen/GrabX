<div class="container card-body" x-data="{ open: true }">
    {{-- First Selct --}}
    <div x-if="open">
        <div class="mt-4">
            <div class="row" x-data="{ open: false }">
                <div class="col-md-3">
                    <!-- Form -->
                    <div class="mb-4">
                        <label for="productNameLabel" class="form-label">{{ __('Select box name')  }} <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('You can add select box to add option to your product ex: size, offers')">
                        </i></label>
                        <input required type="text" class="form-control" name="mainSelect" id="productNameLabel" placeholder="{{ __('Select box name') }}" aria-label="{{ __('Select box name') }}" value="">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- End Form -->
                </div>
                <div class="col-md-3">
                    <label for="productNameLabel" class="form-label"></i>@lang('Add') </label>
                     <div class="mb-4">
                        <a style="background-color:cadetblue;color:white;border:0" @click="open = true" class="btn btn-praimry"> @lang('Add Select box') </a>
                    </div>
                </div>
                    {{-- Second select --}}
                <div x-if="open">
                    <div id="row" class="row">
                        <div class="col-md-2">
                            <div class="mb-4">
                                <label for="productNameLabel" class="form-label">{{ __('Select box name')  }} <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('You can add select box to add option to your product ex: size, offers')">
                                </i></label>
                                <input required type="text" class="form-control" name="secondSelctName[]" id="productNameLabel" placeholder="{{ __('Select box name') }}" aria-label="{{ __('Select box name') }}" value="">
                                @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-4">
                                <label for="productNameLabel" class="form-label">{{ __('Price')  }} </label>
                                <input required type="text" class="form-control" name="secondSelctPrice[]" id="productNameLabel" placeholder="{{ __('Select box name') }}" aria-label="{{ __('Select box name') }}" value="">
                                @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="mb-4">
                                <label for="productNameLabel" class="form-label">{{ __('Add more')  }}</label>
                                <div class="mb-4">
                                    <button type="button" onclick="AddMoreSelect();" class="btn btn-praimry"> <i class="fa-solid fa-circle-plus fa-2x"></i> </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End second select --}}
            </div>
        </div>
    </div>
</div>
@section('js')
    <script>
        function AddMoreSelect() {
          const div = document.createElement('div');
          div.className = 'row';
          div.innerHTML = `
                <div class="col-md-2">
                    <div class="mb-4">
                        <label for="productNameLabel" class="form-label">{{ __('Select box name')  }} <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('You can add select box to add option to your product ex: size, offers')">
                        </i></label>
                        <input required type="text" class="form-control" name="secondSelctName[]" id="productNameLabel" placeholder="{{ __('Select box name') }}" aria-label="{{ __('Select box name') }}">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="mb-4">
                        <label for="productNameLabel" class="form-label">{{ __('Price')  }} </label>
                        <input required type="text" class="form-control" name="secondSelctPrice[]" id="productNameLabel" placeholder="{{ __('Select box name') }}" aria-label="{{ __('Select box name') }}">
                        @error('name')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            `;
            document.getElementById('row').appendChild(div);
        }
    </script>
@endsection

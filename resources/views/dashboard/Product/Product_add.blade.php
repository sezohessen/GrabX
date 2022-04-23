@extends('dashboard.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ global_asset('css/dashboard/product.css') }}">
@endsection
@section('content')
<!-- Content -->
{{-- @if($errors)
    @foreach ($errors->all() as $error)
        <div>{{ $error }}</div>
    @endforeach
@endif --}}
<div class="content container-fluid">
    <!-- Page Header -->
    <div class="page-header">
        <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-no-gutter">
                        <li class="breadcrumb-item"><a class="breadcrumb-link"
                                href="{{ route('tenant.Product.index') }}"> {{ __('Products') }} </a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ __('Add product') }}</li>
                    </ol>
                </nav>

                <h1 class="page-header-title">{{ __('Add product') }}</h1>

            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
    </div>
    <!-- End Page Header -->
    <form action="{{route("tenant.Product.store")}}" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="row">
            <div class="col-lg-8 mb-3 mb-lg-0">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title"> {{ __('Product information') }} </h4>
                    </div>
                    <!-- End Header -->
                    {{-- Form --}}
                    <!-- Body -->
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="productNameLabel" class="form-label">{{ __('Name') }} <i
                                            class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip"
                                            data-bs-placement="top"
                                            title="Products are the goods or services you sell."></i></label>
                                    <input required type="text" class="form-control" name="name" id="productNameLabel"
                                        placeholder="{{ __('Product name') }}" aria-label="{{ __('Product name') }}"
                                        value="">
                                    @error('name')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End Form -->
                            </div>
                            <div class="col-md-6">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="productNameLabel" class="form-label">{{ __('Arabic name') }}</label>
                                    <input required type="text" class="form-control" name="name_ar"
                                        id="productNameLabel" placeholder="{{ __('Product name in arabic') }}"
                                        aria-label=" {{  __('Product name in arabic') }}" value="">
                                    @error('name_ar')
                                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                                    @enderror
                                </div>
                                <!-- End Form -->
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="description" class="form-label"> {{ __('Description') }} </label>
                                    <div class="form-group">
                                        <textarea required name="desc" class="form-control"
                                            placeholder="{{ __('Description') }}" id="floatingTextarea2"
                                            rows="6"></textarea>
                                        @error('desc')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-6">
                                <!-- Form -->
                                <div class="mb-4">
                                    <label for="weightLabel" class="form-label"> {{ __('Arabic description') }} </label>
                                    <div class="form-group">
                                        <textarea required name="desc_ar" class="form-control"
                                            placeholder="{{ __('Arabic description') }}" id="floatingTextarea2"
                                            rows="6"></textarea>
                                        @error('desc_ar')
                                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <!-- End Form -->
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->


                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header card-header-content-between">
                        <h4 class="card-header-title"> {{ __('Product image') }} </h4>
                        <!-- End Dropdown -->
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body image-section">
                        <div class="avatar-upload">
                            <div class="avatar-edit">
                                <input type='file' id="imageUpload" name="image" accept=".png, .jpg, .jpeg" />
                                <label for="imageUpload"></label>
                            </div>
                            <div class="avatar-preview">
                                <div id="imagePreview" style="background-image: url({{ global_asset('img/products/default.jpg') }});">
                                </div>
                            </div>
                        </div>
                    </div>
                    @error('image')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                    @enderror
                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->

            <div class="col-lg-4">
                <!-- Card -->
                <div class="card mb-3 mb-lg-5">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title">{{ __('Pricing') }}</h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="priceNameLabel" class="form-label">{{ __('Price') }}</label>
                            <div class="input-group">
                                <input required type="text" class="form-control" name="price" id="priceNameLabel"
                                    placeholder="0.00" aria-label="0.00">
                            </div>
                            @error('price')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- End Form -->


                        <hr class="my-4">

                    </div>
                    <!-- Body -->
                </div>
                <!-- End Card -->

                <!-- Card -->
                <div class="card">
                    <!-- Header -->
                    <div class="card-header">
                        <h4 class="card-header-title"> {{ __('Extra information') }} </h4>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="ProductQty" class="form-label"> {{ __("Product quantity") }} </label>
                            <input type="text" class="form-control" name="qty" id="ProductQty" placeholder="{{ __(" The
                                amount of product you wanna add") }}" aria-label="eg.1 , 5">
                        </div>
                        @error('qty')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <!-- End Form -->
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="ProductQty" class="form-label"> {{ __("Available quantity") }} </label>
                            <input required type="text" class="form-control" name="availabe_qty" id="ProductQty"
                                placeholder="{{ __(" The amount of product you have") }}" aria-label="eg.1 , 5">
                        </div>
                        @error('availabe_qty')
                        <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                        <!-- End Form -->

                        <!-- Form -->
                        <div class="mb-4">
                            <label for="categoryLabel" class="form-label"> {{ __('Category') }} </label>
                            <!-- Select -->
                            <select required name="category_id" id="select-beast"
                                placeholder="{{ __('Select category') }}" autocomplete="off">
                                <option value=""> {{ __('Select category') }}</option>
                                @foreach ($categories as $category )
                                <option value="{{ $category->id }}"> {{ LangDetail($category->name, $category->name_ar)
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
                    <!-- Body -->
                </div>
                <!-- End Card -->
            </div>
            <!-- End Col -->
        </div>
        <!-- End Row -->
        {{-- Start popUp add-Ons --}}
        @livewire('first-select-box')
        {{-- Start popUp add-Ons --}}

        <div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
            <!-- Card -->
            <div class="card card-sm bg-dark border-dark mx-2">
                <div class="card-body">
                    <div class="row justify-content-center justify-content-sm-between">
                        <div class="col">
                            <button type="button" onclick="window.location='{{ route('tenant.Product.index') }}'"
                                class="btn btn-ghost-light">{{ __('Discard') }}</button>
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                            <div class="d-flex gap-3">
                                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                            </div>
                        </div>
                        <!-- End Col -->
                    </div>
                    <!-- End Row -->
                </div>
            </div>
        </div>
            {{-- End form --}}
    </form>
    <!-- End Card -->
</div>
<!-- End Content -->
@endsection


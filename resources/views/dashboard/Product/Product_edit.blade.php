@extends('dashboard.layouts.app')

@section('content')
      <!-- Content -->
      <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
          <div class="row align-items-center">
            <div class="col-sm mb-2 mb-sm-0">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb breadcrumb-no-gutter">
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('tenant.Product.index') }}"> {{ __('Products') }} </a></li>
                  <li class="breadcrumb-item active" aria-current="page">{{ __('Edit product') }}</li>
                </ol>
              </nav>

              <h1 class="page-header-title">{{ __('Edit product') }}</h1>

            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>
        <!-- End Page Header -->

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
              <form  action="{{route("tenant.Product.update",['Product'=>$Product->id])}}" method="POST" enctype="multipart/form-data">
                @method('PATCH')
                @csrf
              <!-- Body -->
              <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Form -->
                        <div class="mb-4">
                            <label for="productNameLabel" class="form-label">{{ __('Name')  }} <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Products are the goods or services you sell."></i></label>
                            <input type="text" class="form-control" name="name" id="productNameLabel" placeholder="{{ __('Product name') }}" aria-label="{{ __('Product name') }}" value="{{ $Product->name }}">
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
                            <input type="text" class="form-control" name="name_ar" id="productNameLabel" placeholder="{{ __('Product name in arabic') }}" aria-label=" {{  __('Product name in arabic') }}" value="{{ $Product->name_ar }}">
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
                      <div class="form-floating">
                        <textarea name="desc" class="form-control" placeholder="{{ __('Description') }}" id="floatingTextarea2" style="height: 100px">
                        {!! $Product->desc !!}
                        </textarea>
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
                        <div class="form-floating">
                            <textarea name="desc_ar" class="form-control" placeholder="{{ __('Arabic description') }}" id="floatingTextarea2" style="height: 100px">
                                {{ $Product->desc_ar }}
                            </textarea>
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
                <h4 class="card-header-title"> {{ __('Media') }} </h4>
                <!-- End Dropdown -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Dropzone -->
                <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card">
                  <div class="dz-message">
                    <img class="mb-3" src="{{find_image($Product->image ,  App\Models\Product::base ) }}" alt="Image Description" data-hs-theme-appearance="default">
                    <div class="mb-3">
                        <label for="formFile" class="form-label"></label>
                        <input name="image" class="form-control" type="file" id="formFile">
                    </div>
                  </div>
                </div>
                <!-- End Dropzone -->
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
                    <input type="text" class="form-control" name="price" id="priceNameLabel" placeholder="0.00" aria-label="0.00"
                     value="{{ $Product->price }}">
                  </div>
                  @error('price')
                   <div class="alert alert-danger mt-2">{{ $message }}</div>
                  @enderror
                </div>
                <!-- End Form -->



                <hr class="my-4">

                <!-- Form Switch -->
                <label class="row form-check form-switch" for="availabilitySwitch1">
                  <span class="col-8 col-sm-9 ms-0">
                    <span class="text-dark">{{ __('Availability') }} <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Product availability switch toggler."></i></span>
                  </span>
                  <span class="col-4 col-sm-3 text-end">
                    <input {{ ($Product->active == 1) ? 'checked' : '' }} name="active" type="checkbox" class="form-check-input" id="availabilitySwitch1">
                  </span>
                </label>
                <!-- End Form Switch -->
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
                  <input value="{{ $Product->qty }}" type="text" class="form-control" name="qty" id="ProductQty" placeholder="{{ __("The amount of product you wanna add") }}" aria-label="eg.1 , 5">
                </div>
                @error('qty')
                     <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <!-- End Form -->
                <!-- Form -->
                <div class="mb-4">
                  <label for="ProductQty" class="form-label"> {{ __("Available quantity") }} </label>
                  <input value="{{ $Product->availabe_qty }}" type="text" class="form-control" name="availabe_qty" id="ProductQty" placeholder="{{ __("The amount of product you have") }}" aria-label="eg.1 , 5">
                </div>
                @error('availabe_qty')
                    <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="categoryLabel" class="form-label"> {{ __('Category') }} </label>
                  <!-- Select -->
                    <select name="category_id" id="select-beast" placeholder="{{ __('Select category') }}" autocomplete="off">
                        <option value="{{ $Product->category_id }}"> {{ LangDetail($Product->category->name, $Product->category->name_ar) }} </option>
                        @foreach ($categories as $category )
                            <option value="{{ $category->id }}">{{ LangDetail($category->name, $category->name_ar) }} </option>
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

        <div class="position-fixed start-50 bottom-0 translate-middle-x w-100 zi-99 mb-3" style="max-width: 40rem;">
          <!-- Card -->
          <div class="card card-sm bg-dark border-dark mx-2">
            <div class="card-body">
              <div class="row justify-content-center justify-content-sm-between">
                <div class="col">
                    <button type="button" onclick="window.location='{{ route('tenant.Product.index') }}' " class="btn btn-ghost-light">{{ __('Discard') }}</button>
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
          {{-- End form --}}
        </form>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Content -->

@endsection

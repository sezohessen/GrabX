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
                  <li class="breadcrumb-item"><a class="breadcrumb-link" href="./ecommerce-products.html">Products</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Product</li>
                </ol>
              </nav>

              <h1 class="page-header-title">Add Product</h1>

              <div class="mt-2">
                <a class="text-body me-3" href="javascript:;">
                  <i class="bi-clipboard me-1"></i> Duplicate
                </a>
                <a class="text-body" href="javascript:;">
                  <i class="bi-eye me-1"></i> Preview
                </a>
              </div>
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
                <h4 class="card-header-title">Product information</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="mb-4">
                  <label for="productNameLabel" class="form-label">Name <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Products are the goods or services you sell."></i></label>

                  <input type="text" class="form-control" name="productName" id="productNameLabel" placeholder="Shirt, t-shirts, etc." aria-label="Shirt, t-shirts, etc." value="Tiro track jacket">
                </div>
                <!-- End Form -->

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="SKULabel" class="form-label">SKU</label>

                      <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="eg. 348121032" aria-label="eg. 348121032">
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->

                  <div class="col-sm-6">
                    <!-- Form -->
                    <div class="mb-4">
                      <label for="weightLabel" class="form-label">Weight</label>

                      <div class="input-group">
                        <input type="text" class="form-control" name="weightName" id="weightLabel" placeholder="0.0" aria-label="0.0">

                        <div class="input-group-append">
                          <!-- Select -->
                          <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "6rem"
                                    }'>
                              <option value="lb">lb</option>
                              <option value="oz">oz</option>
                              <option value="kg" selected>kg</option>
                              <option value="g">g</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                      </div>

                      <small class="form-text">Used to calculate shipping rates at checkout and label prices during fulfillment.</small>
                    </div>
                    <!-- End Form -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <label class="form-label">Description <span class="form-label-secondary">(Optional)</span></label>

                <!-- Quill -->
                <div class="quill-custom">
                  <div class="js-quill" style="height: 15rem;" data-hs-quill-options='{
                       "placeholder": "Type your description...",
                        "modules": {
                          "toolbar": [
                            ["bold", "italic", "underline", "strike", "link", "image", "blockquote", "code", {"list": "bullet"}]
                          ]
                        }
                       }'>
                  </div>
                </div>
                <!-- End Quill -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card mb-3 mb-lg-5">
              <!-- Header -->
              <div class="card-header card-header-content-between">
                <h4 class="card-header-title">Media</h4>

                <!-- Dropdown -->
                <div class="dropdown">
                  <a class="btn btn-ghost-secondary btn-sm" href="#!" id="mediaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                    Add media from URL <i class="bi-chevron-down"></i>
                  </a>

                  <div class="dropdown-menu dropdown-menu-end mt-1">
                    <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#addImageFromURLModal">
                      <i class="bi-link dropdown-item-icon"></i> Add image from URL
                    </a>
                    <a class="dropdown-item" href="javascript:;" data-bs-toggle="modal" data-bs-target="#embedVideoModal">
                      <i class="bi-youtube dropdown-item-icon"></i> Embed video
                    </a>
                  </div>
                </div>
                <!-- End Dropdown -->
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Dropzone -->
                <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card">
                  <div class="dz-message">
                    <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{ asset('images/dashboard/svg/illustrations/oc-browse.svg') }}" alt="Image Description" data-hs-theme-appearance="default">
                    <img class="avatar avatar-xl avatar-4x3 mb-3" src="{{ asset('images/dashboard/svg/illustrations-light/oc-browse.svg') }}" alt="Image Description" data-hs-theme-appearance="dark">

                    <h5>Drag and drop your file here</h5>

                    <p class="mb-2">or</p>

                    <span class="btn btn-white btn-sm">Browse files</span>
                  </div>
                </div>
                <!-- End Dropzone -->
              </div>
              <!-- Body -->
            </div>
            <!-- End Card -->

            <!-- Card -->
            <div class="card">
              <!-- Header -->
              <div class="card-header">
                <h4 class="card-header-title">Variants</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <h6 class="text-cap">Options</h6>

                <div class="js-add-field" data-hs-add-field-options='{
                      "template": "#addAnotherOptionFieldTemplate",
                      "container": "#addAnotherOptionFieldContainer",
                      "defaultCreated": 0
                    }'>
                  <div class="row mb-4">
                    <div class="col-sm-4 mb-2 mb-sm-0">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="Size">Size</option>
                          <option value="Color">Color</option>
                          <option value="Material">Material</option>
                          <option value="Style">Style</option>
                          <option value="Title">Title</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->

                  <!-- Container For Input Field -->
                  <div id="addAnotherOptionFieldContainer"></div>

                  <a href="javascript:;" class="js-create-field form-link">
                    <i class="bi-plus"></i> Add another option
                  </a>
                </div>

                <!-- Add Another Option Input Field -->
                <div id="addAnotherOptionFieldTemplate" style="display: none;">
                  <div class="row mb-4">
                    <div class="col-sm-4 mb-2 mb-sm-0">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select-dynamic form-select" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true
                                }'>
                          <option value="Size">Size</option>
                          <option value="Color">Color</option>
                          <option value="Material">Material</option>
                          <option value="Style">Style</option>
                          <option value="Title">Title</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                    <!-- End Col -->

                    <div class="col-sm-8">
                      <input type="text" class="form-control" placeholder="Enter tags" aria-label="Enter tags">
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Add Another Option Input Field -->
              </div>
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
                <h4 class="card-header-title">Pricing</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="mb-4">
                  <label for="priceNameLabel" class="form-label">Price</label>

                  <div class="input-group">
                    <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="0.00" aria-label="0.00">

                    <div class="input-group-append">
                      <!-- Select -->
                      <div class="tom-select-custom">
                        <select class="js-select form-select" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "7rem",
                                  "dropdownWrapperClass": "tom-select-custom tom-select-custom-end"
                                }'>
                          <option value="USD" selected>KWD</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                </div>
                <!-- End Form -->



                <hr class="my-4">

                <!-- Form Switch -->
                <label class="row form-check form-switch" for="availabilitySwitch1">
                  <span class="col-8 col-sm-9 ms-0">
                    <span class="text-dark">Availability <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Product availability switch toggler."></i></span>
                  </span>
                  <span class="col-4 col-sm-3 text-end">
                    <input type="checkbox" class="form-check-input" id="availabilitySwitch1">
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
                <h4 class="card-header-title">Organization</h4>
              </div>
              <!-- End Header -->

              <!-- Body -->
              <div class="card-body">
                <!-- Form -->
                <div class="mb-4">
                  <label for="vendorLabel" class="form-label">Vendor</label>

                  <input type="text" class="form-control" name="vendor" id="vendorLabel" placeholder="eg. Nike" aria-label="eg. Nike">
                </div>
                <!-- End Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="categoryLabel" class="form-label">Category</label>

                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="js-select form-select" autocomplete="off" id="categoryLabel" data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true,
                              "placeholder": "Select category"
                            }'>
                      <option value="Clothing">Clothing</option>
                      <option value="Shoes">Shoes</option>
                      <option value="Electronics">Electronics</option>
                      <option value="Others">Others</option>
                    </select>
                  </div>
                  <!-- End Select -->
                </div>
                <!-- Form -->

                <!-- Form -->
                <div class="mb-4">
                  <label for="collectionsLabel" class="form-label">Collections</label>

                  <!-- Select -->
                  <div class="tom-select-custom">
                    <select class="js-select form-select" autocomplete="off" id="collectionsLabel" data-hs-tom-select-options='{
                              "searchInDropdown": false,
                              "hideSearch": true,
                              "placeholder": "Select collections"
                            }'>
                      <option value="Winter">Winter</option>
                      <option value="Spring">Spring</option>
                      <option value="Summer">Summer</option>
                      <option value="Autumn">Autumn</option>
                    </select>
                  </div>
                  <!-- End Select -->

                  <span class="form-text">Add this product to a collection so it’s easy to find in your store.</span>
                </div>
                <!-- Form -->

                <label for="tagsLabel" class="form-label">Tags</label>

                <input type="text" class="form-control" id="tagsLabel" placeholder="Enter tags here" aria-label="Enter tags here">
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
                    <button type="button" class="btn btn-ghost-light">Discard</button>
                </div>
                <!-- End Col -->

                <div class="col-auto">
                  <div class="d-flex gap-3">
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
          </div>
          <!-- End Card -->
        </div>
      </div>
      <!-- End Content -->

@endsection

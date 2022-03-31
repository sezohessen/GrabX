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
                      <li class="breadcrumb-item active" aria-current="page">Product details</li>
                    </ol>
                  </nav>

                  <h1 class="page-header-title">Tiro track jacket</h1>

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

                <div class="col-sm-auto">
                  <div class="d-flex gap-2">
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle me-1" data-bs-toggle="tooltip" data-bs-placement="right" title="Previous product">
                      <i class="bi-arrow-left"></i>
                    </button>
                    <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm rounded-circle" data-bs-toggle="tooltip" data-bs-placement="right" title="Next product">
                      <i class="bi-arrow-right"></i>
                    </button>
                  </div>
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->
            </div>
            <!-- End Page Header -->

            <div class="row">
              <div class="col-lg-8">
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

                          <input type="text" class="form-control" name="SKU" id="SKULabel" placeholder="eg. 348121032" aria-label="eg. 348121032" value="124617209">
                        </div>
                        <!-- End Form -->
                      </div>
                      <!-- End Col -->

                      <div class="col-sm-6">
                        <!-- Form -->
                        <div class="mb-4">
                          <label for="weightLabel" class="form-label">Weight</label>

                          <div class="input-group">
                            <input type="text" class="form-control" name="weightName" id="weightLabel" placeholder="0.0" aria-label="0.0" value="0.2">
                            <div class="input-group-append">
                              <!-- Select -->
                              <div class="tom-select-custom tom-select-custom-end">
                                <select class="js-select form-select" data-hs-tom-select-options='{
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
                        <p>Train hard. Stay dry. This soccer jacket is made of soft, sweat-wicking fabric that keeps you moving on the practice field. Stretch panels at the elbows and sides give you a full range of motion as you work.</p>
                        <p><br></p>
                        <h3>Specifications</h3>
                        <ul>
                          <li>Regular fit is wider at the body, with a straight silhouette</li>
                          <li>Ribbed stand-up collar</li>
                          <li>Long sleeves with ribbed cuffs</li>
                          <li>100% polyester doubleknit</li>
                          <li>Front zip pockets; Full zip; Ribbing details; Ribbed hem</li>
                        </ul>
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
                      <button type="button" class="btn btn-ghost-secondary btn-sm" id="mediaDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Add media from URL <i class="bi-chevron-down"></i>
                      </button>

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
                    <!-- Gallery -->
                    <div id="fancyboxGallery" class="js-fancybox row justify-content-sm-center gx-3">
                      <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card card-sm">
                          <img class="card-img-top" src="./assets/img/400x400/img7.jpg" alt="Image Description">

                          <div class="card-body">
                            <div class="row col-divider text-center">
                              <div class="col">
                                <a class="text-body" href="./assets/img/725x1080/img1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-fslightbox="gallery">
                                  <i class="bi-eye"></i>
                                </a>
                              </div>
                              <!-- End Col -->

                              <div class="col">
                                <a class="text-danger" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                  <i class="bi-trash"></i>
                                </a>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Card -->
                      </div>
                      <!-- End Col -->

                      <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card card-sm">
                          <img class="card-img-top" src="./assets/img/400x400/img8.jpg" alt="Image Description">

                          <div class="card-body">
                            <div class="row col-divider text-center">
                              <div class="col">
                                <a class="text-body" href="./assets/img/1920x1080/img1.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-fslightbox="gallery">
                                  <i class="bi-eye"></i>
                                </a>
                              </div>
                              <!-- End Col -->

                              <div class="col">
                                <a class="text-danger" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                  <i class="bi-trash"></i>
                                </a>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Card -->
                      </div>
                      <!-- End Col -->

                      <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card card-sm">
                          <img class="card-img-top" src="./assets/img/400x400/img9.jpg" alt="Image Description">

                          <div class="card-body">
                            <div class="row col-divider text-center">
                              <div class="col">
                                <a class="text-body" href="./assets/img/1920x1080/img2.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-fslightbox="gallery">
                                  <i class="bi-eye"></i>
                                </a>
                              </div>
                              <!-- End Col -->

                              <div class="col">
                                <a class="text-danger" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                  <i class="bi-trash"></i>
                                </a>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Card -->
                      </div>
                      <!-- End Col -->

                      <div class="col-6 col-sm-4 col-md-3 mb-3 mb-lg-5">
                        <!-- Card -->
                        <div class="card card-sm">
                          <img class="card-img-top" src="./assets/img/400x400/img10.jpg" alt="Image Description">

                          <div class="card-body">
                            <div class="row col-divider text-center">
                              <div class="col">
                                <a class="text-body" href="./assets/img/1920x1080/img3.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="View" data-fslightbox="gallery">
                                  <i class="bi-eye"></i>
                                </a>
                              </div>
                              <!-- End Col -->

                              <div class="col">
                                <a class="text-danger" href="javascript:;" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                  <i class="bi-trash"></i>
                                </a>
                              </div>
                              <!-- End Col -->
                            </div>
                            <!-- End Row -->
                          </div>
                          <!-- End Col -->
                        </div>
                        <!-- End Card -->
                      </div>
                      <!-- End Col -->
                    </div>
                    <!-- End Gallery -->

                    <!-- Dropzone -->
                    <div id="attachFilesNewProjectLabel" class="js-dropzone dz-dropzone dz-dropzone-card">
                      <div class="dz-message">
                        <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="default">
                        <img class="avatar avatar-xl avatar-4x3 mb-3" src="./assets/svg/illustrations-light/oc-browse.svg" alt="Image Description" data-hs-theme-appearance="dark">

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
                <div class="js-add-field card mb-3 mb-lg-5" data-hs-add-field-options='{
                      "template": "#addVariantsTemplate",
                      "container": "#addVariantsContainer",
                      "defaultCreated": 0,
                      "limit": 100
                    }'>
                  <!-- Header -->
                  <div class="card-header card-header-content-sm-between">
                    <h4 class="card-header-title mb-2 mb-sm-0">Variants</h4>

                    <div class="d-sm-flex align-items-center gap-2">
                      <!-- Datatable Info -->
                      <div id="datatableCounterInfo" class="mb-2 mb-sm-0" style="display: none;">
                        <div class="d-flex align-items-center">
                          <span class="fs-5 me-3">
                            <span id="datatableCounter">0</span>
                            Selected
                          </span>
                          <a class="btn btn-outline-danger btn-sm" href="javascript:;">
                            <i class="bi-trash"></i> Delete
                          </a>
                        </div>
                      </div>
                      <!-- End Datatable Info -->

                      <a class="js-create-field btn btn-ghost-secondary btn-sm" href="javascript:;">
                        <i class="bi-plus"></i> Add variant
                      </a>
                    </div>
                  </div>
                  <!-- End Header -->

                  <!-- Table -->
                  <div class="table-responsive datatable-custom">
                    <table id="datatable" class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table" data-hs-datatables-options='{
                             "columnDefs": [{
                                "targets": [0, 1, 6],
                                "orderable": false
                              }],
                             "order": [],
                             "pageLength": 15,
                             "isResponsive": false,
                             "isShowPaging": false
                           }'>
                      <thead class="thead-light">
                        <tr>
                          <th scope="col" class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="datatableCheckAll">
                              <label class="form-check-label" for="datatableCheckAll"></label>
                            </div>
                          </th>
                          <th></th>
                          <th class="table-column-ps-0">Size</th>
                          <th class="table-column-ps-0">Color</th>
                          <th class="table-column-ps-0">Price</th>
                          <th class="table-column-ps-0">Quantity</th>
                          <th class="table-column-ps-0"></th>
                        </tr>
                      </thead>

                      <tbody id="addVariantsContainer">
                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck1">
                              <label class="form-check-label" for="productVariationsCheck1"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="S" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="White" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck2">
                              <label class="form-check-label" for="productVariationsCheck2"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="M" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="White" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck3">
                              <label class="form-check-label" for="productVariationsCheck3"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="L" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="White" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck4">
                              <label class="form-check-label" for="productVariationsCheck4"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="XL" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="White" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck5">
                              <label class="form-check-label" for="productVariationsCheck5"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="S" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Black" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck6">
                              <label class="form-check-label" for="productVariationsCheck6"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="M" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Black" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck7">
                              <label class="form-check-label" for="productVariationsCheck7"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="L" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Black" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck8">
                              <label class="form-check-label" for="productVariationsCheck8"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="XL" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Black" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="45.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="10">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck9">
                              <label class="form-check-label" for="productVariationsCheck9"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="S" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Orange" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="50.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="5">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck10">
                              <label class="form-check-label" for="productVariationsCheck10"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="M" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Orange" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="50.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="5">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck11">
                              <label class="form-check-label" for="productVariationsCheck11"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="L" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Orange" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="50.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="5">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>

                        <tr>
                          <td class="table-column-pe-0">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck12">
                              <label class="form-check-label" for="productVariationsCheck12"></label>
                            </div>
                          </td>
                          <th>
                            <img class="avatar" src="./assets/img/400x400/img7.jpg" alt="Image Description">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="XL" style="min-width: 3rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <input type="text" class="form-control" value="Orange" style="min-width: 6rem;">
                          </th>
                          <th class="table-column-ps-0">
                            <div class="input-group input-group-merge" style="min-width: 7rem;">
                              <div class="input-group-prepend input-group-text">USD</div>
                              <input type="text" class="form-control" value="50.00">
                            </div>
                          </th>
                          <th class="table-column-ps-0">
                            <!-- Quantity -->
                            <div class="quantity-counter">
                              <div class="js-quantity-counter-input row align-items-center">
                                <div class="col">
                                  <input class="js-result form-control form-control-quantity-counter" type="text" value="5">
                                </div>
                                <!-- End Col -->

                                <div class="col-auto">
                                  <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                  <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                    <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                      <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                    </svg>
                                  </a>
                                </div>
                                <!-- End Col -->
                              </div>
                              <!-- End Row -->
                            </div>
                            <!-- End Quantity -->
                          </th>
                          <th class="table-column-ps-0">
                            <div class="btn-group" role="group" aria-label="Edit group">
                              <a class="btn btn-white" href="#">
                                <i class="bi-pencil me-1"></i> Edit
                              </a>
                              <a class="btn btn-white" href="#">
                                <i class="bi-trash"></i>
                              </a>
                            </div>
                          </th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- End Table -->

                  <!-- Footer -->
                  <div class="card-footer">
                    <a class="js-create-field btn btn-sm btn-ghost-secondary" href="javascript:;">
                      <i class="bi-plus"></i> Add variant
                    </a>
                  </div>
                  <!-- End Footer -->

                  <!-- Add Variants Field -->
                  <table style="display: none;">
                    <tr id="addVariantsTemplate">
                      <td class="table-column-pe-0">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="productVariationsCheck13">
                          <label class="form-check-label" for="productVariationsCheck13"></label>
                        </div>
                      </td>
                      <th>
                        <img class="avatar" src="./assets/img/400x400/img2.jpg" alt="Image Description">
                      </th>
                      <th class="table-column-ps-0">
                        <input type="text" class="form-control" style="min-width: 3rem;">
                      </th>
                      <th class="table-column-ps-0">
                        <input type="text" class="form-control" style="min-width: 6rem;">
                      </th>
                      <th class="table-column-ps-0">
                        <div class="input-group input-group-merge" style="min-width: 7rem;">
                          <div class="input-group-prepend input-group-text">USD</div>
                          <input type="text" class="form-control">
                        </div>
                      </th>
                      <th class="table-column-ps-0">
                        <!-- Quantity -->
                        <div class="quantity-counter">
                          <div class="js-quantity-counter-dynamic row align-items-center">
                            <div class="col">
                              <input class="js-result form-control form-control-quantity-counter" type="text" value="1">
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                              <a class="js-minus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                <svg width="8" height="2" viewBox="0 0 8 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M0 1C0 0.723858 0.223858 0.5 0.5 0.5H7.5C7.77614 0.5 8 0.723858 8 1C8 1.27614 7.77614 1.5 7.5 1.5H0.5C0.223858 1.5 0 1.27614 0 1Z" fill="currentColor" />
                                </svg>
                              </a>
                              <a class="js-plus btn btn-white btn-xs btn-icon rounded-circle" href="javascript:;">
                                <svg width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M4 0C4.27614 0 4.5 0.223858 4.5 0.5V3.5H7.5C7.77614 3.5 8 3.72386 8 4C8 4.27614 7.77614 4.5 7.5 4.5H4.5V7.5C4.5 7.77614 4.27614 8 4 8C3.72386 8 3.5 7.77614 3.5 7.5V4.5H0.5C0.223858 4.5 0 4.27614 0 4C0 3.72386 0.223858 3.5 0.5 3.5H3.5V0.5C3.5 0.223858 3.72386 0 4 0Z" fill="currentColor" />
                                </svg>
                              </a>
                            </div>
                            <!-- End Col -->
                          </div>
                          <!-- End Row -->
                        </div>
                        <!-- End Quantity -->
                      </th>
                      <th class="table-column-ps-0">
                        <div class="btn-group" role="group" aria-label="Edit group">
                          <a class="btn btn-white" href="#">
                            <i class="bi-pencil me-1"></i> Edit
                          </a>
                          <a class="btn btn-white" href="#">
                            <i class="bi-trash"></i>
                          </a>
                        </div>
                      </th>
                    </tr>
                  </table>
                  <!-- End Add Variants Field -->
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
                        <input type="text" class="form-control" name="priceName" id="priceNameLabel" placeholder="0.00" aria-label="0.00" value="45.00">

                        <div class="input-group-append">
                          <!-- Select -->
                          <div class="tom-select-custom tom-select-custom-end">
                            <select class="js-select form-select" data-hs-tom-select-options='{
                                      "searchInDropdown": false,
                                      "hideSearch": true,
                                      "dropdownWidth": "8rem"
                                    }'>
                              <option value="USD" selected>USD</option>
                              <option value="AED">AED</option>
                              <option value="AFN">AFN</option>
                              <option value="ALL">ALL</option>
                              <option value="AMD">AMD</option>
                              <option value="ANG">ANG</option>
                              <option value="AOA">AOA</option>
                              <option value="ARS">ARS</option>
                              <option value="AUD">AUD</option>
                              <option value="AWG">AWG</option>
                              <option value="AZN">AZN</option>
                              <option value="BAM">BAM</option>
                              <option value="BBD">BBD</option>
                              <option value="BDT">BDT</option>
                              <option value="BGN">BGN</option>
                              <option value="BIF">BIF</option>
                              <option value="BMD">BMD</option>
                              <option value="BND">BND</option>
                              <option value="BOB">BOB</option>
                              <option value="BRL">BRL</option>
                              <option value="BSD">BSD</option>
                              <option value="BWP">BWP</option>
                              <option value="BZD">BZD</option>
                              <option value="CAD">CAD</option>
                              <option value="CDF">CDF</option>
                              <option value="CHF">CHF</option>
                              <option value="CLP">CLP</option>
                              <option value="CNY">CNY</option>
                              <option value="COP">COP</option>
                              <option value="CRC">CRC</option>
                              <option value="CVE">CVE</option>
                              <option value="CZK">CZK</option>
                              <option value="DJF">DJF</option>
                              <option value="DKK">DKK</option>
                              <option value="DOP">DOP</option>
                              <option value="DZD">DZD</option>
                              <option value="EGP">EGP</option>
                              <option value="ETB">ETB</option>
                              <option value="EUR">EUR</option>
                              <option value="FJD">FJD</option>
                              <option value="FKP">FKP</option>
                              <option value="GBP">GBP</option>
                              <option value="GEL">GEL</option>
                              <option value="GIP">GIP</option>
                              <option value="GMD">GMD</option>
                              <option value="GNF">GNF</option>
                              <option value="GTQ">GTQ</option>
                              <option value="GYD">GYD</option>
                              <option value="HKD">HKD</option>
                              <option value="HNL">HNL</option>
                              <option value="HRK">HRK</option>
                              <option value="HTG">HTG</option>
                              <option value="HUF">HUF</option>
                              <option value="IDR">IDR</option>
                              <option value="ILS">ILS</option>
                              <option value="INR">INR</option>
                              <option value="ISK">ISK</option>
                              <option value="JMD">JMD</option>
                              <option value="JPY">JPY</option>
                              <option value="KES">KES</option>
                              <option value="KGS">KGS</option>
                              <option value="KHR">KHR</option>
                              <option value="KMF">KMF</option>
                              <option value="KRW">KRW</option>
                              <option value="KYD">KYD</option>
                              <option value="KZT">KZT</option>
                              <option value="LAK">LAK</option>
                              <option value="LBP">LBP</option>
                              <option value="LKR">LKR</option>
                              <option value="LRD">LRD</option>
                              <option value="LSL">LSL</option>
                              <option value="MAD">MAD</option>
                              <option value="MDL">MDL</option>
                              <option value="MGA">MGA</option>
                              <option value="MKD">MKD</option>
                              <option value="MMK">MMK</option>
                              <option value="MNT">MNT</option>
                              <option value="MOP">MOP</option>
                              <option value="MRO">MRO</option>
                              <option value="MUR">MUR</option>
                              <option value="MVR">MVR</option>
                              <option value="MWK">MWK</option>
                              <option value="MXN">MXN</option>
                              <option value="MYR">MYR</option>
                              <option value="MZN">MZN</option>
                              <option value="NAD">NAD</option>
                              <option value="NGN">NGN</option>
                              <option value="NIO">NIO</option>
                              <option value="NOK">NOK</option>
                              <option value="NPR">NPR</option>
                              <option value="NZD">NZD</option>
                              <option value="PAB">PAB</option>
                              <option value="PEN">PEN</option>
                              <option value="PGK">PGK</option>
                              <option value="PHP">PHP</option>
                              <option value="PKR">PKR</option>
                              <option value="PLN">PLN</option>
                              <option value="PYG">PYG</option>
                              <option value="QAR">QAR</option>
                              <option value="RON">RON</option>
                              <option value="RSD">RSD</option>
                              <option value="RUB">RUB</option>
                              <option value="RWF">RWF</option>
                              <option value="SAR">SAR</option>
                              <option value="SBD">SBD</option>
                              <option value="SCR">SCR</option>
                              <option value="SEK">SEK</option>
                              <option value="SGD">SGD</option>
                              <option value="SHP">SHP</option>
                              <option value="SLL">SLL</option>
                              <option value="SOS">SOS</option>
                              <option value="SRD">SRD</option>
                              <option value="STD">STD</option>
                              <option value="SZL">SZL</option>
                              <option value="THB">THB</option>
                              <option value="TJS">TJS</option>
                              <option value="TOP">TOP</option>
                              <option value="TRY">TRY</option>
                              <option value="TTD">TTD</option>
                              <option value="TWD">TWD</option>
                              <option value="TZS">TZS</option>
                              <option value="UAH">UAH</option>
                              <option value="UGX">UGX</option>
                              <option value="UYU">UYU</option>
                              <option value="UZS">UZS</option>
                              <option value="VND">VND</option>
                              <option value="VUV">VUV</option>
                              <option value="WST">WST</option>
                              <option value="XAF">XAF</option>
                              <option value="XCD">XCD</option>
                              <option value="XOF">XOF</option>
                              <option value="XPF">XPF</option>
                              <option value="YER">YER</option>
                              <option value="ZAR">ZAR</option>
                              <option value="ZMW">ZMW</option>
                            </select>
                          </div>
                          <!-- End Select -->
                        </div>
                      </div>
                    </div>
                    <!-- End Form -->

                    <div class="mb-2">
                      <a class="d-inline-block" href="javascript:;" data-bs-toggle="modal" data-bs-target="#productsAdvancedFeaturesModal">
                        <i class="bi-star-fill fs-4 text-warning me-1"></i> Set "Compare to" price
                      </a>
                    </div>

                    <a class="d-inline-block" href="javascript:;" data-bs-toggle="modal" data-bs-target="#productsAdvancedFeaturesModal">
                      <i class="bi-star-fill fs-4 text-warning me-1"></i> Bulk discount pricing
                    </a>

                    <hr class="my-4">

                    <!-- Form Switch -->
                    <label class="row form-check form-switch" for="availabilitySwitch1">
                      <span class="col-8 col-sm-9 ms-0">
                        <span class="text-dark">Availability <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Product availability switch toggler."></i></span>
                      </span>
                      <span class="col-4 col-sm-3 text-end">
                        <input type="checkbox" class="form-check-input" id="availabilitySwitch1" checked>
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

                      <input type="text" class="form-control" name="vendor" id="vendorLabel" placeholder="eg. Nike" aria-label="eg. Nike" value="Adidas">
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
                          <option label="empty"></option>
                          <option value="Clothing" selected>Clothing</option>
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
                          <option label="empty"></option>
                          <option value="Winter">Winter</option>
                          <option value="Spring">Spring</option>
                          <option value="Summer" selected>Summer</option>
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
                      <button type="button" class="btn btn-ghost-danger">Delete</button>
                    </div>
                    <!-- End Col -->

                    <div class="col-auto">
                      <div class="d-flex gap-3">
                        <button type="button" class="btn btn-ghost-light">Discard</button>
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

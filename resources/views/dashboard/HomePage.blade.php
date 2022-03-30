@extends('dashboard.layouts.app')

@section('content')

  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <!-- Navbar Vertical -->

  <aside class="js-navbar-vertical-aside navbar navbar-vertical-aside navbar-vertical navbar-vertical-fixed navbar-expand-xl navbar-bordered bg-white  ">
    <div class="navbar-vertical-container">
      <div class="navbar-vertical-footer-offset">
        <!-- Logo -->

        {{-- <a class="navbar-brand" href="./index.html" aria-label="Front">
          <img class="navbar-brand-logo" src="./assets/svg/logos/logo.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo" src="./assets/svg/logos-light/logo.svg" alt="Logo" data-hs-theme-appearance="dark">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos/logo-short.svg" alt="Logo" data-hs-theme-appearance="default">
          <img class="navbar-brand-logo-mini" src="./assets/svg/logos-light/logo-short.svg" alt="Logo" data-hs-theme-appearance="dark">
        </a> --}}


        <!-- End Logo -->

        <!-- Navbar Vertical Toggle -->
        <button type="button" class="js-navbar-vertical-aside-toggle-invoker navbar-aside-toggler">
          <i class="bi-arrow-bar-left navbar-toggler-short-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Collapse"></i>
          <i class="bi-arrow-bar-right navbar-toggler-full-align" data-bs-template='<div class="tooltip d-none d-md-block" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>' data-bs-toggle="tooltip" data-bs-placement="right" title="Expand"></i>
        </button>

        <!-- End Navbar Vertical Toggle -->

        <!-- Content -->
        <div class="navbar-vertical-content">
          <div id="navbarVerticalMenu" class="nav nav-pills nav-vertical card-navbar-nav">
            <!-- Collapse -->
            <div class="nav-item">
              <a class="nav-link" href="#navbarVerticalMenuDashboards" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuDashboards" aria-expanded="true" aria-controls="navbarVerticalMenuDashboards">
                <i class="bi-house-door nav-icon"></i>
                <span class="nav-link-title">Dashboards</span>
              </a>
            </div>
            <!-- End Collapse -->

            <span class="dropdown-header mt-4">Pages</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <!-- Collapse -->
            <div class="navbar-nav nav-compact">

            </div>
            <div id="navbarVerticalMenuPagesMenu">
              <!-- Collapse -->
              <div class="nav-item">
                <a class="nav-link " href="#" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                  <i class="bi-basket nav-icon"></i>
                  <span class="nav-link-title">Overview</span>
                </a>
                {{-- start dropdown --}}
                <a class="nav-link dropdown-toggle " href="#navbarVerticalMenuPagesEcommerceProductsMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceProductsMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceMenu">
                    <i class="bi-basket nav-icon"></i>
                    <span class="nav-link-title">@lang('Products')</span>
                </a>
                <div id="navbarVerticalMenuPagesEcommerceProductsMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesEcommerceProductsMenu">
                    <a class="nav-link " href="./ecommerce-products.html">Products</a>
                    <a class="nav-link " href="./ecommerce-product-details.html">Product Details</a>
                    <a class="nav-link " href="./ecommerce-add-product.html">Add Product</a>
                </div>
              </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceOrdersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceOrdersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceOrdersMenu">
                        Orders
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceOrdersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="./ecommerce-orders.html">Orders</a>
                        <a class="nav-link " href="./ecommerce-order-details.html">Order Details</a>
                      </div>
                    </div>
                    <!-- End Collapse -->

                    <!-- Collapse -->
                    <div class="nav-item">
                      <a class="nav-link dropdown-toggle" href="#navbarVerticalMenuPagesEcommerceCustomersMenu" role="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalMenuPagesEcommerceCustomersMenu" aria-expanded="false" aria-controls="navbarVerticalMenuPagesEcommerceCustomersMenu">
                        Customers
                      </a>

                      <div id="navbarVerticalMenuPagesEcommerceCustomersMenu" class="nav-collapse collapse " data-bs-parent="#navbarVerticalMenuPagesMenuEcommerce">
                        <a class="nav-link " href="./ecommerce-customers.html">Customers</a>
                        <a class="nav-link " href="./ecommerce-customer-details.html">Customer Details</a>
                        <a class="nav-link " href="./ecommerce-add-customers.html">Add Customers</a>
                      </div>
                    </div>
                    <!-- End Collapse -->
                  </div>

                  <a class="nav-link " href="./ecommerce-referrals.html">Referrals</a>
                  <a class="nav-link " href="./ecommerce-manage-reviews.html">Manage Reviews</a>
                  <a class="nav-link " href="./ecommerce-checkout.html">Checkout</a>
                </div>
              </div>
              <!-- End Collapse -->


            {{-- <span class="dropdown-header mt-4">Apps</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small>

            <span class="dropdown-header mt-4">Layouts</span>
            <small class="bi-three-dots nav-subtitle-replacer"></small> --}}
          </div>

        </div>
        <!-- End Content -->

        <!-- Footer -->
        <div class="navbar-vertical-footer">
          <ul class="navbar-vertical-footer-list">
            <li class="navbar-vertical-footer-list-item">
              <!-- Style Switcher -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectThemeDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>

                </button>

                <div class="dropdown-menu navbar-dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectThemeDropdown">
                  <a class="dropdown-item" href="#" data-icon="bi-moon-stars" data-value="auto">
                    <i class="bi-moon-stars me-2"></i>
                    <span class="text-truncate" title="Auto (system default)">Auto (system default)</span>
                  </a>
                  <a class="dropdown-item" href="#" data-icon="bi-brightness-high" data-value="default">
                    <i class="bi-brightness-high me-2"></i>
                    <span class="text-truncate" title="Default (light mode)">Default (light mode)</span>
                  </a>
                  <a class="dropdown-item active" href="#" data-icon="bi-moon" data-value="dark">
                    <i class="bi-moon me-2"></i>
                    <span class="text-truncate" title="Dark">Dark</span>
                  </a>
                </div>
              </div>

              <!-- End Style Switcher -->
            </li>


            <li class="navbar-vertical-footer-list-item">
              <!-- Language -->
              <div class="dropdown dropup">
                <button type="button" class="btn btn-ghost-secondary btn-icon rounded-circle" id="selectLanguageDropdown" data-bs-toggle="dropdown" aria-expanded="false" data-bs-dropdown-animation>
                    @if (App::isLocale('ar'))
                        <img src="{{ asset('img/flag/KW.svg') }}" alt="Arabic"/>
                    @else
                        <img src="{{ asset('img/flag/UK.svg') }}" alt="English"/>
                    @endif
                </button>

                <div class="dropdown-menu navbar-dropdown-menu-borderless" aria-labelledby="selectLanguageDropdown">
                    <span class="dropdown-header">@lang('Select language')</span>
                    <ul class="navi navi-hover">
                            {{-- Item --}}
                            <li class="navi-item">
                                <a href="{{url('/lang/en')}}" class="navi-link @if (App::isLocale('en'))  active  @endif">
                                    <span class="mr-3 symbol symbol-20">
                                        <img src="{{ asset('img/flag/UK.svg') }}" alt="English"/>
                                    </span>
                                    <span class="navi-text">@lang('English')</span>
                                </a>
                            </li>

                            {{-- Item --}}
                            <li class="navi-item">
                                <a href="{{url('/lang/ar')}}" class="navi-link @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">
                                    <span class="mr-3 symbol symbol-20">
                                        <img src="{{ asset('img/flag/KW.svg') }}" alt="Arabic"/>
                                    </span>
                                    <span class="navi-text">@lang('Arabic')</span>
                                </a>
                            </li>
                        </ul>
                </div>
              </div>

              <!-- End Language -->
            </li>
          </ul>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </aside>

  <!-- End Navbar Vertical -->

  <main id="content" role="main" class="main">
    <!-- Content -->
    <div class="content container-fluid">
      <!-- Page Header -->
      <div class="page-header">
        <!-- End Row -->
      </div>
      <!-- End Page Header -->
            <!-- Card -->
            <div class="card card-body mb-3 mb-lg-5">
                <div class="row col-lg-divider gx-lg-6">
                  <div class="col-lg-3">
                    <!-- Media -->
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <h6 class="card-subtitle mb-3">In-store Sales</h6>
                        <h3 class="card-title">$7,820.75</h3>

                        <div class="d-flex align-items-center">
                          <span class="d-block fs-6">5k orders</span>
                          <span class="badge bg-soft-success text-success ms-2">
                            <i class="bi-graph-up"></i> 4.3%
                          </span>
                        </div>
                      </div>

                      <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                        <i class="bi-shop"></i>
                      </span>
                    </div>
                    <!-- End Media -->
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-3">
                    <!-- Media -->
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <h6 class="card-subtitle mb-3">Website Sales</h6>
                        <h3 class="card-title">$985,937.45</h3>

                        <div class="d-flex align-items-center">
                          <span class="d-block fs-6">21k orders</span>
                          <span class="badge bg-soft-success text-success ms-2">
                            <i class="bi-graph-up"></i> 12.5%
                          </span>
                        </div>
                      </div>

                      <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                        <i class="bi-layout-text-window-reverse"></i>
                      </span>
                    </div>
                    <!-- End Media -->
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-3">
                    <!-- Media -->
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <h6 class="card-subtitle mb-3">Discount</h6>
                        <h3 class="card-title">$15,503.00</h3>

                        <div class="d-flex align-items-center">
                          <span class="d-block fs-6">6k orders</span>
                        </div>
                      </div>

                      <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                        <i class="bi-percent"></i>
                      </span>
                    </div>
                    <!-- End Media -->
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-3">
                    <!-- Media -->
                    <div class="d-flex">
                      <div class="flex-grow-1">
                        <h6 class="card-subtitle mb-3">Affiliate</h6>
                        <h3 class="card-title">$3,982.53</h3>

                        <div class="d-flex align-items-center">
                          <span class="d-block fs-6">150 orders</span>
                          <span class="badge bg-soft-danger text-danger ms-2">
                            <i class="bi-graph-down"></i> 4.4%
                          </span>
                        </div>
                      </div>

                      <span class="icon icon-soft-secondary icon-sm icon-circle ms-3">
                        <i class="bi-people"></i>
                      </span>
                    </div>
                    <!-- End Media -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="card mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header card-header-content-sm-between">
                  <h4 class="card-header-title mb-2 mb-sm-0">Sales <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></h4>

                  <div class="d-grid d-sm-flex gap-2">
                    <!-- Select -->
                    <div class="tom-select-custom">
                      <select class="js-select form-select form-select-sm" autocomplete="off" data-hs-tom-select-options='{
                                "searchInDropdown": false,
                                "hideSearch": true,
                                "dropdownWidth": "10rem"
                              }'>
                        <option value="online-store">Online store</option>
                        <option value="in-store">In-store</option>
                      </select>
                    </div>
                    <!-- End Select -->

                    <!-- Daterangepicker -->
                    <button id="js-daterangepicker-predefined" class="btn btn-white btn-sm dropdown-toggle">
                      <i class="bi-calendar-week"></i>
                      <span class="js-daterangepicker-predefined-preview ms-1"></span>
                    </button>
                    <!-- End Daterangepicker -->
                  </div>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <div class="row col-lg-divider">
                    <div class="col-lg-9 mb-5 mb-lg-0">
                      <!-- Bar Chart -->
                      <div class="chartjs-custom mb-4">
                        <canvas id="ecommerce-sales" class="js-chart" style="height: 15rem;" data-hs-chartjs-options='{
                                  "type": "bar",
                                  "data": {
                                    "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM","11AM"],
                                    "datasets": [{
                                      "data": [200, 300, 290, 350, 150, 350, 300, 100, 125, 220, 200, 300, 290, 350, 150, 350, 300, 100, 125, 220, 225],
                                      "backgroundColor": "#377dff",
                                      "hoverBackgroundColor": "#377dff",
                                      "borderColor": "#377dff"
                                    },
                                    {
                                      "data": [150, 230, 382, 204, 169, 290, 300, 100, 300, 225, 120, 150, 230, 382, 204, 169, 290, 300, 100, 300, 140],
                                      "backgroundColor": "#e7eaf3",
                                      "borderColor": "#e7eaf3"
                                    }]
                                  },
                                  "options": {
                                    "scales": {
                                      "yAxes": [{
                                        "gridLines": {
                                          "color": "#e7eaf3",
                                          "drawBorder": false,
                                          "zeroLineColor": "#e7eaf3"
                                        },
                                        "ticks": {
                                          "beginAtZero": true,
                                          "stepSize": 100,
                                          "fontSize": 12,
                                          "fontColor": "#97a4af",
                                          "fontFamily": "Open Sans, sans-serif",
                                          "padding": 10
                                        }
                                      }],
                                      "xAxes": [{
                                        "gridLines": {
                                          "display": false,
                                          "drawBorder": false
                                        },
                                        "ticks": {
                                          "fontSize": 12,
                                          "fontColor": "#97a4af",
                                          "fontFamily": "Open Sans, sans-serif",
                                          "padding": 5
                                        },
                                        "categoryPercentage": 0.5,
                                        "maxBarThickness": "10"
                                      }]
                                    },
                                    "cornerRadius": 2,
                                    "tooltips": {
                                      "hasIndicator": true,
                                      "mode": "index",
                                      "intersect": false
                                    },
                                    "hover": {
                                      "mode": "nearest",
                                      "intersect": true
                                    }
                                  }
                                }'></canvas>
                      </div>
                      <!-- End Bar Chart -->

                      <div class="row justify-content-center">
                        <div class="col-auto">
                          <span class="legend-indicator"></span> Revenue
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <span class="legend-indicator bg-primary"></span> Orders
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>

                    <div class="col-lg-3">
                      <div class="row">
                        <div class="col-sm-6 col-lg-12">
                          <!-- Stats -->
                          <div class="d-flex justify-content-center flex-column" style="min-height: 9rem;">
                            <h6 class="card-subtitle">Revenue</h6>
                            <span class="d-block display-4 text-dark mb-1 me-3">$97,458.20</span>
                            <span class="d-block text-success">
                              <i class="bi-graph-up me-1"></i> $2,401.02 (3.7%)
                            </span>
                          </div>
                          <!-- End Stats -->

                          <hr class="d-none d-lg-block my-0">
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-6 col-lg-12">
                          <!-- Stats -->
                          <div class="d-flex justify-content-center flex-column" style="min-height: 9rem;">
                            <h6 class="card-subtitle">Orders</h6>
                            <span class="d-block display-4 text-dark mb-1 me-3">67,893</span>
                            <span class="d-block text-danger">
                              <i class="bi-graph-down me-1"></i> +3,301 (1.2%)
                            </span>
                          </div>
                          <!-- End Stats -->
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Body -->
              </div>
              <!-- End Card -->

              <div class="row">
                <div class="col-lg-4 mb-3 mb-lg-5">
                  <div class="d-grid gap-2 gap-lg-4">
                    <!-- Card -->
                    <a class="card card-hover-shadow" href="#">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations/oc-megaphone.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                            <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations-light/oc-megaphone.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                          </div>

                          <div class="flex-grow-1 ms-4">
                            <h3 class="text-inherit mb-1">Product</h3>
                            <span class="text-body">Create a new product</span>
                          </div>

                          <div class="ms-2 text-end">
                            <i class="bi-chevron-right text-body text-inherit"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="card card-hover-shadow" href="#">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations/oc-collection.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                            <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations-light/oc-collection.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                          </div>

                          <div class="flex-grow-1 ms-4">
                            <h3 class="text-inherit mb-1">Collection</h3>
                            <span class="text-body">Create a new collection</span>
                          </div>

                          <div class="ms-2 text-end">
                            <i class="bi-chevron-right text-body text-inherit"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="card card-hover-shadow" href="#">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations/oc-discount.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                            <img class="avatar avatar-lg avatar-4x3" src="./assets/svg/illustrations-light/oc-discount.svg" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                          </div>

                          <div class="flex-grow-1 ms-4">
                            <h3 class="text-inherit mb-1">Discount</h3>
                            <span class="text-body">Create a new discount</span>
                          </div>

                          <div class="ms-2 text-end">
                            <i class="bi-chevron-right text-body text-inherit"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                    <!-- End Card -->
                  </div>
                </div>
                <!-- End Col -->

                <div class="col-lg-8 mb-3 mb-lg-5">
                  <!-- Card -->
                  <div class="card h-100">
                    <!-- Header -->
                    <div class="card-header card-header-content-between">
                      <h4 class="card-header-title">Top products</h4>

                      <a class="btn btn-ghost-secondary btn-sm" href="#">View all</a>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body-height">
                      <!-- Table -->
                      <div class="table-responsive">
                        <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">Item</th>
                              <th scope="col">Change</th>
                              <th scope="col">Price</th>
                              <th scope="col">Sold</th>
                              <th scope="col">Sales</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>
                                <!-- Media -->
                                <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                                  <div class="flex-shrink-0">
                                    <img class="avatar" src="./assets/img/400x400/img4.jpg" alt="Image Description">
                                  </div>

                                  <div class="flex-grow-1 ms-3">
                                    <h5 class="text-inherit mb-0">Photive wireless speakers</h5>
                                  </div>
                                </a>
                                <!-- End Media -->
                              </td>
                              <td><i class="bi-graph-down text-danger me-1"></i> 72%</td>
                              <td>$65</td>
                              <td>7,545</td>
                              <td>
                                <h4 class="mb-0">$15,302.00</h4>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <!-- Media -->
                                <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                                  <div class="flex-shrink-0">
                                    <img class="avatar" src="./assets/img/400x400/img26.jpg" alt="Image Description">
                                  </div>

                                  <div class="flex-grow-1 ms-3">
                                    <h5 class="text-inherit mb-0">Topman shoe in green</h5>
                                  </div>
                                </a>
                                <!-- End Media -->
                              </td>
                              <td><i class="bi-graph-up text-success me-1"></i> 69%</td>
                              <td>$21</td>
                              <td>6,643</td>
                              <td>
                                <h4 class="mb-0">$12,492.21</h4>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <!-- Media -->
                                <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                                  <div class="flex-shrink-0">
                                    <img class="avatar" src="./assets/img/400x400/img25.jpg" alt="Image Description">
                                  </div>

                                  <div class="flex-grow-1 ms-3">
                                    <h5 class="text-inherit mb-0">RayBan black sunglasses</h5>
                                  </div>
                                </a>
                                <!-- End Media -->
                              </td>
                              <td><i class="bi-graph-down text-danger me-1"></i> 65%</td>
                              <td>$37</td>
                              <td>5,951</td>
                              <td>
                                <h4 class="mb-0">$10,351.71</h4>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <!-- Media -->
                                <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                                  <div class="flex-shrink-0">
                                    <img class="avatar" src="./assets/img/400x400/img6.jpg" alt="Image Description">
                                  </div>

                                  <div class="flex-grow-1 ms-3">
                                    <h5 class="text-inherit mb-0">Mango Women's shoe</h5>
                                  </div>
                                </a>
                                <!-- End Media -->
                              </td>
                              <td><i class="bi-graph-down text-danger me-1"></i> 53%</td>
                              <td>$65</td>
                              <td>5,002</td>
                              <td>
                                <h4 class="mb-0">$9,917.45</h4>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <!-- Media -->
                                <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                                  <div class="flex-shrink-0">
                                    <img class="avatar" src="./assets/img/400x400/img3.jpg" alt="Image Description">
                                  </div>

                                  <div class="flex-grow-1 ms-3">
                                    <h5 class="text-inherit mb-0">Calvin Klein t-shirts</h5>
                                  </div>
                                </a>
                                <!-- End Media -->
                              </td>
                              <td><i class="bi-graph-up text-success me-1"></i> 50%</td>
                              <td>$89</td>
                              <td>4,714</td>
                              <td>
                                <h4 class="mb-0">$8,466.02</h4>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <!-- Media -->
                                <a class="d-flex align-items-center" href="./ecommerce-product-details.html">
                                  <div class="flex-shrink-0">
                                    <img class="avatar" src="./assets/img/400x400/img5.jpg" alt="Image Description">
                                  </div>

                                  <div class="flex-grow-1 ms-3">
                                    <h5 class="text-inherit mb-0">Givenchy perfume</h5>
                                  </div>
                                </a>
                                <!-- End Media -->
                              </td>
                              <td><i class="bi-graph-up text-success me-1"></i> 50%</td>
                              <td>$99</td>
                              <td>4,155</td>
                              <td>
                                <h4 class="mb-0">$7,715.89</h4>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- End Table -->
                    </div>
                    <!-- End Body -->
                  </div>
                  <!-- End Card -->
                </div>
                <!-- End Col -->
              </div>
              <!-- End Row -->

              <!-- Card -->
              <div id="cardFullScreenEg" class="card overflow-hidden mb-3 mb-lg-5">
                <!-- Header -->
                <div class="card-header card-header-content-between">
                  <h4 class="card-header-title">Your top countries <i class="bi-patch-check-fill text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="This report is based on 100% of sessions."></i></h4>

                  <a class="btn btn-ghost-secondary btn-sm" href="#">View all</a>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <div class="row col-sm-divider">
                    <div class="col-sm-3">
                      <!-- Stats -->
                      <div class="d-lg-flex align-items-lg-center">
                        <div class="flex-shrink-0">
                          <i class="bi-person fs-1"></i>
                        </div>

                        <div class="flex-grow-1 ms-lg-3">
                          <span class="d-block fs-6">Users</span>
                          <div class="d-flex align-items-center">
                            <h3 class="mb-0">34,413</h3>
                            <span class="badge bg-soft-success text-success ms-2">
                              <i class="bi-graph-up"></i> 12.5%
                            </span>
                          </div>
                        </div>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm-3">
                      <!-- Stats -->
                      <div class="d-lg-flex align-items-lg-center">
                        <div class="flex-shrink-0">
                          <i class="bi-clock-history fs-1"></i>
                        </div>

                        <div class="flex-grow-1 ms-lg-3">
                          <span class="d-block fs-6">Avg. session duration</span>
                          <div class="d-flex align-items-center">
                            <h3 class="mb-0">1m 3s</h3>
                          </div>
                        </div>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm-3">
                      <!-- Stats -->
                      <div class="d-lg-flex align-items-lg-center">
                        <div class="flex-shrink-0">
                          <i class="bi-files-alt fs-1"></i>
                        </div>

                        <div class="flex-grow-1 ms-lg-3">
                          <span class="d-block fs-6">Pages/Sessions</span>
                          <div class="d-flex align-items-center">
                            <h3 class="mb-0">1.78</h3>
                          </div>
                        </div>
                      </div>
                      <!-- End Stats -->
                    </div>

                    <div class="col-sm-3">
                      <!-- Stats -->
                      <div class="d-lg-flex align-items-lg-center">
                        <div class="flex-shrink-0">
                          <i class="bi-pie-chart fs-1"></i>
                        </div>

                        <div class="flex-grow-1 ms-lg-3">
                          <span class="d-block fs-6">Bounce rate</span>
                          <div class="d-flex align-items-center">
                            <h3 class="mb-0">62.9%</h3>
                          </div>
                        </div>
                      </div>
                      <!-- End Stats -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Body -->

                <hr class="my-0">

                <!-- Body -->
                <div class="card-body">
                  <div class="row no-gutters">
                    <div class="col-lg-7">
                      <!-- JSVector Map -->
                      <div style="height: 20.5rem;">
                        <div class="js-jsvectormap jsvectormap-custom" data-hs-js-vector-map-options='{
                              "regionStyle": {
                                "initial": {
                                  "fill": "#bdc5d1"
                                },
                                "hover": {
                                  "fill": "#77838f"
                                }
                              },
                              "markerStyle": {
                                "initial": {
                                  "stroke-width": 2,
                                  "fill": "#377dff",
                                  "stroke": "#fff",
                                  "stroke-opacity": 1,
                                  "r": 6
                                },
                                "hover": {
                                  "fill": "#377dff",
                                  "stroke": "#377dff"
                                }
                              }
                                                }'>
                        </div>
                      </div>
                      <!-- End JSVector Map -->
                    </div>
                    <!-- End Col -->

                    <div class="col-lg-5">
                      <!-- Table -->
                      <div class="table-responsive">
                        <table class="table table-lg table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                          <thead>
                            <tr>
                              <th class="border-top-0">Country</th>
                              <th class="border-top-0">Visits</th>
                              <th class="border-top-0">Purchases</th>
                              <th class="border-top-0">Change</th>
                            </tr>
                          </thead>

                          <tbody>
                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="flex-shrink-0">
                                    <img class="avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/us.svg" alt="Image description" />
                                  </div>
                                  <div class="flex-grow-1 ms-2">USA</div>
                                </div>
                              </td>
                              <td>10,013</td>
                              <td>$5,361</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  73.2% <i class="bi-graph-up text-success ms-1"></i>
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="flex-shrink-0">
                                    <img class="avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/in.svg" alt="Image description" />
                                  </div>
                                  <div class="flex-grow-1 ms-2">India</div>
                                </div>
                              </td>
                              <td>8,545</td>
                              <td>$4,923</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  45.8% <i class="bi-graph-down text-danger ms-1"></i>
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="flex-shrink-0">
                                    <img class="avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/ca.svg" alt="Image description" />
                                  </div>
                                  <div class="flex-grow-1 ms-2">Canada</div>
                                </div>
                              </td>
                              <td>6,837</td>
                              <td>$3,954</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  24.4% <i class="bi-graph-up text-success ms-1"></i>
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="flex-shrink-0">
                                    <img class="avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/de.svg" alt="Image description" />
                                  </div>
                                  <div class="flex-grow-1 ms-2">Germany</div>
                                </div>
                              </td>
                              <td>4,512</td>
                              <td>$2,512</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  12.8% <i class="bi-graph-up text-success ms-1"></i>
                                </div>
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <div class="d-flex align-items-center">
                                  <div class="flex-shrink-0">
                                    <img class="avatar-xss avatar-circle" src="./assets/vendor/flag-icon-css/flags/1x1/gb.svg" alt="Image description" />
                                  </div>
                                  <div class="flex-grow-1 ms-2">UK</div>
                                </div>
                              </td>
                              <td>3,795</td>
                              <td>$1,173</td>
                              <td>
                                <div class="d-flex align-items-center">
                                  67.9% <i class="bi-graph-down text-danger ms-1"></i>
                                </div>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                      <!-- End Table -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </div>
                <!-- End Body -->
              </div>
              <!-- End Card -->

              <!-- Card -->
              <div class="card">
                <div class="row col-lg-divider">
                  <div class="col-lg-6">
                    <!-- Body -->
                    <div class="card-body">
                      <h4>Total sales <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="Net sales (gross sales minus discounts and returns) plus taxes and shipping. Includes orders from all sales channels."></i></h4>

                      <div class="row align-items-sm-center mt-4 mt-sm-0 mb-5">
                        <div class="col-sm mb-3 mb-sm-0">
                          <span class="display-5 text-dark me-2">$597,820.75</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                          <span class="h3 text-success">
                            <i class="bi-graph-up"></i> 25.9%
                          </span>
                          <span class="d-block">&mdash; 1,347,935 orders <span class="badge bg-soft-dark text-dark rounded-pill ms-1">+$97k today</span></span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Bar Chart -->
                      <div class="chartjs-custom mb-4" style="height: 18rem;">
                        <canvas id="ecommerce-overview-1" class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                                     "datasets": [{
                                      "data": [200, 200, 240, 350, 200, 350, 200, 250, 285, 220],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#377dff",
                                      "pointBackgroundColor": "#377dff",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    },
                                    {
                                      "data": [150, 230, 382, 204, 269, 290, 200, 250, 200, 225],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#e7eaf3",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#e7eaf3",
                                      "pointBackgroundColor": "#e7eaf3",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                        "yAxes": [{
                                          "gridLines": {
                                            "color": "#e7eaf3",
                                            "drawBorder": false,
                                            "zeroLineColor": "#e7eaf3"
                                          },
                                          "ticks": {
                                            "beginAtZero": true,
                                            "stepSize": 100,
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 10,
                                            "prefix": "$",
                                            "postfix": "k"
                                          }
                                        }],
                                        "xAxes": [{
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          },
                                          "ticks": {
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 5
                                          }
                                        }]
                                    },
                                    "tooltips": {
                                      "prefix": "$",
                                      "postfix": "k",
                                      "hasIndicator": true,
                                      "mode": "index",
                                      "intersect": false,
                                      "lineMode": true,
                                      "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                                    },
                                    "hover": {
                                      "mode": "nearest",
                                      "intersect": true
                                    }
                                  }
                                }'>
                        </canvas>
                      </div>
                      <!-- End Bar Chart -->

                      <!-- Legend Indicators -->
                      <div class="row justify-content-center">
                        <div class="col-auto">
                          <span class="legend-indicator"></span> Yesterday
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <span class="legend-indicator bg-primary"></span> Today
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Legend Indicators -->
                    </div>
                    <!-- End Body -->
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-6">
                    <!-- Body -->
                    <div class="card-body">
                      <h4>Visitors</h4>

                      <div class="row align-items-sm-center mt-4 mt-sm-0 mb-5">
                        <div class="col-sm mb-3 mb-sm-0">
                          <span class="display-5 text-dark me-2">831,071</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                          <span class="h3 text-danger">
                            <i class="bi-graph-down"></i> 16%
                          </span>
                          <span class="d-block">&mdash; 467,001 unique <span class="badge bg-soft-dark text-dark rounded-pill ms-1">+7k today</span></span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Bar Chart -->
                      <div class="chartjs-custom mb-4" style="height: 18rem;">
                        <canvas id="ecommerce-overview-2" class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                                     "datasets": [{
                                      "data": [20, 20, 24, 15, 30, 35, 20, 28, 18, 16],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#377dff",
                                      "pointBackgroundColor": "#377dff",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    },
                                    {
                                      "data": [15, 23, 18, 20, 36, 29, 20, 22, 20, 22],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#e7eaf3",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#e7eaf3",
                                      "pointBackgroundColor": "#e7eaf3",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                        "yAxes": [{
                                          "gridLines": {
                                            "color": "#e7eaf3",
                                            "drawBorder": false,
                                            "zeroLineColor": "#e7eaf3"
                                          },
                                          "ticks": {
                                            "beginAtZero": true,
                                            "stepSize": 10,
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 10,
                                            "postfix": "k"
                                          }
                                        }],
                                        "xAxes": [{
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          },
                                          "ticks": {
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 5
                                          }
                                        }]
                                    },
                                    "tooltips": {
                                      "postfix": "k",
                                      "hasIndicator": true,
                                      "mode": "index",
                                      "intersect": false,
                                      "lineMode": true,
                                      "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                                    },
                                    "hover": {
                                      "mode": "nearest",
                                      "intersect": true
                                    }
                                  }
                                }'>
                        </canvas>
                      </div>
                      <!-- End Bar Chart -->

                      <!-- Legend Indicators -->
                      <div class="row justify-content-center">
                        <div class="col-auto">
                          <span class="legend-indicator"></span> Yesterday
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <span class="legend-indicator bg-primary"></span> Today
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Legend Indicators -->
                    </div>
                    <!-- End Body -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->

                <hr>

                <div class="row col-lg-divider">
                  <div class="col-lg-6">
                    <!-- Body -->
                    <div class="card-body">
                      <h4>Total orders</h4>

                      <div class="row align-items-sm-center mt-4 mt-sm-0 mb-5">
                        <div class="col-sm mb-3 mb-sm-0">
                          <span class="display-5 text-dark me-2">1,348,935</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                          <span class="h3 text-success">
                            <i class="bi-graph-up"></i> 4.7%
                          </span>
                          <span class="d-block">&mdash; orders over time <span class="badge bg-soft-dark text-dark rounded-pill ms-1">+5k today</span></span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Bar Chart -->
                      <div class="chartjs-custom mb-4" style="height: 18rem;">
                        <canvas id="ecommerce-overview-3" class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                                     "datasets": [{
                                      "data": [15, 26, 29, 20, 23, 38, 20, 30, 20, 22],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#377dff",
                                      "pointBackgroundColor": "#377dff",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    },
                                    {
                                      "data": [20, 20, 15, 18, 20, 24, 35, 20, 35, 22],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#e7eaf3",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#e7eaf3",
                                      "pointBackgroundColor": "#e7eaf3",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                        "yAxes": [{
                                          "gridLines": {
                                            "color": "#e7eaf3",
                                            "drawBorder": false,
                                            "zeroLineColor": "#e7eaf3"
                                          },
                                          "ticks": {
                                            "beginAtZero": true,
                                            "stepSize": 10,
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 10,
                                            "postfix": "k"
                                          }
                                        }],
                                        "xAxes": [{
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          },
                                          "ticks": {
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 5
                                          }
                                        }]
                                    },
                                    "tooltips": {
                                      "postfix": "k",
                                      "hasIndicator": true,
                                      "mode": "index",
                                      "intersect": false,
                                      "lineMode": true,
                                      "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                                    },
                                    "hover": {
                                      "mode": "nearest",
                                      "intersect": true
                                    }
                                  }
                                }'>
                        </canvas>
                      </div>
                      <!-- End Bar Chart -->

                      <!-- Legend Indicators -->
                      <div class="row justify-content-center">
                        <div class="col-auto">
                          <span class="legend-indicator"></span> Yesterday
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <span class="legend-indicator bg-primary"></span> Today
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Legend Indicators -->
                    </div>
                    <!-- End Body -->
                  </div>
                  <!-- End Col -->

                  <div class="col-lg-6">
                    <!-- Body -->
                    <div class="card-body">
                      <h4>Refunded</h4>

                      <div class="row align-items-sm-center mt-4 mt-sm-0 mb-5">
                        <div class="col-sm mb-3 mb-sm-0">
                          <span class="display-5 text-dark me-2">52,441</span>
                        </div>
                        <!-- End Col -->

                        <div class="col-sm-auto">
                          <span class="h3 text-success">
                            <i class="bi-graph-up"></i> 11%
                          </span>
                          <span class="d-block">&mdash; refunds over time <span class="badge bg-soft-dark text-dark rounded-pill ms-1">+21 today</span></span>
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Row -->

                      <!-- Bar Chart -->
                      <div class="chartjs-custom mb-4" style="height: 18rem;">
                        <canvas id="ecommerce-overview-4" class="js-chart" data-hs-chartjs-options='{
                                  "type": "line",
                                  "data": {
                                     "labels": ["1AM","2AM","3AM","4AM","5AM","6AM","7AM","8AM","9AM","10AM"],
                                     "datasets": [{
                                      "data": [10, 20, 22, 15, 20, 15, 20, 19, 14, 15],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#377dff",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#377dff",
                                      "pointBackgroundColor": "#377dff",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    },
                                    {
                                      "data": [15, 13, 18, 10, 16, 19, 15, 14, 10, 26],
                                      "backgroundColor": "transparent",
                                      "borderColor": "#e7eaf3",
                                      "borderWidth": 2,
                                      "pointRadius": 0,
                                      "hoverBorderColor": "#e7eaf3",
                                      "pointBackgroundColor": "#e7eaf3",
                                      "pointBorderColor": "#fff",
                                      "pointHoverRadius": 0
                                    }]
                                  },
                                  "options": {
                                     "scales": {
                                        "yAxes": [{
                                          "gridLines": {
                                            "color": "#e7eaf3",
                                            "drawBorder": false,
                                            "zeroLineColor": "#e7eaf3"
                                          },
                                          "ticks": {
                                            "beginAtZero": true,
                                            "stepSize": 10,
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 10
                                          }
                                        }],
                                        "xAxes": [{
                                          "gridLines": {
                                            "display": false,
                                            "drawBorder": false
                                          },
                                          "ticks": {
                                            "fontSize": 12,
                                            "fontColor": "#97a4af",
                                            "fontFamily": "Open Sans, sans-serif",
                                            "padding": 5
                                          }
                                        }]
                                    },
                                    "tooltips": {
                                      "hasIndicator": true,
                                      "mode": "index",
                                      "intersect": false,
                                      "lineMode": true,
                                      "lineWithLineColor": "rgba(19, 33, 68, 0.075)"
                                    },
                                    "hover": {
                                      "mode": "nearest",
                                      "intersect": true
                                    }
                                  }
                                }'>
                        </canvas>
                      </div>
                      <!-- End Bar Chart -->

                      <!-- Legend Indicators -->
                      <div class="row justify-content-center">
                        <div class="col-auto">
                          <span class="legend-indicator"></span> Yesterday
                        </div>
                        <!-- End Col -->

                        <div class="col-auto">
                          <span class="legend-indicator bg-primary"></span> Today
                        </div>
                        <!-- End Col -->
                      </div>
                      <!-- End Legend Indicators -->
                    </div>
                    <!-- End Body -->
                  </div>
                  <!-- End Col -->
                </div>
                <!-- End Row -->
              </div>
              <!-- End Card -->
    </div>
    <!-- End Content -->

    <!-- Footer -->

    <div class="footer">
      <div class="row justify-content-between align-items-center">
        <div class="col">
          <p class="fs-6 mb-0">&copy; Front. <span class="d-none d-sm-inline-block">2022 Htmlstream.</span></p>
        </div>
        <!-- End Col -->

        <div class="col-auto">
          <div class="d-flex justify-content-end">
            <!-- List Separator -->
            <ul class="list-inline list-separator">
              <li class="list-inline-item">
                <a class="list-separator-link" href="#">FAQ</a>
              </li>

              <li class="list-inline-item">
                <a class="list-separator-link" href="#">License</a>
              </li>

              <li class="list-inline-item">
                <!-- Keyboard Shortcuts Toggle -->
                <button class="btn btn-ghost-secondary btn btn-icon btn-ghost-secondary rounded-circle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasKeyboardShortcuts" aria-controls="offcanvasKeyboardShortcuts">
                  <i class="bi-command"></i>
                </button>
                <!-- End Keyboard Shortcuts Toggle -->
              </li>
            </ul>
            <!-- End List Separator -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>

    <!-- End Footer -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->

  <!-- Keyboard Shortcuts -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasKeyboardShortcuts" aria-labelledby="offcanvasKeyboardShortcutsLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasKeyboardShortcutsLabel" class="mb-0">Keyboard shortcuts</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Formatting</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="fw-semi-bold">Bold</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">b</kbd>
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <em>italic</em>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">i</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <u>Underline</u>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">u</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <s>Strikethrough</s>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
              <!-- End Col -->
            </div>
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span class="small">Small text</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <mark>Highlight</mark>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">e</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Insert</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Mention person <a href="#">(@Brian)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">@</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Link to doc <a href="#">(+Meeting notes)</a></span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">+</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <a href="#">#hashtag</a>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">#hashtag</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Date</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/date</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">/datetime</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Time</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/time</kbd>
              <kbd class="d-inline-block mb-1">Space</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Note box</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">/note</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">/note red</kbd>
              <kbd class="d-inline-block mb-1">Enter</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters mb-5">
        <div class="list-group-item">
          <h5 class="mb-1">Editing</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find and replace</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">r</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find next</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Find previous</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Un-indent</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Tab</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line up</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-up-short"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Move line down</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1"><i class="bi-arrow-down-short fs-5"></i></kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Add a comment</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">m</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Undo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">z</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Redo</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">y</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>

      <div class="list-group list-group-sm list-group-flush list-group-no-gutters">
        <div class="list-group-item">
          <h5 class="mb-1">Application</h5>
        </div>
        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Create new doc</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Alt</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">n</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Present</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">p</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Share</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">s</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Search docs</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">o</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

        <div class="list-group-item">
          <div class="row align-items-center">
            <div class="col-5">
              <span>Keyboard shortcuts</span>
            </div>
            <!-- End Col -->

            <div class="col-7 text-end">
              <kbd class="d-inline-block mb-1">Ctrl</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">Shift</kbd> <span class="text-muted small">+</span> <kbd class="d-inline-block mb-1">/</kbd>
            </div>
            <!-- End Col -->
          </div>
          <!-- End Row -->
        </div>

      </div>
    </div>
  </div>
  <!-- End Keyboard Shortcuts -->

  <!-- Activity -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasActivityStream" aria-labelledby="offcanvasActivityStreamLabel">
    <div class="offcanvas-header">
      <h4 id="offcanvasActivityStreamLabel" class="mb-0">Activity stream</h4>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <!-- Step -->
      <ul class="step step-icon-sm step-avatar-sm">
        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar" src="./assets/img/160x160/img9.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Iana Robinson</h5>

              <p class="fs-5 mb-1">Added 2 files to task <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fd-7</a></p>

              <ul class="list-group list-group-sm">
                <!-- List Item -->
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/excel-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">12kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->

                    <div class="col-6">
                      <!-- Media -->
                      <div class="d-flex">
                        <div class="flex-shrink-0">
                          <img class="avatar avatar-xs" src="./assets/svg/brands/word-icon.svg" alt="Image Description">
                        </div>
                        <div class="flex-grow-1 text-truncate ms-2">
                          <span class="d-block fs-6 text-dark text-truncate" title="weekly-reports.xls">weekly-reports.xls</span>
                          <span class="d-block small text-muted">4kb</span>
                        </div>
                      </div>
                      <!-- End Media -->
                    </div>
                    <!-- End Col -->
                  </div>
                  <!-- End Row -->
                </li>
                <!-- End List Item -->
              </ul>

              <span class="small text-muted text-uppercase">Now</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-dark">B</span>

            <div class="step-content">
              <h5 class="mb-1">Bob Dean</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-6</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Today</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="h5 mb-1">Crane</h5>

              <p class="fs-5 mb-1">Added 5 card to <a href="#">Payments</a></p>

              <ul class="list-group list-group-sm">
                <li class="list-group-item list-group-item-light">
                  <div class="row gx-1">
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-1.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-2.svg" alt="Image Description">
                    </div>
                    <div class="col">
                      <img class="img-fluid rounded" src="./assets/svg/components/card-3.svg" alt="Image Description">
                    </div>
                    <div class="col-auto align-self-center">
                      <div class="text-center">
                        <a href="#">+2</a>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>

              <span class="small text-muted text-uppercase">May 12</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-info">D</span>

            <div class="step-content">
              <h5 class="mb-1">David Lidell</h5>

              <p class="fs-5 mb-1">Added a new member to Front Dashboard</p>

              <span class="small text-muted text-uppercase">May 15</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img7.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Rachel King</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-success text-success rounded-pill"><span class="legend-indicator bg-success"></span>"Completed"</span></p>

              <span class="small text-muted text-uppercase">Apr 29</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <div class="step-avatar">
              <img class="step-avatar-img" src="./assets/img/160x160/img5.jpg" alt="Image Description">
            </div>

            <div class="step-content">
              <h5 class="mb-1">Finch Hoot</h5>

              <p class="fs-5 mb-1">Earned a "Top endorsed" <i class="bi-patch-check-fill text-primary"></i> badge</p>

              <span class="small text-muted text-uppercase">Apr 06</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->

        <!-- Step Item -->
        <li class="step-item">
          <div class="step-content-wrapper">
            <span class="step-icon step-icon-soft-primary">
              <i class="bi-person-fill"></i>
            </span>

            <div class="step-content">
              <h5 class="mb-1">Project status updated</h5>

              <p class="fs-5 mb-1">Marked <a class="text-uppercase" href="#"><i class="bi-journal-bookmark-fill"></i> Fr-3</a> as <span class="badge bg-soft-primary text-primary rounded-pill"><span class="legend-indicator bg-primary"></span>"In progress"</span></p>

              <span class="small text-muted text-uppercase">Feb 10</span>
            </div>
          </div>
        </li>
        <!-- End Step Item -->
      </ul>
      <!-- End Step -->

      <div class="d-grid">
        <a class="btn btn-white" href="javascript:;">View all <i class="bi-chevron-right"></i></a>
      </div>
    </div>
  </div>
  <!-- End Activity -->

  <!-- Welcome Message Modal -->
  <div class="modal fade" id="welcomeMessageModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-ghost-secondary btn-icon btn-sm" data-bs-dismiss="modal" aria-label="Close">
            <i class="bi-x-lg"></i>
          </button>
        </div>
        <!-- End Header -->

        <!-- Body -->
        <div class="modal-body p-sm-5">
          <div class="text-center">
            <div class="w-75 w-sm-50 mx-auto mb-4">
              <img class="img-fluid" src="./assets/svg/illustrations/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="default">
              <img class="img-fluid" src="./assets/svg/illustrations-light/oc-collaboration.svg" alt="Image Description" data-hs-theme-appearance="dark">
            </div>

            <h4 class="h1">Welcome to Front</h4>

            <p>We're happy to see you in our community.</p>
          </div>
        </div>
        <!-- End Body -->

        <!-- Footer -->
        <div class="modal-footer d-block text-center py-sm-5">
          <small class="text-cap text-muted">Trusted by the world's best teams</small>

          <div class="w-85 mx-auto">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="./assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>

  <!-- End Welcome Message Modal -->

  <!-- Create a new user Modal -->
  <div class="modal fade" id="inviteUserModal" tabindex="-1" aria-labelledby="inviteUserModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title" id="inviteUserModalLabel">Invite users</h4>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <!-- Body -->
        <div class="modal-body">
          <!-- Form -->
          <div class="mb-4">
            <div class="input-group mb-2 mb-sm-0">
              <input type="text" class="form-control" name="fullName" placeholder="Search name or emails" aria-label="Search name or emails">

              <div class="input-group-append input-group-append-last-sm-down-none">
                <!-- Select -->
                <div class="tom-select-custom tom-select-custom-end">
                  <select class="js-select form-select" autocomplete="off" data-hs-tom-select-options='{
                            "searchInDropdown": false,
                            "hideSearch": true,
                            "dropdownWidth": "11rem"
                          }'>
                    <option value="guest" selected>Guest</option>
                    <option value="can edit">Can edit</option>
                    <option value="can comment">Can comment</option>
                    <option value="full access">Full access</option>
                  </select>
                </div>
                <!-- End Select -->

                <a class="btn btn-primary d-none d-sm-inline-block" href="javascript:;">Invite</a>
              </div>
            </div>

            <a class="btn btn-primary w-100 d-sm-none" href="javascript:;">Invite</a>
          </div>
          <!-- End Form -->

          <div class="row">
            <h5 class="col modal-title">Invite users</h5>

            <div class="col-auto">
              <a class="d-flex align-items-center small text-body" href="#">
                <img class="avatar avatar-xss avatar-4x3 me-2" src="./assets/svg/brands/gmail-icon.svg" alt="Image Description">
                Import contacts
              </a>
            </div>
          </div>

          <hr class="mt-2">

          <ul class="list-unstyled list-py-2 mb-0">
            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img10.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Amanda Harvey <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">amanda@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img3.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">David Harrison</h5>
                      <span class="d-block small">david@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-circle">
                    <img class="avatar-img" src="./assets/img/160x160/img9.jpg" alt="Image Description">
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Ella Lauda <i class="bi-patch-check-fill text-primary" data-toggle="tooltip" data-placement="top" title="Top endorsed"></i></h5>
                      <span class="d-block small">Markvt@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->

            <!-- List Group Item -->
            <li>
              <div class="d-flex">
                <div class="flex-shrink-0">
                  <div class="avatar avatar-sm avatar-soft-dark avatar-circle">
                    <span class="avatar-initials">B</span>
                  </div>
                </div>

                <div class="flex-grow-1 ms-3">
                  <div class="row align-items-center">
                    <div class="col-sm">
                      <h5 class="mb-0">Bob Dean</h5>
                      <span class="d-block small">bob@site.com</span>
                    </div>

                    <div class="col-sm-auto">
                      <!-- Select -->
                      <div class="tom-select-custom tom-select-custom-sm-end">
                        <select class="js-select form-select form-select-borderless tom-select-custom-form-select-invite-user tom-select-form-select-ps-0" autocomplete="off" data-hs-tom-select-options='{
                                  "searchInDropdown": false,
                                  "hideSearch": true,
                                  "dropdownWidth": "11rem"
                                }'>
                          <option value="guest" selected>Guest</option>
                          <option value="can edit">Can edit</option>
                          <option value="can comment">Can comment</option>
                          <option value="full access">Full access</option>
                          <option value="remove" data-option-template='<div class="text-danger">Remove</div>'>Remove</option>
                        </select>
                      </div>
                      <!-- End Select -->
                    </div>
                  </div>
                  <!-- End Row -->
                </div>
              </div>
            </li>
            <!-- End List Group Item -->
          </ul>
        </div>
        <!-- End Body -->


      </div>
    </div>
  </div>
  <!-- End Create a new user Modal -->
@endsection

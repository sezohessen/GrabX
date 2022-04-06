@extends('dashboard.layouts.app')

@section('content')
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
                        <h6 class="card-subtitle mb-3">@lang('Total sales')</h6>
                        <h3 class="card-title">
                            <i class="bi bi-cash-coin"></i>
                             {{ number_format($totalOrderPrice, 0, '.', ',') }}
                        </h3>
                        <div class="d-flex align-items-center">
                          <span class="d-block fs-6" style="margin: 0 2px"> @lang('Monthly profit') </span>
                          {{-- If data exist --}}
                          @if($IsSeeded != null)
                            @if($weekly >= $previousMonthly)
                                <span class="badge bg-soft-success text-success ms-2">
                                    <i class="bi-graph-up"></i>  ({{ $percent }}%)
                                </span>
                            @else
                                <span class="badge bg-soft-danger text-danger ms-2">
                                    <i class="bi-graph-down"></i> ({{ $percent }}%)
                                </span>
                            @endif
                          @endif
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
                        <h6 class="card-subtitle mb-3"> @lang('Products amount') </h6>
                        <h3 class="card-title"> {{ $products->count() }} </h3>

                        <div class="d-flex align-items-center">
                          <span class="d-block fs-6"> @lang('Sold products') {{ $soldProducts->count() }} </span>
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
                        <h6 class="card-subtitle mb-3"> @lang('Most used code') </h6>
                        <h3 class="card-title">
                            [{{ isset($maxCode->code) ? $maxCode->code : __('No promo code exists') }}] @lang('Used')  {{ number_format($mostPromoCodeUsed, 0, '.', ',') }} @lang('Times')
                        </h3>

                        <div class="d-flex align-items-center">
                          <span class="d-block fs-6"> {{ number_format($promoCodeUsage, 0, '.', ',') }} @lang('Promo code used')</span>
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
                        <h6 class="card-subtitle mb-3"> @lang('Canceled orders') </h6>
                        <h3 class="card-title"> {{ $canceldOrders->count() }} </h3>

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
              {{-- Sales chart --}}
              @livewire('sales-chart')

              <div class="row">
                <div class="col-lg-4 mb-3 mb-lg-5">
                  <div class="d-grid gap-2 gap-lg-4">
                    <!-- Card -->
                    <a class="card card-hover-shadow" href="{{ route('tenant.Product.create') }}">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 img-rtl">
                            <img class="avatar avatar-lg avatar-4x3" src="{{ global_asset('img/static/medicine.gif') }}" alt="add product" style="min-height: 5rem;" data-hs-theme-appearance="default">
                            <img class="avatar avatar-lg avatar-4x3" src="{{ global_asset('img/static/medicine.gif') }}" alt="add product" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                          </div>
                          <div class="flex-grow-1 ms-4">
                            <h3 class="text-inherit mb-1">@lang('Product')</h3>
                            <span class="text-body">@lang('Add product')</span>
                          </div>
                          <div class="ms-2 text-end">
                            <i class="bi-chevron-right text-body text-inherit"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="card card-hover-shadow" href="{{ route('tenant.Category.index') }}">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-lg avatar-4x3" src="{{ global_asset('img/static/shopping-bag.gif') }}" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                            <img class="avatar avatar-lg avatar-4x3" src="{{ global_asset('img/static/shopping-bag.gif') }}" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                          </div>

                          <div class="flex-grow-1 ms-4">
                            <h3 class="text-inherit mb-1">@lang('Category')</h3>
                            <span class="text-body">@lang('Create a new category')</span>
                          </div>

                          <div class="ms-2 text-end">
                            <i class="bi-chevron-right text-body text-inherit"></i>
                          </div>
                        </div>
                      </div>
                    </a>
                    <!-- End Card -->

                    <!-- Card -->
                    <a class="card card-hover-shadow" href="{{ route('tenant.PromoCode') }}">
                      <div class="card-body">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img class="avatar avatar-lg avatar-4x3" src="{{ global_asset('img/static/cash.gif') }}" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="default">
                            <img class="avatar avatar-lg avatar-4x3" src="{{ global_asset('img/static/cash.gif') }}" alt="Image Description" style="min-height: 5rem;" data-hs-theme-appearance="dark">
                          </div>

                          <div class="flex-grow-1 ms-4">
                            <h3 class="text-inherit mb-1">@lang('Discount')</h3>
                            <span class="text-body">@lang('Create a new discount code')</span>
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
                      <h4 class="card-header-title">@lang('Top products - Most sold')</h4>

                      <a class="btn btn-ghost-secondary btn-sm" href="{{ route('tenant.Product.index') }}">@lang('View all')</a>
                    </div>
                    <!-- End Header -->

                    <!-- Body -->
                    <div class="card-body-height">
                      <!-- Table -->
                      <div class="table-responsive">
                        <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                          <thead class="thead-light">
                            <tr>
                              <th scope="col">@lang('Product image')</th>
                              <th scope="col">@lang('Product name')</th>
                              <th scope="col">@lang('Price')</th>
                              <th scope="col">@lang('Quantity sold')</th>
                              <th scope="col">@lang('Product profit')</th>
                            </tr>
                          </thead>

                          <tbody>
                              @foreach ($TopSales as $TopProduct)
                                <tr>
                                <td>
                                    <!-- Media -->
                                    <a class="d-flex align-items-center" href="#">
                                    <div class="flex-shrink-0">
                                        <img class="avatar" src="{{ find_image($TopProduct->image ,  App\Models\Product::base ) }}" alt="Top product image">
                                    </div>
                                    </a>
                                    <!-- End Media -->
                                </td>
                                <td><h5 class="text-inherit mb-0"> {{ LangDetail($TopProduct->name, $TopProduct->name_ar) }} </h5></td>
                                <td>{{ number_format($TopProduct->price, 0, '.', ',') }} @lang('KWD') </td>
                                <td> {{ $TopProduct->orderItems->sum('qty') }} </td>
                                <td><h5 class="text-inherit mb-0"> {{ multiply2Numbers($TopProduct->orderItems->sum('qty'),$TopProduct->price) }} @lang('KWD') </h5></td>
                                <td>
                                    <h4 class="mb-0">  </h4>
                                </td>
                                </tr>
                            @endforeach
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

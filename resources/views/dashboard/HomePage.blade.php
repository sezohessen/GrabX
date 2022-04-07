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
                        <h6 class="card-subtitle mb-3"> @lang('Website visitors') </h6>
                        <h3 class="card-title"> {{ number_format($visitorsCount, 0, '.', ',') }} </h3>
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
                          <h2 class="d-block fs-6" style="text-align: center"> @lang('Website visitors') (@lang('maximum show number') <span style="text-decoration: underline">100</span> ) </h2>
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
                    <div class="col-lg-12">
                        <!-- Table -->
                        <div class="card-body-height">
                          <!-- Table -->
                          <div class="table-responsive">
                            <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                              <thead class="thead-light">
                                <tr>
                                    <th scope="col">@lang('continent')</th>
                                    <th scope="col">@lang('Country')</th>
                                    <th scope="col">@lang('City')</th>
                                    <th scope="col">@lang('state')</th>
                                    <th scope="col">@lang('currency')</th>
                                </tr>
                              </thead>

                              <tbody>
                                  @foreach ($guests as $guest)
                                    <tr>
                                        <td><h5 class="text-inherit mb-0"> {{ $guest->continent }} </h5></td>
                                        <td> {{ $guest->country }} </td>
                                        <td> {{ $guest->city }} </td>
                                        <td> {{ $guest->state }} </td>
                                        <td> {{ $guest->currency }} </td>
                                        <td> {{ $guest->count }} </td>
                                    </tr>
                                @endforeach
                              </tbody>
                            </table>
                          </div>
                          <!-- End Table -->
                        </div>
                        <!-- End Table -->
                    </div>
                    <hr>
                  <!-- End Col -->
                  </div>
                  <div class="row no-gutters">
                    <div class="col-lg-6">
                        <!-- Table -->
                        <div class="card-body-height">
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-borderless table-thead-bordered table-nowrap table-align-middle card-table">
                            <thead class="thead-light">
                                <tr>
                                <th scope="col">@lang('Most visitors by country')</th>
                                <th scope="col">@lang('number of visitors')</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($countryCount as $country)
                                    <tr>
                                    <td><h5 class="text-inherit mb-0"> {{ $country->country }} </h5></td>
                                    <td> {{ $country->count }} </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- End Table -->
                        </div>
                        <!-- End Table -->
                    </div>
                    <div class="col-lg-6">
                        <!-- Body -->
                        <div class="card-body">
                        <h4>@lang('Canceled orders')</h4>

                        <div class="row align-items-sm-center mt-4 mt-sm-0 mb-5">
                            <div class="col-sm mb-3 mb-sm-0">
                            <span class="display-5 text-dark me-2">{{ number_format($refundedOrders->count(), 0, '.', ',') }}</span>
                            </div>
                            <!-- End Col -->

                            <div class="col-sm-auto">
                                @lang('Canceled orders cash')
                            <span class="h3 text-danger">
                                {{ number_format($refundedOrdersTotal, 0, '.', ',') }}
                                <i class="bi-graph-up"></i>
                            </span>
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Row -->

                        <!-- Bar Chart -->
                        <div class="chartjs-custom mb-4" style="height: 18rem;">
                            <canvas id="ecommerce-overview-4" class="js-chart" data-hs-chartjs-options='{
                                    "type": "line",
                                    "data": {
                                        "labels": ["Day 1","Day 2","Day 3","Day 4","Day 5","Day 6","Day 7"],
                                        "datasets": [{
                                        "data": [@foreach ($refundedOrdersArray as $key => $refundedAmount){{ $refundedAmount }}@if ($key + 1 != 7),@endif @endforeach],
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
                                        "data": [@foreach ($refundedOrdersCash as $key => $refundedCash){{ $refundedCash }}@if ($key + 1 != 7),@endif @endforeach],
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
                            <span class="legend-indicator bg-secondary"></span> @lang('Cash')
                            </div>
                            <!-- End Col -->

                            <div class="col-auto">
                            <span class="legend-indicator bg-Primary"></span> @lang('Orders')
                            </div>
                            <!-- End Col -->
                        </div>
                        <!-- End Legend Indicators -->
                        </div>
                        <!-- End Body -->
                    </div>
                  </div>
                </div>
    <!-- End Content -->

@endsection

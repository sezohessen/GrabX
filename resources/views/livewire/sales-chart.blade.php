<!-- Card -->
<div class="card mb-3 mb-lg-5">
    <!-- Header -->
    <div class="card-header card-header-content-sm-between">
        <h4 class="card-header-title mb-2 mb-sm-0"> @lang('Week sales') <i class="bi-question-circle text-body ms-1" data-bs-toggle="tooltip" data-bs-placement="top" title="@lang('Statistics of products sold during this week')"></i></h4>
    </div>
    <!-- End Header -->
    <!-- Body -->
    <div class="card-body">
        <div class="row col-lg-divider">
        <div class="col-lg-9 mb-5 mb-lg-0">
            <!-- Bar Chart -->
        @if($cash0) {{ $cash0 }} @else
            <div class="chartjs-custom mb-4">
            <canvas id="ecommerce-sales" class="js-chart" style="height: 15rem;" data-hs-chartjs-options='{
                        "type": "bar",
                        "data": {
                        "labels": [@foreach ($chartDateTime as $key => $time)"{{ $time }}"@if ($key + 1 != 7),@endif @endforeach],
                        "datasets": [{
                            "data": [@foreach ($ordersTotalAmount as $key => $orderAmount){{ $orderAmount }}@if ($key + 1 != 7),@endif @endforeach],
                            "backgroundColor": "#377dff",
                            "hoverBackgroundColor": "#377dff",
                            "borderColor": "#377dff"
                        },
                        {
                            "data": [@foreach ($casheAmont as $key => $orderCash){{ $orderCash }}@if ($key + 1 != 7),@endif @endforeach],
                            "backgroundColor": "#bdc5d1",
                            "borderColor": "#bdc5d1"

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
        @endif
            <!-- End Bar Chart -->
            <div class="row justify-content-center">
            <div class="col-auto">
                <span class="legend-indicator"></span> @lang('Revenues')
            </div>
            <!-- End Col -->

            <div class="col-auto">
                <span class="legend-indicator bg-primary"></span> @lang('Orders')
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
                <h6 class="card-subtitle">@lang('Revenues')</h6>
                <span class="d-block display-4 text-dark mb-1 me-3">@lang('Weekly') </span>
                @if($weekly >= $previousWeekly)
                    <span class="d-block text-success">
                        <i class="bi-graph-up me-1"></i>
                         {{ number_format($totalOrderPrice, 0, '.', ',') }}
                        <i class="bi bi-cash-coin"></i>
                         ({{ $percent }}%)
                    </span>
                @else
                    <span class="d-block text-danger">
                        <i class="bi-graph-down me-1"></i> {{ number_format($totalOrderPrice, 0, '.', ',') }} ({{ $percent }}%)
                    </span>
                @endif
                </div>
                <!-- End Stats -->

                <hr class="d-none d-lg-block my-0">
            </div>
            <!-- End Col -->

            <div class="col-sm-6 col-lg-12">
                <!-- Stats -->
                <div class="d-flex justify-content-center flex-column" style="min-height: 9rem;">
                <h6 class="card-subtitle">@lang('Orders')</h6>
                <span class="d-block display-4 text-dark mb-1 me-3"> {{ $productWeekly }} </span>
                @if($weeklySoldProducts >= $product_previousWeekly)
                    <span class="d-block text-success">
                        <i class="bi-graph-up me-1"></i> ({{ $product_percent }}%)
                    </span>
                @else
                    <span class="d-block text-danger">
                        <i class="bi-graph-down me-1"></i> ({{ $product_percent }}%)
                    </span>
                @endif
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

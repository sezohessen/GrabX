<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
    $setting = App\Models\Setting::first();
    @endphp
    @if($setting)
    <title>{{ $setting->company_name }}</title>
    @else
    <title>grabx</title>
    @endif


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    {{-- theme css --}}
    <link href="{{ global_asset('css/Frontend/style.css') }}" rel="stylesheet">
    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- Styles -->
    <link href="{{ global_asset('css/Frontend/app.css') }}" rel="stylesheet">
</head>
<body>

    {{-- Aside --}}

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-5 frontend-content">
                        {{-- website navbar --}}
            <header class="section-header">
                <section class="header-main shadow-sm bg-white" style="padding: 4px 0">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-1">
                                <a href="home.html" class="brand-wrap mb-0">
                                    <img alt="#" class="img-fluid" src="{{ tenant_asset($setting->logo->name) }}">
                                </a>
                                <!-- brand-wrap.// -->
                            </div>
                            <div class="col-md-3">
                                <div>
                                    <h6>{{ $setting->company_name }}</h6>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <input type="search" class="form-control form-control" placeholder="Search..." aria-label="Search">
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-3">
                                <span> @lang('Cart') <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                  </svg></span>
                            </div>
                        </div>
                        <!-- row.// -->
                    </div>
                    <!-- container.// -->
                </section>
                <!-- header-main .// -->
            </header>
            <hr>
                @yield('content')
            </div>

            <div class="col-md-7">
                @if($setting->bg_id)
                <div class="background-img">
                    <img src="{{ tenant_asset($setting->background->name) }}" class="img-fluid" alt="background-image">
                </div>
                @endif
            </div>

        </div>
    </div>
    {{-- Javscript --}}
    <script type="text/javascript" src="{{ global_asset('js/Frontend/osahan.js') }}"></script>
    {{-- Bootstrap --}}
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

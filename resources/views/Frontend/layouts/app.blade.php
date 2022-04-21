<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @if (App::isLocale('ar')) direction="rtl" dir="rtl"
    style="direction: rtl" @endif>

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
    {{-- Arabic Fonts --}}


    {{-- theme css --}}
    <link href="{{ global_asset('css/Frontend/style.css') }}" rel="stylesheet">
    {{-- Bootstrap --}}

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    {{-- TomSelect --}}
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/css/tom-select.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ global_asset('css/Frontend/phone.css') }}" rel="stylesheet">
    <link href="{{ global_asset('css/Frontend/app.css') }}" rel="stylesheet">

    {{-- Livewire --}}
    @livewireStyles

    {{-- Lang css --}}
    @if (App::isLocale('ar'))
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@200;300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ global_asset('css/Frontend/style_ar.css') }}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Vazirmatn:wght@200&display=swap');
    </style>
    @endif

    @yield('css')
    @if (App::isLocale('ar'))
    <link rel="stylesheet" href="{{ global_asset('css/Frontend/style_ar.css') }}">
    @endif
</head>

<body>

    {{-- big screen Aside --}}
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5 col-sm-6 frontend-content">
                {{-- website navbar --}}
                <header class="section-header">
                    <section class="header-main shadow-sm bg-white" style="padding: 4px 0">
                        <div class="container">
                            <div class="row align-items-md-center">
                                <div class="col-1">
                                    @if(isset($setting->logo))
                                    <a href="{{ Route('tenant.Homepage') }}" class="brand-wrap mb-0">
                                        <img alt="logo" class="img-fluid" src="{{ tenant_asset($setting->logo->name) }}">
                                    </a>
                                    @else
                                    <a href="{{ Route('tenant.Homepage') }}" class="brand-wrap mb-0">
                                        <img alt="{{ Route('tenant.Homepage') }}" class="img-fluid" src="{{ global_asset('img/products/164868101991327.jpg') }}">
                                    </a>
                                    @endif
                                    <!-- brand-wrap.// -->
                                </div>
                                <div class="col-md-3">
                                    <div>
                                        <h6><a href="{{ Route('tenant.Homepage') }}">{{ isset($setting->company_name) ? $setting->company_name : tenant('company') }}</a></h6>
                                    </div>
                                </div>
                                {{-- search --}}
                                <div class="col-md-8">
                                    @livewire('search')
                                </div>
                            </div>
                            <!-- row.// -->
                        </div>
                        <!-- container.// -->
                    </section>
                    <!-- header-main .// -->
                </header>
                    {{-- phone Aside --}}
                <div class="phone-aside">
                    <div class="d-flex flex-row justify-content-around align-items-center">
                        <div class="logo">
                            @if(isset($setting->logo))
                            <a href="{{ Route('tenant.Homepage') }}" class="brand-wrap mb-0">
                                <img alt="logo" class="img-fluid" src="{{ tenant_asset($setting->logo->name) }}">
                            </a>
                            @else
                            <a href="{{ Route('tenant.Homepage') }}" class="brand-wrap mb-0">
                                <img alt="{{ Route('tenant.Homepage') }}" class="img-fluid" src="{{ global_asset('img/products/164868101991327.jpg') }}">
                            </a>
                            @endif
                        </div>
                        <div class="company-name">
                            <div>
                                <h6><a href="{{ Route('tenant.Homepage') }}">{{ isset($setting->company_name) ? $setting->company_name : tenant('company') }}</a></h6>
                            </div>
                        </div>
                        <div class="cart">
                            <a href="{{ route('tenant.cart.show') }}">
                                <div>
                                    @lang('Cart')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        <div class="lang">
                            <div class="frontend-lang">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle lang-dropdown navi-link" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        @if (App::isLocale('ar'))
                                        <img style="width: 30px" src="{{ global_asset('img/flag/KW.svg') }}" alt="Arabic" />
                                        @else
                                        <img style="width: 30px" class="" src="{{ global_asset('img/flag/UK.svg') }}"
                                            alt="English" />
                                        @endif
                                    </button>
                                    <ul class="dropdown-menu lang-items" aria-labelledby="dropdownMenuButton1">
                                        {{-- Item --}}
                                        <li class="navi-item">
                                            <a href="{{url('/lang/en')}}"
                                                class="navi-link @if (App::isLocale('en'))  active  @endif">
                                                <span class="mr-3 symbol symbol-20">
                                                    <img src="{{ global_asset('img/flag/UK.svg') }}" alt="English" />
                                                </span>
                                                <span class="navi-text">@lang('English')</span>
                                            </a>
                                        </li>
                                        {{-- Item --}}
                                        <li class="navi-item">
                                            <a href="{{url('/lang/ar')}}"
                                                class="navi-link @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">
                                                <span class="mr-3 symbol symbol-20">
                                                    <img src="{{ global_asset('img/flag/KW.svg') }}" alt="Arabic" />
                                                </span>
                                                <span class="navi-text">@lang('Arabic')</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-around align-items-center">
                        <div class="search">
                            @livewire('search')
                        </div>
                    </div>
                </div>
                {{-- tablet Aside --}}
                <div class="tablet-aside">
                    <div class="d-flex flex-row justify-content-around align-items-center">
                        <div class="logo">
                            @if(isset($setting->logo))
                            <a href="{{ Route('tenant.Homepage') }}" class="brand-wrap mb-0">
                                <img alt="logo" class="img-fluid" src="{{ tenant_asset($setting->logo->name) }}">
                            </a>
                            @else
                            <a href="{{ Route('tenant.Homepage') }}" class="brand-wrap mb-0">
                                <img alt="{{ Route('tenant.Homepage') }}" class="img-fluid" src="{{ global_asset('img/products/164868101991327.jpg') }}">
                            </a>
                            @endif
                        </div>
                        <div class="company-name">
                            <div>
                                <h6><a href="{{ Route('tenant.Homepage') }}">{{ isset($setting->company_name) ? $setting->company_name : tenant('company') }}</a></h6>
                            </div>
                        </div>
                        <div class="search">
                            @livewire('search')
                        </div>
                    </div>
                </div>
                <hr style="margin: 0">
                @yield('content')
            </div>

            <div class="col-md-7 col-sm-6" id="background-section">
                @if(isset($setting->bg_id))
                <div class="background-img">
                    <img src="{{ tenant_asset($setting->background->name) }}" class="img-fluid" alt="background-image">
                </div>
                @else
                <div class="background-img">
                    <img src="{{ global_asset('img/static/background.jpg') }}" class="img-fluid" alt="background-image">
                </div>
                @endif
                <div class="container">
                    <div class="flex d-md-inline-flex second-navbar">
                        {{-- Cart --}}
                        <div class="col-md-6 cart-icon">
                            <a href="{{ route('tenant.cart.show') }}">
                                <div>
                                    @lang('Cart')
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                            fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                            <path
                                                d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                                    </svg>
                                </div>
                            </a>
                        </div>
                        {{-- Change lang --}}
                        <div class="col-md-6">
                            <div class="frontend-lang">
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle lang-dropdown navi-link" type="button"
                                        id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        @if (App::isLocale('ar'))
                                        <img style="width: 30px" src="{{ global_asset('img/flag/KW.svg') }}" alt="Arabic" />
                                        @else
                                        <img style="width: 30px" class="" src="{{ global_asset('img/flag/UK.svg') }}"
                                            alt="English" />
                                        @endif
                                    </button>
                                    <ul class="dropdown-menu lang-items" aria-labelledby="dropdownMenuButton1">
                                        {{-- Item --}}
                                        <li class="navi-item">
                                            <a href="{{url('/lang/en')}}"
                                                class="navi-link @if (App::isLocale('en'))  active  @endif">
                                                <span class="mr-3 symbol symbol-20">
                                                    <img src="{{ global_asset('img/flag/UK.svg') }}" alt="English" />
                                                </span>
                                                <span class="navi-text">@lang('English')</span>
                                            </a>
                                        </li>
                                        {{-- Item --}}
                                        <li class="navi-item">
                                            <a href="{{url('/lang/ar')}}"
                                                class="navi-link @if (App::isLocale('ar'))  active  @endif" href="{{url('/ar')}}">
                                                <span class="mr-3 symbol symbol-20">
                                                    <img src="{{ global_asset('img/flag/KW.svg') }}" alt="Arabic" />
                                                </span>
                                                <span class="navi-text">@lang('Arabic')</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    {{-- Javscript --}}
    {{-- Jquery --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ global_asset('js/Frontend/osahan.js') }}"></script>
    {{-- Livewire --}}
    @livewireScripts
    {{-- Bootstrap --}}

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    {{-- TomSelect --}}
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.0.1/dist/js/tom-select.complete.min.js"></script>
    <script src="{{ global_asset('js/myjava.js') }}"></script>

    @yield('js')
</body>

</html>

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @php
    $Setting = App\Models\Setting::first();
    @endphp
    @if($Setting)
    <title>{{ $Setting->company_name }}</title>
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
                @yield('content')
            </div>

            <div class="col-md-7">
                @if($Setting->bg_id)
                <div class="background-img">
                    <img src="{{ tenant_asset($Setting->background->name) }}" class="img-fluid" alt="background-image">
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

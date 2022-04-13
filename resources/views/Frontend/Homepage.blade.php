@extends('Frontend.layouts.app')
@section('content')
    <div>
        {{-- website navbar --}}
        <div>
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
        </div>
        <hr>
        {{-- Start Description --}}
        <div>
            <div class="header-main bg-white">
                <div class="text-center"> {{ LangDetail($setting->desc,$setting->desc_ar) }} </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <h4 class="header"> @lang('Categories') </h4>
            <div class="row">
                @foreach ($categories as $category)
                <div class="col-md-6 category-card">
                    <a href="{{ route('tenant.CategoryProducts',['id'=>$category->id]) }}">
                        <div class="card bg-white text-white" style="padding: 4px">
                            <img src="{{ global_asset('img/static/pexels-pixabay-326279.jpg') }}" class="card-img" alt="...">
                            <div class="card-img-overlay">
                                <h5 class="card-title category-name"> {{ LangDetail($category->name,$category->name_ar) }}</h5>
                            </div>
                        </div>
                    </a>
                </div>

                @endforeach
            </div>
        {{ $categories->links() }}
        </div>
    </div>
@endsection

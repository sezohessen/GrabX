@extends('Frontend.layouts.app')
@section('content')
    <div>
        {{-- Start Description --}}
        <div>
            <div class="header-main bg-white">
                <div class="text-center">
                    @if(isset($setting->desc))
                        {{ LangDetail($setting->desc,$setting->desc_ar) }}
                    @endif
                </div>
            </div>
        </div>
        @if ($categories->count())
            <hr>
            <div class="container">
                <h4 class="header-title"> @lang('Categories') </h4>
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
        @else
        <div class="alert alert-danger">
            <div class="text-center my-4">
                <i class="fas-solid fas-bag-shopping"></i>
                <h4>@lang('There are no categories yet')</h4>
                <p>@lang('Come back later')</p>
            </div>
        </div>
        @endif
    </div>
@endsection

@extends('Frontend.layouts.app')
@section('content')
    <div>
        {{-- Start Description --}}
        <div>
            <div class="header-main bg-white">
                <div class="text-center"> {{ LangDetail($setting->desc,$setting->desc_ar) }} </div>
            </div>
        </div>
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
    </div>
@endsection

@extends('Frontend.layouts.app')
@section('content')
    @livewire('frontend-products', ['id' => $category->id])
@endsection

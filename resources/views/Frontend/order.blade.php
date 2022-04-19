@extends('Frontend.layouts.app')
@section('css')
<link rel="stylesheet" href="{{ global_asset('css/Frontend/reviewOrder.css') }}">

@section('content')
    @livewire('cart')
@endsection

@extends('Frontend.layouts.app')

@section('content')
<div class="header-title">
    <div class="container">
        <div class="row">
            <div class="col-md-1">
                <span class="back-icon">
                    <a href="{{ route('tenant.Homepage') }}" title="@lang('Category page')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-square-fill" viewBox="0 0 16 16">
                            <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm10.5 10V4a.5.5 0 0 0-.832-.374l-4.5 4a.5.5 0 0 0 0 .748l4.5 4A.5.5 0 0 0 10.5 12z"/>
                        </svg>
                    </a>
                </span>
            </div>
            <div class="col-md-10">
                <h4> @lang('Order')</h4>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">

    {{-- @inject('paymentController', 'App\hesabe\Controllers\PaymentController'); --}}
    @php
    /* $paymentController->getCheckoutResponse(); */
    /* $encrypted = HesabeCrypt::encrypt($requestDataJson, $encryptionKey, $ivKey);
    $decrypted = HesabeCrypt::decrypt($checkoutResponseContent, $encryptionKey, $ivKey); */
    @endphp
    <div class="font-weight-bold text-center mt-4">
        <div class="alert alert-info">
            <h3>@lang('Order has been sent successfully')</h3>
            <p>@lang('Track Your Order') <a href="{{ route('tenant.track') }}">@lang('Show')</a></p>
        </div>
    </div>
</div>


@endsection


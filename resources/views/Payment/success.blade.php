<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @php
    $setting = App\Models\Setting::first();
    @endphp
    @if($setting)
    <title>{{ $setting->company_name }}</title>
    @else
    <title>grabx</title>
    @endif
</head>
<body>
    {{-- @inject('paymentController', 'App\hesabe\Controllers\PaymentController'); --}}
    @php
        /* $paymentController->getCheckoutResponse(); */
    @endphp
    <h1 class="text-3xl font-bold underline">
        Success
    </h1>

    {{-- tailwind css --}}
    <script src="https://cdn.tailwindcss.com"></script>

</body>
</html>

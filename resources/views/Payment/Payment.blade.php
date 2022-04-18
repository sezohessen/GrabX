<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Transaction | Hesabe Payment Collection Co</title>
    <link rel="icon" href="https://www.hesabe.com/newhome/images/favicon-100x100.png" sizes="32x32" />
    <link rel="icon" href="https://www.hesabe.com/newhome/images/favicon.png" sizes="192x192" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .error-display{
            font-style: italic;
            font-size: 1rem;
            color: #9b2c2c;
        }
    </style>
</head>
<body>
    @inject('paymentController', 'App\hesabe\Controllers\PaymentController');

<?php

    // include(app_path().'/hesabe/Controllers/PaymentController.php');
    // $paymentController = new PaymentController();

    $paymentController->formSubmit();
    $date = new DateTime();
?>
<h1 class="text-center"> Hesabe Payment kit - Php</h1>
<div class="flex-center position-ref full-height">
    <div class="content">

        <form action="{{ route('tenant.payment-submit') }}" class="form" method="post" id="paymentForm">
            @csrf
            <div class="form-group">
                <label for="merchant_code"> <strong>Merchant Code</strong> </label> <br>
                <input type="text" name="merchantCode" value="<?php echo Constants::MERCHANT_CODE;?>">
                 <p class="error-display" id="merchantCode_validate"></p>

            </div>
            <div class="form-group">
                <label for="amount"> <strong>Amount</strong></label> <br>
                <input type="text" name="amount" value="<?php echo mt_rand(10, 999);?>">
                <p class="error-display" id="amount_validate"></p>
            </div>
            <div class="form-group">
                <label for="currency"> <strong>Currency</strong></label> <br>
                <select class="form-control" id="currency" name="currency">
                    <option name="currency" value=""> Select currency</option>
                    <option name="currency" value="KWD"> Kuwaiti Dinar</option>
                    <option name="currency" value="BHD"> Bahraini Dinar</option>
                    <option name="currency" value="AED"> Emirati Dirham</option>
                    <option name="currency" value="OMR"> Omani Rial</option>
                    <option name="currency" value="QAR"> Qatari Rial</option>
                    <option name="currency" value="SAR"> Saudi Rial</option>
                    <option name="currency" value="USD"> US Dollar</option>
                    <option name="currency" value="GBP"> British Pound</option>
                    <option name="currency" value="EUR"> Euro</option>
                </select>
                <p class="error-display" id="currency_validate"></p>
            </div>
            <div class="form-group">
                <label for="paymentType"> <strong>Payment Type</strong> </label> <br>
                <input type="radio" name="paymentType" value="0" checked> Indirect
                <input type="radio" name="paymentType" value="1"> KNET
                <input type="radio" name="paymentType" value="2"> MPGS
                <!-- <input type="radio" name="paymentType" value="5" checked> Tokenization -->
                <p class="error-display" id="paymentType_validate"></p>
            </div>
            <div class="form-group">
                <label for="responseUrl"> <strong>Response URL</strong> </label> <br>
                <input type="text" name="responseUrl" value="<?php echo Constants::RESPONSE_URL;?>">
                <p class="error-display" id="responseUrl_validate"></p>
            </div>
            <div class="form-group">
                <label for="failureUrl"> <strong>Failure URL</strong> </label> <br>
                <input type="text" name="failureUrl" value="<?php echo Constants::FAILURE_URL;?>">
                <p class="error-display" id="failureUrl_validate"></p>
            </div>
            <div class="form-group">
                <label for="orderReferenceNumber"> <strong>Order Reference Number</strong> </label> <br>
                <input type="text" name="orderReferenceNumber" value="<?php echo $date->getTimestamp(); ?>">
                <p class="error-display" id="orderReferenceNumber_validate"></p>
            </div>
            <div class="form-group">
                <label for="variable1"> <strong>Variable 1</strong> </label> <br>
                <input type="text" name="variable1" value="">
            </div>
            <div class="form-group">
                <label for="variable2"> <strong>Variable 2</strong> </label> <br>
                <input type="text" name="variable2" value="">
            </div>
            <div class="form-group">
                <label for="variable3"> <strong>Variable 3</strong> </label> <br>
                <input type="text" name="variable3" value="">
            </div>
            <div class="form-group">
                <label for="variable4"> <strong>Variable 4</strong> </label> <br>
                <input type="text" name="variable4" value="">
            </div>
            <div class="form-group">
                <label for="variable5"> <strong>Variable 5</strong> </label> <br>
                <input type="text" name="variable5" value="">
            </div>
            <div class="form-group">
                <label for="version"> <strong>Version</strong></label> <br>
                <input type="text" name="version" value="<?php echo Constants::VERSION ?>">
                <p class="error-display" id="version_validate"></p>
            </div>
            <div class="form-group">
                <button class="btn" type="submit" value="submit" name="submit">Submit</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>

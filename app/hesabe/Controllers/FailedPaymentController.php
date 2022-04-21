<?php

namespace App\hesabe\Controllers;
use App\hesabe\Controllers\PaymentController;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class FailedPaymentController extends Controller
{
    public function failed()
    {
        return view('Payment.failed');
    }
}

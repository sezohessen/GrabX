<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('dashboard.Orders.index');
    }
    public function pending()
    {
        return view('dashboard.Orders.pending');
    }
}

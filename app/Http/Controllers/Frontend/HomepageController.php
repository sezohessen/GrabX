<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        return view('Frontend.Homepage');
    }
}

<?php

use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\dashboard\dashboardController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/lang/{locale}', function ($locale) {
    if (in_array($locale, ['ar', 'en']) ) {
        session()->put('app_locale', $locale);

        return back();
    }

});
Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [dashboardController::class,'index']);

    // Products
    Route::resource('Product', ProductController::class);
});

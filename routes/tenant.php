<?php

declare(strict_types=1);

use App\Http\Controllers\dashboard\CategoryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\OrderController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomepageController;
use App\Http\Controllers\Frontend\OrderController as FrontendOrderController;
use App\Http\Controllers\Frontend\ProductController as FrontendProductController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/
Route::group([
    'as' => 'tenant.',
    'middleware' => [
        'web',
        'auth',
        InitializeTenancyByDomain::class,
        PreventAccessFromCentralDomains::class,
    ]
],function(){
    /* Every Route in Tenant will be here !! */
    Route::get('/dashboard', [dashboardController::class,'index'])->name('dashboard');
    Route::resource('Product', ProductController::class);
    Route::resource('Category', CategoryController::class);
    Route::get('/Governorate', function() {return view('dashboard.Governorate.index'); })->name('Governorate');
    Route::get('/City', function() {return view('dashboard.Cities.index'); })->name('City');
    Route::get('/PromoCode', function() {return view('dashboard.Promo.index'); })->name('PromoCode');
    Route::get('/Settings', function() {return view('dashboard.Settings.index'); })->name('Settings');
    Route::get('orders', [OrderController::class,'index'])->name('order.index');
    Route::get('orders/pending', [OrderController::class,'pending'])->name('order.pending');
    Route::get('orders/show/{id}', [OrderController::class,'show'])->name('order.show');
});
Route::group([
    'as' => 'tenant.',
    'middleware' => [
        'web',
        InitializeTenancyByDomain::class,
        PreventAccessFromCentralDomains::class,
    ]
],function(){
    Route::get('/lang/{locale}', function ($locale) {
        if (in_array($locale, ['ar', 'en']) ) {
            session()->put('app_locale', $locale);
            return back();
        }
    });
    Auth::Routes();
    // Frontend - main website
    Route::get('/',[HomepageController::class,'index'])->name('Homepage');
    Route::get('/products/{id}',[HomepageController::class,'show'])->name('CategoryProducts');
    Route::get('/product/{id}',[FrontendProductController::class,'show'])->name('Product');
    Route::post('/cart/{id}',[CartController::class,'addToCart'])->name('cart.addToCart');
    Route::get('/order',[FrontendOrderController::class,'show'])->name('order.show');
});



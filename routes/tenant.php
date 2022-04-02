<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;
use App\Http\Controllers\dashboard\dashboardController;
use App\Http\Controllers\dashboard\ProductController;
use App\Http\Livewire\ProductIndex;

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
    Route::get('/lang/{locale}', function ($locale) {
        if (in_array($locale, ['ar', 'en']) ) {
            session()->put('app_locale', $locale);
            return back();
        }
    });
    Route::get('/dashboard', [dashboardController::class,'index'])->name('dashboard');
    Route::resource('Product', ProductController::class);
    Route::get('/governorate', function() {return view('dashboard.Governorate.governorate'); })->name('governorate');
});
Route::group([
    'as' => 'tenant.',
    'middleware' => [
        'web',
        InitializeTenancyByDomain::class,
        PreventAccessFromCentralDomains::class,
    ]
],function(){
    Auth::Routes();
});


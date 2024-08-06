<?php

use App\Http\Controllers\CustomerAuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MerchantAuthController;
use App\Models\Customer;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/customer/register', [CustomerAuthController::class, 'showRegistrationForm'])->name('customerregister');
Route::post('/customer/register', [CustomerAuthController::class, 'register'])->name('savecustomer');
Route::get('/customer/login', [CustomerAuthController::class, 'showLoginForm'])->name('customerlogin');
Route::post('/customer/login', [CustomerAuthController::class, 'login'])->name('logincustomer');

Route::get('/merchant/register', [MerchantAuthController::class, 'showRegistrationForm'])->name('merchantregister');
Route::post('/merchant/register', [MerchantAuthController::class, 'register'])->name('savemerchant');
Route::get('/merchant/login', [MerchantAuthController::class, 'showLoginForm'])->name('merchantlogin');
Route::post('/merchant/login', [MerchantAuthController::class, 'login'])->name('loginmerchant');

Route::middleware('auth:customers')->group(function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
});

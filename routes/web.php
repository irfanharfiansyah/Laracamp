<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
    return view('layouts.landing-page');
})->name('home');

Route::get('checkout', function () {
    return view('layouts.checkout-page');
})->name('checkout');

Route::get('success', function () {
    return view('layouts.success-page');
})->name('success');
Route::get('/', function () {
    return view('layouts.login-page');
})->name('login');

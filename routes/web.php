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

Route::get('/', function () {
    return \Inertia\Inertia::render('Welcome');
});

Route::get('/mollie/payment', [\App\App\Payment\Controllers\PaymentController::class, 'index']);
Route::post('/mollie/payment', [\App\App\Payment\Controllers\PaymentController::class, 'store']);
Route::post('example', function () {
    return 'Hello World';
});

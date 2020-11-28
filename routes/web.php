<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerContrller;
use App\Http\Controllers\TasKController;
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
    return view('welcome');
});

Route::resources([
    'customer'=>CustomerContrller::class,
    'task'=>TasKController::class,
]);

<?php

use App\Http\Controllers\ConfigController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\DB;
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


Route::get("/", function(){
    return view("portal");
})->name("index");

Route::post("/millenium.mpesa.payment", [PaymentController::class, "makePayment"])->name("millenium.mpesa.payment");
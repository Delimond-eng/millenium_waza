<?php

use App\Http\Controllers\PaymentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

 function formatPhoneNumber($phoneNumber)
    {
        // Remove all non-numeric characters
        $phoneNumber = preg_replace('/\D/', '', $phoneNumber);

        // Remove the leading + or 00 if present
        if (substr($phoneNumber, 0, 2) == '00') {
            $phoneNumber = substr($phoneNumber, 2);
        } elseif (substr($phoneNumber, 0, 1) == '0') {
            $phoneNumber = substr($phoneNumber, 1);
        } elseif (substr($phoneNumber, 0, 1) == '+') {
            $phoneNumber = substr($phoneNumber, 1);
        }
        // Check if the remaining number starts with the country code '243'
        if (substr($phoneNumber, 0, 3) != '243') {
            $phoneNumber = '243' . $phoneNumber;
        }
        return $phoneNumber;
    }

Route::post("/millenium.pay.make", [PaymentController::class, 'makePayment']);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Services\VodacomPaymentService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PaymentController extends Controller
{
    protected VodacomPaymentService $paymentService;

    public function __construct(VodacomPaymentService $paymentService)
    {
        $this->paymentService = $paymentService;

    }

    /**
     * Summary of makePayment
     * @param \Illuminate\Http\Request $request
     * @return void
     */
    public function makePayment(Request $request)
    {
         // Validation des données
        $validator = Validator::make($request->all(), [
            'customer_id' => 'nullable|string',
            'amount' => 'required|numeric',
            'currency'=>'nullable|string',
            'phone'=> 'required|string|min:9|regex:/^[0-9]+$/',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors()->all(),
            ]);
        }
        $data = $validator->validate();
        $data['currency'] = "USD";
        $data["phone"] = $this->formatPhoneNumber($data["phone"]);
        $result = $this->paymentService->createPayment($data);
        return response()->json($result);
    }


    public function formatPhoneNumber($phoneNumber)
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

}
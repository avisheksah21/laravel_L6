<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsewaController extends Controller
{
    public function payment_verify(Request $request)
    {
        $status = $request->tran_status;

        if ($status == "success_url") {
            toastr()->success('Payment Sucessful');
        }
        else{
            toastr()->closeButton()->warning('Payment Failed');
        }
    }


    public function payment_success(Request $request)
    {
        return redirect()->route('home')->with('success', 'Payment successful!');
    }

    // Handle failed payment
    public function payment_failed(Request $request)
    {
        return redirect()->route('home')->with('error', 'Payment failed. Please try again.');
    }

}

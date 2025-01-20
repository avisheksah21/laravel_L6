<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EsewaController extends Controller
{
    public function payment_verify(Request $request)
    {
        $status = $request->tran_status;
        $amt = $request->amt;
        $oid = $request->oid;
        $refid = $request->refid;
    }
}

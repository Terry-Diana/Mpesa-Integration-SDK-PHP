<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class MpesaController extends Controller
{
    public function stkSimulator()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $Amount = "1";
        $PartyB = 174379;
        $PartyA = "[your mpesa phone number]";
        $PhoneNumber = "[your mpesa phone number]";
        $BusinessShortCode = 174379;
        $AccountReference = "Test Payment";
        $Remarks = "Test payment successful!";
        $CallBackURL = "[any URL(real/fake)]";
        $TransactionType = "CustomerPayBillOnline";
        $TransactionDesc = "Lipa na Mpesa testing";
        $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";


        $stkPushSimulation = $mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );

        dd($stkPushSimulation);
    }
}

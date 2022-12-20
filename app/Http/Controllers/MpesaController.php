<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mpesa;

class MpesaController extends Controller
{
    public function stkSimulator()
    {
        $mpesa = new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode = 174379;
        $LipaNaMpesaPasskey = "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919";
        $TransactionType = "CustomerPayBillOnline";
        $Amount = "1";
        $PartyA = 254701794453;
        $PartyB = 174379;
        $PhoneNumber = 254701794453;
        $CallBackURL = "https://testmpesa.com";
        $AccountReference = "Test Payment";
        $TransactionDesc = "Lipa na Mpesa testing";
        $Remarks = "Test payment successful!";

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

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use kkiapay;

class PayController extends Controller
{
     public function  pay()
    {   
        $public_key = c87f92bd083df9ca973b25c8bcffd95886a1d338;
        $private_key = pk_e634e7fed0072b49f9797ed080b11ba25f9f2a3aceca1298056c6993ca471d34;
        $secret = sk_843eec656b2be41fb30cc90d4db6809d9cbb689c5d2e8591330f65c18594384c

        $kkiapay = new \Kkiapay\Kkiapay($public_key,
                                $private_key, 
                                $secret, 
                                $sandbox = true);
        return $
    }
}

<?php

namespace App\Http\Controllers\payment;
class PayPalMethod implements \App\Http\Controllers\payment\PaymentMethodInterface
{

    public function MakePayment()
    {
        return "paypal payment";
    }
}

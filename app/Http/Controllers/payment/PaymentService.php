<?php

namespace App\Http\Controllers\payment;
class PaymentService
{

    public function pay(\App\Http\Controllers\payment\PaymentMethodInterface $paymentMethod)
    {

        return $paymentMethod->MakePayment();
    }
}

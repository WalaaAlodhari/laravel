<?php

namespace App\Http\Controllers\payment;

class StripePaymentMethod implements PaymentMethodInterface{

    public function MakePayment()
    {
         return 'Stripe payment';
    }
}

<?php

class PaymentProcess{
    protected \App\Http\Controllers\payment\StripePaymentMethod $paymentMethod;

    public function __construct(\App\Http\Controllers\payment\PaymentMethodInterface $stripePaymentMethod)
    {
        $this-> paymentMethod = $stripePaymentMethod;

    }
    public function pay(){
        $this->paymentMethod->MakePayment();
    }

}
$paymentProcess= new PaymentMethod(
    //new \App\Http\Controllers\payment\StripePaymentMethod()
    new \App\Http\Controllers\payment\PayPalMethod()

);
$paymentProcess->pay();

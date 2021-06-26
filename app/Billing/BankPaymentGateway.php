<?php

namespace App\Billing;

use Illuminate\Support\Str;

class BankPaymentGateway implements PaymentGatewayContract
{
    private $currency;
    private $discount;


    /**
     * BankPaymentGateway constructor.
     */
    public function __construct($currency)
    {
        $this->currency = $currency;
        $this->discount = 0;
    }

    public function setDiscount($amount)
    {
        $this->discount = $amount;
    }

    public function charge($amount) : array{

        //charge the bank
        $fees = 0;
        return[
            'method of payment' => "Bank Payment",
            'amount' => ($amount - $this->discount) + $fees,
            'confirmation_number' => Str::random(),
            'currency' => $this->currency,
            'discount'=>$this->discount,
            'fees'=> $fees,
        ];
    }
}

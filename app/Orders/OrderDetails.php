<?php

namespace App\Orders;

use App\Billing\PaymentGateway;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $paymentGateway;

    public function __construct(PaymentGatewayContract $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function all(){
        $this->paymentGateway->setDiscount(100);
        return [
            'name'=>'Tharanga',
            'address'=>'No 232 Sriyani Bellanthudwa'
        ];
    }
}

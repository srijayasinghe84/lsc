<?php

namespace App\Http\Controllers;

use App\Orders\OrderDetails;
use Illuminate\Http\Request;
use App\Billing\PaymentGateway;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class PayOrderController extends Controller
{
    public function store(PaymentGatewayContract $paymentGateway, OrderDetails $orderDetails){
        //$paymentGateway = new PaymentGateway();

        $orderDetails->all();

        dd($paymentGateway->charge(500));
    }
}

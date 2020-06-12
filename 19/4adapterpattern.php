<?php

interface paymentGateway{
    function sendPayment($payment);
}
class PaymentProcessor{
    private $gateway;
    function __construct(paymentGateway $pg){
        $this->gateway = $pg;
    }
    function purchaseProduct($amount){
        $this->gateway->sendPayment($amount);
    }
}
class PayPal implements paymentGateway{
    function sendPayment($payment){
        echo "{$payment} processed by paypal";
    }
}
class Stripe{
    function makePayment($amount, $currency=null){
        echo "{$amount} processed by stripe";
    }
}
class stripeAdapter implements paymentGateway{
    private $stripe;
    function __construct(Stripe $stripe){
        $this->stripe = $stripe;
    }
    function sendPayment($payment){
        $this->stripe->makePayment($payment);
    }
}

$paypal = new paypal();
$stripe = new Stripe();
$sa = new stripeAdapter($stripe);
$pp = new paymentProcessor($sa);
$pp->purchaseProduct(45);
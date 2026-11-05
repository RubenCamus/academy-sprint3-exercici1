<?php

require_once('PaymentGateway.php');
class PaymentProcessor
{

    public function __construct()
    {}

    public function procesarPago(float $cantidad, PaymentGateway $paymentGateway): string
    {
        return $paymentGateway->sendPayment($cantidad);
    }
}

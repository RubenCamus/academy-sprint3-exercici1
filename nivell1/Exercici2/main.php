<?php
require_once('PaymentProcessor.php');
require_once('StripePaymentGateway.php');
require_once('PayPalPaymentGateway.php');
require_once('BankTransfer.php');

$procesadorDePagos = new PaymentProcessor();

echo $procesadorDePagos->procesarPago(10, new PayPalPaymentGateway) . PHP_EOL;
echo $procesadorDePagos->procesarPago(8, new StripePaymentGateway) . PHP_EOL;
echo $procesadorDePagos->procesarPago(1000, new BankTransfer) . PHP_EOL;
?>

<?php
session_start();

$PayPalMode 			= 'sandbox'; // sandbox or live
$PayPalApiUsername 		= 'parveen.info99-facilitator_api1.gmail.com'; //PayPal API Username
$PayPalApiPassword 		= 'BHPD3LPNN7E99663'; //Paypal API password
$PayPalApiSignature 	= 'A2ByacGGzEBbWMck8jOLpHpN-yP6A63YfXE0fc64-yCx6sSxIENeEhAe'; //Paypal API Signature
$PayPalCurrencyCode 	= 'USD'; //Paypal Currency Code
$PayPalReturnURL 		= 'http://wayuprewards.com/Paypal-Express-Checkout-Example-master/process.php'; //Point to process.php page
$PayPalCancelURL 		= 'http://wayuprewards.com/Paypal-Express-Checkout-Example-master/cancel_url.php'; //Cancel URL if user clicks cancel
?>

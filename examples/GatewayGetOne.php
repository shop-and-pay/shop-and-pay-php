<?php

spl_autoload_register(function($class) {
    $root = dirname(__DIR__);
    $classFile = $root . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// $instanceName is a part of the url where you access your shopandpay installation.
// https://{$instanceName}.shop-and-pay.com
$instanceName = 'YOUR_INSTANCE_NAME';

// $secret is the shopandpay secret for the communication between the applications
// if you think someone got your secret, just regenerate it in the shopandpay administration
$secret = 'YOUR_SECRET';

$shopandpay = new \ShopAndPay\ShopAndPay($instanceName, $secret);

$gateway = new \ShopAndPay\Models\Request\Gateway();
$gateway->setId(1);

try {
    $response = $shopandpay->getOne($gateway);
    var_dump($response);
} catch (\ShopAndPay\ShopAndPayException $e) {
    print $e->getMessage();
}

<?php

use ShopAndPay\Models\Request\Design;
use ShopAndPay\ShopAndPay;
use ShopAndPay\ShopAndPayException;

spl_autoload_register(function ($class) {
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

$shopandpay = new ShopAndPay($instanceName, $secret);

$design = new Design();
$design->setLimit(1);
$design->setOffset(2);
try {
    $response = $shopandpay->getAll($design);
    var_dump($response);
} catch (ShopAndPayException $e) {
    print $e->getMessage();
}

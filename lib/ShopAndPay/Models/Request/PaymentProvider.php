<?php

/**
 * The PaymentProvider request model.
 *
 * @author    Shop & Pay Development <dev@shop-and-pay.com>
 * @copyright 2018 Shop & Pay
 * @since     v1.0
 */

namespace ShopAndPay\Models\Request;

/**
 * Class PaymentProvider
 * @package ShopAndPay\Models\Request
 */
class PaymentProvider extends \ShopAndPay\Models\Base
{
    /** @var string $name */
    protected $name;

    /** @var array $paymentMethods */
    protected $paymentMethods;

    /** @var array $activePaymentMethods */
    protected $activePaymentMethods;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return array
     */
    public function getPaymentMethods()
    {
        return $this->paymentMethods;
    }

    /**
     * @param array $paymentMethods
     */
    public function setPaymentMethods($paymentMethods)
    {
        $this->paymentMethods = $paymentMethods;
    }

    /**
     * @return array
     */
    public function getActivePaymentMethods()
    {
        return $this->activePaymentMethods;
    }

    /**
     * @param array $activePaymentMethods
     */
    public function setActivePaymentMethods($activePaymentMethods)
    {
        $this->activePaymentMethods = $activePaymentMethods;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \ShopAndPay\Models\Response\PaymentProvider();
    }
}

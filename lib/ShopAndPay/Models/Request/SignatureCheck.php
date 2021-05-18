<?php
/**
 * The signatureCheck request model
 * @author    Remo Siegenthaler <remo.siegenthaler@shop-and-pay.com>
 * @copyright 2017 Shop & Pay
 * @since     v1.0
 */
namespace ShopAndPay\Models\Request;

/**
 * Class SignatureCheck
 * @package ShopAndPay\Models\Request
 */
class SignatureCheck extends \ShopAndPay\Models\Base
{
    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \ShopAndPay\Models\Response\SignatureCheck();
    }
}

<?php
/**
 * The AuthToken request model
 * @copyright 2014 Shop & Pay
 * @since     v1.0
 */
namespace ShopAndPay\Models\Request;

/**
 * Class AuthToken
 * @package ShopAndPay\Models\Request
 */
class AuthToken extends \ShopAndPay\Models\Base
{
    protected $userId = 0;

    /**
     * The user id of the user you want an auth token for
     * 
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set the user id you would like to get an auth token for
     * 
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * {@inheritdoc}
     */
    public function getResponseModel()
    {
        return new \ShopAndPay\Models\Response\AuthToken();
    }
}

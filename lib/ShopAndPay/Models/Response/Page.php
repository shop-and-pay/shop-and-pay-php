<?php
/**
 * The Page response model
 * @copyright 2014 Shop & Pay
 * @since     v1.0
 */
namespace ShopAndPay\Models\Response;

/**
 * Class Page
 * @package ShopAndPay\Models\Response
 */
class Page extends \ShopAndPay\Models\Request\Page
{
    protected $createdAt = 0;

    /**
     * @return int
     */
    public function getCreatedDate()
    {
        return $this->createdAt;
    }

    /**
     * @param int $createdAt
     */
    public function setCreatedDate($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }
}

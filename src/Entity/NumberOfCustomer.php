<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class NumberOfCustomer
 * @package Hiboutik\Api\Client\Entity
 */
class NumberOfCustomer
{
    /**
     * @var string
     */
    protected $numberOfCustomer;

    /**
     * @var string
     */
    protected $dateAaaammdd;

    /**
     * @var int
     */
    protected $shopId;

    /**
     * @return string
     */
    public function getNumberOfCustomer()
    {
        return $this->numberOfCustomer;
    }

    /**
     * @param string $numberOfCustomer
     */
    public function setNumberOfCustomer($numberOfCustomer)
    {
        $this->numberOfCustomer = $numberOfCustomer;
    }

    /**
     * @return string
     */
    public function getDateAaaammdd()
    {
        return $this->dateAaaammdd;
    }

    /**
     * @param string $dateAaaammdd
     */
    public function setDateAaaammdd($dateAaaammdd)
    {
        $this->dateAaaammdd = $dateAaaammdd;
    }

    /**
     * @return int
     */
    public function getShopId()
    {
        return $this->shopId;
    }

    /**
     * @param int $shopId
     */
    public function setShopId($shopId)
    {
        $this->shopId = $shopId;
    }
}

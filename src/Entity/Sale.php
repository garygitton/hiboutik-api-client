<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class Sale
 * @package Hiboutik\Api\Client\Entity
 */
class Sale
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $completedAt;

    /**
     * @var int
     */
    protected $storeId;

    /**
     * @var int
     */
    protected $vendorId;

    /**
     * @var int
     */
    protected $uniqueSaleId;

    /**
     * @var int
     */
    protected $customerId;

    /**
     * @var int
     */
    protected $currency;

    /**
     * @var string
     */
    protected $currencyCode;

    /**
     * @var string
     */
    protected $total;

    /**
     * @var string
     */
    protected $billingAddress;

    /**
     * @var string
     */
    protected $shippingAddress;

    /**
     * @var string
     */
    protected $payment;

    /**
     * @var int
     */
    protected $dutyFreeSale;

    /**
     * @var int
     */
    protected $withoutTaxes;

    /**
     * @var int
     */
    protected $pricesWithoutTaxes;

    /**
     * @var string
     */
    protected $vatNumber;

    /**
     * @var \ArrayObject
     */
    protected $lineItems;

    public function __construct()
    {
        $this->lineItems = new \ArrayObject();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param string $createdAt
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    }

    /**
     * @return string
     */
    public function getCompletedAt()
    {
        return $this->completedAt;
    }

    /**
     * @param string $completedAt
     */
    public function setCompletedAt($completedAt)
    {
        $this->completedAt = $completedAt;
    }

    /**
     * @return int
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @param int $storeId
     */
    public function setStoreId($storeId)
    {
        $this->storeId = $storeId;
    }

    /**
     * @return int
     */
    public function getVendorId()
    {
        return $this->vendorId;
    }

    /**
     * @param int $vendorId
     */
    public function setVendorId($vendorId)
    {
        $this->vendorId = $vendorId;
    }

    /**
     * @return int
     */
    public function getUniqueSaleId()
    {
        return $this->uniqueSaleId;
    }

    /**
     * @param int $uniqueSaleId
     */
    public function setUniqueSaleId($uniqueSaleId)
    {
        $this->uniqueSaleId = $uniqueSaleId;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * @param int $customerId
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }

    /**
     * @return int
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param int $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }

    /**
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param string $total
     */
    public function setTotal($total)
    {
        $this->total = $total;
    }

    /**
     * @return string
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * @param string $billingAddress
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
    }

    /**
     * @return string
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * @param string $shippingAddress
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;
    }

    /**
     * @return string
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     * @param string $payment
     */
    public function setPayment($payment)
    {
        $this->payment = $payment;
    }

    /**
     * @return int
     */
    public function getDutyFreeSale()
    {
        return $this->dutyFreeSale;
    }

    /**
     * @param int $dutyFreeSale
     */
    public function setDutyFreeSale($dutyFreeSale)
    {
        $this->dutyFreeSale = $dutyFreeSale;
    }

    /**
     * @return int
     */
    public function getWithoutTaxes()
    {
        return $this->withoutTaxes;
    }

    /**
     * @param int $withoutTaxes
     */
    public function setWithoutTaxes($withoutTaxes)
    {
        $this->withoutTaxes = $withoutTaxes;
    }

    /**
     * @return int
     */
    public function getPricesWithoutTaxes()
    {
        return $this->pricesWithoutTaxes;
    }

    /**
     * @param int $pricesWithoutTaxes
     */
    public function setPricesWithoutTaxes($pricesWithoutTaxes)
    {
        $this->pricesWithoutTaxes = $pricesWithoutTaxes;
    }

    /**
     * @return string
     */
    public function getVatNumber()
    {
        return $this->vatNumber;
    }

    /**
     * @param string $vatNumber
     */
    public function setVatNumber($vatNumber)
    {
        $this->vatNumber = $vatNumber;
    }

    /**
     * @return \ArrayObject
     */
    public function getLineItems()
    {
        return $this->lineItems;
    }

    /**
     * @param \ArrayObject $lineItems
     */
    public function setLineItems($lineItems)
    {
        $this->lineItems = $lineItems;
    }
}

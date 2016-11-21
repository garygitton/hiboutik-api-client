<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class PaymentType
 * @package Hiboutik\Api\Client\Entity
 */
class PaymentType
{
    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $paymentType;

    /**
     * @var string
     */
    protected $accountingAccount;

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
    }

    /**
     * @return string
     */
    public function getPaymentType()
    {
        return $this->paymentType;
    }

    /**
     * @param string $paymentType
     */
    public function setPaymentType($paymentType)
    {
        $this->paymentType = $paymentType;
    }

    /**
     * @return string
     */
    public function getAccountingAccount()
    {
        return $this->accountingAccount;
    }

    /**
     * @param string $accountingAccount
     */
    public function setAccountingAccount($accountingAccount)
    {
        $this->accountingAccount = $accountingAccount;
    }
}

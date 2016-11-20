<?php

namespace Hiboutik\Api\Client\Entity;

class Item
{
    /**
     * @var int
     */
    protected $productId;

    /**
     * @var int
     */
    protected $productSize;

    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $productPrice;

    /**
     * @var string
     */
    protected $productCurrency;

    /**
     * @var string
     */
    protected $vat;

    /**
     * @var string
     */
    protected $package;

    /**
     * @var string
     */
    protected $points;

    /**
     * @var string
     */
    protected $discount;

    /**
     * @var string
     */
    protected $stockWithdrawal;

    /**
     * @var string
     */
    protected $creditNote;

    /**
     * @var int
     */
    protected $creditNoteId;

    /**
     * @var string
     */
    protected $productComments;

    /**
     * @var string
     */
    protected $serialNumber;

    /**
     * @var int
     */
    protected $detailCommandeId;

    /**
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @param int $productId
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    }

    /**
     * @return int
     */
    public function getProductSize()
    {
        return $this->productSize;
    }

    /**
     * @param int $productSize
     */
    public function setProductSize($productSize)
    {
        $this->productSize = $productSize;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param string $productPrice
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @return string
     */
    public function getProductCurrency()
    {
        return $this->productCurrency;
    }

    /**
     * @param string $productCurrency
     */
    public function setProductCurrency($productCurrency)
    {
        $this->productCurrency = $productCurrency;
    }

    /**
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param string $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param string $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return string
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param string $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param string $discount
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;
    }

    /**
     * @return string
     */
    public function getStockWithdrawal()
    {
        return $this->stockWithdrawal;
    }

    /**
     * @param string $stockWithdrawal
     */
    public function setStockWithdrawal($stockWithdrawal)
    {
        $this->stockWithdrawal = $stockWithdrawal;
    }

    /**
     * @return string
     */
    public function getCreditNote()
    {
        return $this->creditNote;
    }

    /**
     * @param string $creditNote
     */
    public function setCreditNote($creditNote)
    {
        $this->creditNote = $creditNote;
    }

    /**
     * @return int
     */
    public function getCreditNoteId()
    {
        return $this->creditNoteId;
    }

    /**
     * @param int $creditNoteId
     */
    public function setCreditNoteId($creditNoteId)
    {
        $this->creditNoteId = $creditNoteId;
    }

    /**
     * @return string
     */
    public function getProductComments()
    {
        return $this->productComments;
    }

    /**
     * @param string $productComments
     */
    public function setProductComments($productComments)
    {
        $this->productComments = $productComments;
    }

    /**
     * @return string
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param string $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return int
     */
    public function getDetailCommandeId()
    {
        return $this->detailCommandeId;
    }

    /**
     * @param int $detailCommandeId
     */
    public function setDetailCommandeId($detailCommandeId)
    {
        $this->detailCommandeId = $detailCommandeId;
    }
}

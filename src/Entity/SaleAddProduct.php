<?php
namespace Hiboutik\Api\Client\Entity;

/**
 * Class Sale
 * @package Hiboutik\Api\Client\Entity
 */
class SaleAddProduct implements \JsonSerializable
{
    /**
     * @var Sale
     */
    private $sale;

    /**
     * @var Product
     */
    private $product;

    /**
     * @var Size
     */
    private $size;

    /**
     * @var int
     */
    private $quantity;

    /**
     * @var int
     */
    private $stockWithdrawal;

    /**
     * @return Sale
     */
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * @param Sale $sale
     */
    public function setSale($sale)
    {
        $this->sale = $sale;
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return Size
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param Size $size
     */
    public function setSize($size)
    {
        $this->size = $size;
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
     * @return int
     */
    public function getStockWithdrawal()
    {
        return $this->stockWithdrawal;
    }

    /**
     * @param int $stockWithdrawal
     */
    public function setStockWithdrawal($stockWithdrawal)
    {
        $this->stockWithdrawal = $stockWithdrawal;
    }

    function jsonSerialize()
    {
        $data = [
            'quantity' => $this->quantity,
            'stock_withdrawal' => $this->stockWithdrawal
        ];

        if($this->sale instanceof Sale) {
            $data['sale_id'] = $this->sale->getId();
        }

        if($this->product instanceof Product) {
            $data['product_id'] = $this->product->getId();
            $data['product_price'] = $this->product->getPrice();
            $data['product_points'] = $this->product->getPoints();
            $data['product_comments'] = $this->product->getComments();
            $data['serial_number'] = $this->product->getSerialNumber();
        }

        if($this->size instanceof Size) {
            $data['size_id'] = $this->size->getId();
        }

        return $data;
    }
}

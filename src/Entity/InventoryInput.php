<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class CustomerList
 * @package Hiboutik\Api\Client\Entity
 */
class InventoryInput
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $productId;
    
    /**
     * @var int
     */
    protected $quantity;
    
    /**
     * @var string
     */
    protected $stockId;

    /**
     * @var string
     */
    protected $supplierId;

    /**
     * @var string
     */
    protected $label;

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
     * @return string
     */
    public function getStockId()
    {
        return $this->stockId;
    }

    /**
     * @param string $stockId
     */
    public function setStockId($stockId)
    {
        $this->stockId = $stockId;
    }

    /**
     * @return string
     */
    public function getSupplierId()
    {
        return $this->supplierId;
    }

    /**
     * @param string $supplierId
     */
    public function setSupplierId($supplierId)
    {
        $this->supplierId = $supplierId;
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel($label)
    {
        $this->label = $label;
    }
}
<?php

namespace Hiboutik\Api\Client\Entity;

class Product
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $model;

    /**
     * @var string
     */
    protected $barcode;

    /**
     * @var int
     */
    protected $brand;

    /**
     * @var int
     */
    protected $supplier;

    /**
     * @var string
     */
    protected $price;

    /**
     * @var string
     */
    protected $discountPrice;

    /**
     * @var string
     */
    protected $supplyPrice;

    /**
     * @var int
     */
    protected $category;

    /**
     * @var int
     */
    protected $sizeType;

    /**
     * @var int
     */
    protected $package;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var int
     */
    protected $stockManagement;

    /**
     * @var string
     */
    protected $supplierReference;

    /**
     * @var int
     */
    protected $vat;

    /**
     * @var int
     */
    protected $display;

    /**
     * @var string
     */
    protected $arch;

    /**
     * @var int
     */
    protected $serialNumber;

    /**
     * @var \ArrayObject
     */
    protected $sizeDetails;

    /**
     * @var \ArrayObject
     */
    protected $specificRules;

    /**
     * Product constructor.
     */
    public function __construct()
    {
        $this->sizeDetails = new \ArrayObject();
        $this->specificRules = new \ArrayObject();
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
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return int
     */
    public function getBrand()
    {
        return $this->brand;
    }

    /**
     * @param int $brand
     */
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }

    /**
     * @return int
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param int $supplier
     */
    public function setSupplier($supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param string $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getDiscountPrice()
    {
        return $this->discountPrice;
    }

    /**
     * @param string $discountPrice
     */
    public function setDiscountPrice($discountPrice)
    {
        $this->discountPrice = $discountPrice;
    }

    /**
     * @return string
     */
    public function getSupplyPrice()
    {
        return $this->supplyPrice;
    }

    /**
     * @param string $supplyPrice
     */
    public function setSupplyPrice($supplyPrice)
    {
        $this->supplyPrice = $supplyPrice;
    }

    /**
     * @return int
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param int $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getSizeType()
    {
        return $this->sizeType;
    }

    /**
     * @param int $sizeType
     */
    public function setSizeType($sizeType)
    {
        $this->sizeType = $sizeType;
    }

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getStockManagement()
    {
        return $this->stockManagement;
    }

    /**
     * @param int $stockManagement
     */
    public function setStockManagement($stockManagement)
    {
        $this->stockManagement = $stockManagement;
    }

    /**
     * @return string
     */
    public function getSupplierReference()
    {
        return $this->supplierReference;
    }

    /**
     * @param string $supplierReference
     */
    public function setSupplierReference($supplierReference)
    {
        $this->supplierReference = $supplierReference;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return int
     */
    public function getSerialNumber()
    {
        return $this->serialNumber;
    }

    /**
     * @param int $serialNumber
     */
    public function setSerialNumber($serialNumber)
    {
        $this->serialNumber = $serialNumber;
    }

    /**
     * @return int
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param int $package
     */
    public function setPackage($package)
    {
        $this->package = $package;
    }

    /**
     * @return int
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param int $display
     */
    public function setDisplay($display)
    {
        $this->display = $display;
    }

    /**
     * @return string
     */
    public function getArch()
    {
        return $this->arch;
    }

    /**
     * @param string $arch
     */
    public function setArch($arch)
    {
        $this->arch = $arch;
    }

    /**
     * @return \ArrayObject
     */
    public function getSizeDetails()
    {
        return $this->sizeDetails;
    }

    /**
     * @param \ArrayObject $sizeDetails
     */
    public function setSizeDetails($sizeDetails)
    {
        $this->sizeDetails = $sizeDetails;
    }

    /**
     * @return \ArrayObject
     */
    public function getSpecificRules()
    {
        return $this->specificRules;
    }

    /**
     * @param \ArrayObject $specificRules
     */
    public function setSpecificRules($specificRules)
    {
        $this->specificRules = $specificRules;
    }
}

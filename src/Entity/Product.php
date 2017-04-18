<?php
namespace Hiboutik\Api\Client\Entity;

/**
 * Class Product
 * @package Hiboutik\Api\Client\Entity
 */
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
     * @var Category
     */
    protected $category;

    /**
     * @var SizeType
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
     * @var array
     */
    protected $sizeDetails = [];

    /**
     * @var array
     */
    protected $specificRules = [];

    /**
     * @var string
     */
    protected $pointsIn;

    /**
     * @var string
     */
    protected $pointsOut;

    /**
     * @var int
     */
    protected $points;

    /**
     * @var string
     */
    protected $comments;

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
     * @return Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return SizeType
     */
    public function getSizeType()
    {
        return $this->sizeType;
    }

    /**
     * @param SizeType $sizeType
     */
    public function setSizeType($sizeType)
    {
        $this->sizeType = $sizeType;
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
     * @return array
     */
    public function getSizeDetails()
    {
        return $this->sizeDetails;
    }

    /**
     * @param array $sizeDetails
     */
    public function setSizeDetails(array $sizeDetails)
    {
        $this->sizeDetails = $sizeDetails;
    }

    /**
     * @return array
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

    /**
     * @return string
     */
    public function getPointsIn()
    {
        return $this->pointsIn;
    }

    /**
     * @param string $pointsIn
     */
    public function setPointsIn($pointsIn)
    {
        $this->pointsIn = $pointsIn;
    }

    /**
     * @return string
     */
    public function getPointsOut()
    {
        return $this->pointsOut;
    }

    /**
     * @param string $pointsOut
     */
    public function setPointsOut($pointsOut)
    {
        $this->pointsOut = $pointsOut;
    }

    /**
     * @return int
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @param int $points
     */
    public function setPoints($points)
    {
        $this->points = $points;
    }

    /**
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param string $comments
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
    }
}

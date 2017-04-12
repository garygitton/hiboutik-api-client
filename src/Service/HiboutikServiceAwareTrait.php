<?php

namespace Hiboutik\Api\Client\Service;

/**
 * Class HiboutikServiceAwareTrait
 * @package Hiboutik\Api\Client\Service
 */
trait HiboutikServiceAwareTrait
{
    /**
     * @var StoreService
     */
    protected $storeService;

    /**
     * @var ProductService
     */
    protected $productService;

    /**
     * @var SaleService
     */
    protected $saleService;

    /**
     * @var CustomerService
     */
    protected $customerService;

    /**
     * @param StoreService $storeService
     */
    public function setStoreService(StoreService $storeService)
    {
        $this->storeService = $storeService;
    }

    /**
     * @param ProductService $productService
     */
    public function setProductService(ProductService $productService)
    {
        $this->productService = $productService;
    }

    /**
     * @param CustomerService $customerService
     */
    public function setCustomerService(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    /**
     * @param SaleService $saleService
     */
    public function setSaleService(SaleService $saleService)
    {
        $this->saleService = $saleService;
    }
}

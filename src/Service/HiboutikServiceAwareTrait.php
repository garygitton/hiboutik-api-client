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
}

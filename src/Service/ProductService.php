<?php

namespace Hiboutik\Api\Client\Service;

/**
 * Class ProductService
 * @package Hiboutik\Api\Client\Service
 */
class ProductService extends HiboutikService
{
    const RESOURCE_NAME = 'products';
    
    /**
     * @var array $cache
     */
    protected $products = [];

    /**
     * Return details of a sale
     *
     * @param $id
     * @return array
     */
    public function fetch($id)
    {
        $product = $this->client->fetch(self::RESOURCE_NAME, $id);

        return $product;
    }

    /**
     * @return array
     */
    public function fetchAll()
    {
        $this->products = $this->client->fetchAll(self::RESOURCE_NAME);

        return $this->products;
    }
}

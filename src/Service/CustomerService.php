<?php

namespace Hiboutik\Api\Client\Service;

/**
 * Class SaleService
 * @package Hiboutik\Api\Client\Service
 */
class CustomerService extends HiboutikService
{
    const RESOURCE_NAME = 'customers';

    /**
     * @var array $cache
     */
    protected $customers = [];

    public function fetchAll()
    {
        $this->stores = $this->client->fetchAll(self::RESOURCE_NAME);

        return $this->stores;
    }

    public function fetch($id)
    {
        if (!$this->stores) {
            $this->fetchAll();
        }

        return $this->stores[$id];
    }
}

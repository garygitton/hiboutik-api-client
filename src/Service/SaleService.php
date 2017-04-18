<?php

namespace Hiboutik\Api\Client\Service;

/**
 * Class SaleService
 * @package Hiboutik\Api\Client\Service
 */
class SaleService extends HiboutikService
{
    const RESOURCE_NAME = 'sales';

    public function fetchAll()
    {
        $this->sales = $this->client->fetchAll(self::RESOURCE_NAME);

        return $this->sales;
    }

    public function fetch($id)
    {
        if (!$this->sales) {
            $this->fetchAll();
        }

        return $this->sales[$id];
    }
}

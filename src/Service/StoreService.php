<?php

namespace Hiboutik\Api\Client\Service;

/**
 * Class StoreService
 * @package Hiboutik\Api\Client\Service
 */
class StoreService extends HiboutikService
{
    const RESOURCE_NAME = 'stores';

    /**
     * @var array $cache
     */
    protected $stores = [];

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

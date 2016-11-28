<?php

namespace Hiboutik\Api\Client\Service;

use Hiboutik\Api\Client\HiboutikApiClient;

/**
 * Class AbstractService
 * @package Hiboutik\Api\Client\Service
 */
class HiboutikService
{
    /**
     * @var array
     */
    protected $cache;

    /**
     * @var HiboutikApiClient
     */
    protected $client;

    /**
     * @param HiboutikApiClient $client
     */
    public function setClient(HiboutikApiClient $client)
    {
        $this->client = $client;
    }
}
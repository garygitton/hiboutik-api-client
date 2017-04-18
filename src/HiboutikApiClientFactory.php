<?php

namespace Hiboutik\Api\Client;

use GuzzleHttp\Client;
use Interop\Container\ContainerInterface;
use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\HydratorPluginManager;

/**
 * Class HiboutikApiClientFactory
 * @package Hiboutik\Api\Client
 */
class HiboutikApiClientFactory
{
    /**
     * @param ContainerInterface $services
     * @return HiboutikApiClient
     */
    public function __invoke(ContainerInterface $services)
    {
        /** @var array $globalConfig */
        /** @var HydratorPluginManager $hydrators */
        /** @var ClassMethods $hydrator */
        /** @var Client $httpClient */

        $globalConfig = $services->get('config');
        $config = $this->getConfig($globalConfig);
        $httpClient = $services->get('http-client');

        $instance = new HiboutikApiClient();
        $instance->setConfig($config);
        $instance->setHttpClient($httpClient);

        return $instance;
    }

    /**
     * @param $globalConfig
     * @return array
     */
    protected function getConfig($globalConfig)
    {
        $config = $globalConfig['hiboutik'];

        if(!$config['api']) {
            throw new \InvalidArgumentException('Config key "api" does not exist for "hiboutik".');
        }

        if(!$config['api']['user']) {
            throw new \InvalidArgumentException('Config key "user" does not exist for "hiboutik -> api".');
        }

        if(!$config['api']['key']) {
            throw new \InvalidArgumentException('Config key "key" does not exist for "hiboutik -> api".');
        }

        if(!$config['api']['account']) {
            throw new \InvalidArgumentException('Config key "account" does not exist for "hiboutik -> api".');
        }

        if(!$config['debug']) {
            $config['debug'] = false;
        }

        return $config;
    }
}

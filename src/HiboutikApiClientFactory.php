<?php

namespace Hiboutik\Api\Client;


class HiboutikApiClientFactory
{
    /**
     * @param ServiceLocatorInterface $services
     * @return HiboutikApiClient
     */
    public function __invoke($services)
    {
        $globalConfig = $services->get('config');
        $config = $this->getConfig($globalConfig);

        $client = new HiboutikApiClient();
        $client->setAccount($config['api']['account']);
        $client->setUser($config['api']['user']);
        $client->setKey($config['api']['key']);
        $client->setDebug($config['debug']);

        return $client;
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

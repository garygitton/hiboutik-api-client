<?php

namespace Hiboutik\Api\Client;

use GuzzleHttp\ClientInterface;
use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\HydratorInterface;

/**
 * Class HiboutikApiClient
 * @package Hiboutik\Api\Client
 */
class HiboutikApiClient 
{
    const VERSION_API = '1.0.1';

    protected $config = [
        'debug' => false,
        'api' => [
            'account' => '',
            'user' => '',
            'key' => ''
        ]
    ];

    /**
     * @var ClientInterface
     */
    protected $httpClient;

    /**
     * @var HydratorInterface
     */
    protected $hydrator;
    
    /**
     * @param $resource
     * @return array
     */
    public function fetchAll($resource)
    {
        $uri = $this->getBaseUrl().'/'.$resource;

        $data = $this->request('GET', $uri);
        $modelEntity = $this->createEntityForResource($resource);

        $entities = [];
        foreach($data as $datum) {
            $datum = $this->reduceDataKey((array) $datum);
            $entity = clone $modelEntity;
            $entity = $this->hydrator->hydrate($datum, $entity);
            $entities[$entity->getId()] = $entity;
        }

        return $entities;
    }

    public function create($resource, \JsonSerializable $data)
    {
        $uri = $this->getBaseUrl().'/'.$resource;
        $data = $this->request('POST', $uri, $data);

        return $data;
    }

    public function update($resource, \JsonSerializable $data)
    {
        $uri = $this->getBaseUrl().'/'.$resource;
        $data = $this->request('PUT', $uri, $data);

        return $data;
    }

    public function delete($resource, $id)
    {
        $uri = $this->getBaseUrl().'/'.$resource.'/'.$id;
        $data = $this->request('DELETE', $uri);

        return $data;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
        return "https://" . $this->config['api']['account'] . ".hiboutik.com/apirest";
    }

    /**
     * @return array
     */
    public function getOptions()
    {
        $curlVersion = curl_version();

        $userAgent = "HiboutikAPI v" . self::VERSION_API;
        $userAgent .= " (+https://github.com/garygitton/hiboutik-api-client)";
        $userAgent .= " PHP/" . PHP_VERSION;
        $userAgent .= ' curl/' . $curlVersion['version'];

        $options = [
            'auth' => [
                $this->config['api']['user'],
                $this->config['api']['key']
            ],
            'headers' => [
                'User-Agent' => $userAgent,
                'Accept' => 'application/json',
                'Content-Type' => 'application/json'
            ]
        ];

        return $options;
    }

    /**
     * @param $method
     * @param string $uri
     * @param \JsonSerializable|null $entity
     * @return array $data
     */
    public function request($method, $uri = '', \JsonSerializable $entity = null)
    {
        $options = $this->getOptions();

        if($entity) {
            $options['body'] = $entity->jsonSerialize();
        }

        $response = $this->httpClient->request($method, $uri, $options);
        $stream = $response->getBody();
        $contents = $stream->getContents();
        $data = json_decode($contents);

        return $data;
    }

    public function reduceDataKey($data)
    {
        $newData = [];
        foreach($data as $key => $value) {
            $keyParts = explode('_', $key);
            array_shift($keyParts);
            $newKey = implode('_', $keyParts);
            $newData[$newKey] = $data[$key];
        }

        return $newData;
    }

    /**
     * @param $resource
     * @return mixed
     */
    public function createEntityForResource($resource)
    {
        $resource = preg_replace('/s$/', '', $resource);
        $resource = preg_replace('/ies$/', 'y', $resource);
        $resource = ucfirst($resource);
        $fqcn = '\\Hiboutik\Api\\Client\\Entity\\'.$resource;
        $instance = new $fqcn();

        return $instance;
    }

    /**
     * @param $config
     */
    public function setConfig($config)
    {
        $this->config = $config;
    }

    /**
     * @param ClientInterface $httpClient
     */
    public function setHttpClient(ClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }

    /**
     * @param HydratorInterface $hydrator
     */
    public function setHydrator(HydratorInterface $hydrator) 
    {
        $this->hydrator = $hydrator;
    }
}

<?php

namespace Hiboutik\Api\Client;

use GuzzleHttp\ClientInterface;
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
     * @param $id
     * @return mixed
     */
    public function fetch($resource, $id)
    {
        $uri = $this->getBaseUrl().'/'.$resource.'/'.$id;
        $data = $this->request('GET', $uri);
        $dataRow = (array) $data[0];

        $entity = $this->createEntityWithResourceName($resource);

        $hydrator = new HiboutikApiClientHydrator();
        $hydrator->hydrate($dataRow, $entity);
        

        $data = $this->reduceDataKey((array) $data[0]);

        return $entity;
    }

    /**
     * @param $resource
     * @return array
     */
    public function fetchAll($resource)
    {
        $uri = $this->getBaseUrl().'/'.$resource;

        $data = $this->request('GET', $uri);
        $modelEntity = $this->createEntityWithResourceName($resource);

        $entities = [];
        foreach($data as $datum) {
            $datum = $this->reduceDataKey((array) $datum);
            $entity = clone $modelEntity;
            $entity = $this->hydrator->hydrate($datum, $entity);
            $entities[$entity->getId()] = $entity;
        }

        return $entities;
    }

    /**
     * @param $resource
     * @param \JsonSerializable $data
     * @return array|\JsonSerializable
     */
    public function create($resource, \JsonSerializable $data)
    {
        $uri = $this->getBaseUrl().'/'.$resource;
        $data = $this->request('POST', $uri, $data);

        return $data;
    }

    /**
     * @param $resource
     * @param \JsonSerializable $data
     * @return array|\JsonSerializable
     */
    public function update($resource, \JsonSerializable $data)
    {
        $uri = $this->getBaseUrl().'/'.$resource;
        $data = $this->request('PUT', $uri, $data);

        return $data;
    }

    /**
     * @param $resource
     * @param $id
     * @return array
     */
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

    /**
     * @param $data
     * @return array
     */
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
     * @param $resourceName
     * @return bool
     */
    public function createEntityWithResourceName($resourceName)
    {
        $resourceName = preg_replace('/s$/', '', $resourceName);
        $resourceName = preg_replace('/ies$/', 'y', $resourceName);
        $resourceName = ucfirst($resourceName);

        $fqcn = '\\Hiboutik\Api\\Client\\Entity\\'.$resourceName;

        if(!class_exists($fqcn)) {
            throw new \RuntimeException('Class named '.$fqcn.' does not exist');
        }

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

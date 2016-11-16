<?php

namespace Hiboutik\Api\Client;

use GuzzleHttp\Client;
use ZFTest\Hal\TestAsset\JsonSerializable;

/**
 * Class HiboutikApiClient
 * @package Hiboutik\Api\Client
 */
class HiboutikApiClient extends Client
{
    const VERSION_API = '1.0.1';

    /**
     * Account name of the shop
     *
     * Example: myShop
     *
     * @var string
     */
    protected $account;

    /**
     * Email Address of the user
     *
     * Example: name@my-shop.com
     *
     * @var string
     */
    protected $user;

    /**
     * Api Key of the user
     *
     * Example: FDFDSFSD646478768YUTUTYUTJJGHHJHGHJ
     *
     * @var string
     */
    protected $key;

    /**
     * Base url of the api construct
     *
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $userAgent;

    /**
     * @var bool
     */
    protected $debug = false;

    /**
     * Guzzle options
     *
     * @var array
     */
    protected $options;

    public function fetch($resource, $id)
    {
        return $this->fetchAll($resource);
    }

    public function fetchAll($resource)
    {
        $options = $this->getOptions();
        $uri = $this->getBaseUrl().'/'.$resource;

        $response = $this->request('GET', $uri, $options);
        $data = $response->getBody();

        return $data;
    }

    public function create($resource, \JsonSerializable $data)
    {
        $options = $this->getOptions();
        $options['body'] = json_encode($data);
        $uri = $this->getBaseUrl().'/'.$resource;

        $response = $this->request('POST', $uri, $options);
        $data = $response->getBody();

        return $data;
    }

    public function update($resource, \JsonSerializable $data)
    {
        $options = $this->getOptions();
        $options['body'] = json_encode($data);
        $uri = $this->getBaseUrl().'/'.$resource;

        $response = $this->request('PUT', $uri, $options);
        $data = $response->getBody();

        return $data;
    }

    public function delete($resource, $id)
    {
        $uri = $this->getBaseUrl().'/'.$resource.'/'.$id;
        $response = $this->request('DELETE', $uri, $this->getOptions());
        $data = $response->getBody();

        return $data;
    }

    public function getBaseUrl()
    {
        if (!$this->baseUrl) {
            $this->baseUrl = "https://" . $this->account . ".hiboutik.com/apirest";
        }

        return $this->baseUrl;
    }

    public function getUserAgent()
    {
        if (!$this->userAgent) {
            $curlVersion = curl_version();

            $this->userAgent = "HiboutikAPI v" . self::VERSION_API;
            $this->userAgent .= " (+https://github.com/garygitton/hiboutik-api-client)";
            $this->userAgent .= " PHP/" . PHP_VERSION;
            $this->userAgent .= ' curl/' . $curlVersion['version'];
        }

        return $this->userAgent;
    }

    public function getOptions()
    {
        if (!$this->options) {
            $this->options = [
                'auth' => [
                    $this->user,
                    $this->key
                ],
                'headers' => [
                    'User-Agent' => $this->getUserAgent(),
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json'
                ]
            ];
        }

        return $this->options;
    }

    /**
     * @param string $key
     */
    public function setKey($key)
    {
        $this->key = $key;
    }

    /**
     * @param string $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @param string $account
     */
    public function setAccount($account)
    {
        $this->account = $account;
    }

    /**
     * @param boolean $debug
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }
}

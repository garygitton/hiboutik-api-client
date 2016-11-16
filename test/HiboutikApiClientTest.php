<?php

namespace Hiboutik\Api\Client\Test;

use Hiboutik\Api\Client\HiboutikApiClient;
use PHPUnit\Framework\TestCase;

class HiboutikApiClientTest extends TestCase
{
    public function testGetBaseUrl()
    {
        $user = 'name@my-shop.com';
        $account = 'my-shop';
        $key = '65465454HHGFHFGHFGHFG';
        $baseUrlExpected = "https://".$account.".hiboutik.com/apirest";

        $hiboutikApiClient = new HiboutikApiClient();
        $hiboutikApiClient->setUser($user);
        $hiboutikApiClient->setAccount($account);
        $hiboutikApiClient->setKey($key);

        $baseUrl = $hiboutikApiClient->getBaseUrl();

        $this->assertEquals($baseUrlExpected, $baseUrl);
    }
}

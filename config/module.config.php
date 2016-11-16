<?php

namespace Hiboutik;

use Hiboutik\Api\Client\HiboutikApiClient;
use Hiboutik\Api\Client\HiboutikApiClientFactory;

return [
    'service_manager' => [
        'factories' => [
            HiboutikApiClient::class => HiboutikApiClientFactory::class
        ]
    ]
];
<?php

namespace Hiboutik\Api\Client;

use Hiboutik\Api\Client\Service\HiboutikServiceAbstractFactory;
use GuzzleHttp\Client as HttpClient;

return [
    'service_manager' => [
        'invokables' => [
            'http-client' => HttpClient::class
        ],
        'factories' => [
            HiboutikApiClient::class => HiboutikApiClientFactory::class
        ],
        'abstract_factories' => [
            HiboutikServiceAbstractFactory::class
        ]
    ],
    'hydrators' => [
        'factories' => [
            HiboutikApiClientHydrator::class => HiboutikApiClientHydratorFactory::class
        ]
    ]
];

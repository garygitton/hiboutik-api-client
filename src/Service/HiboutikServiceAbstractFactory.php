<?php

namespace Hiboutik\Api\Client\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\AbstractFactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Class HiboutikServiceAbstractFactory
 * @package Hiboutik\Api\Client\Service
 */
class HiboutikServiceAbstractFactory implements AbstractFactoryInterface
{
    /**
     * @var HiboutikService|null
     */
    protected static $instance;

    /**
     * @inheritdoc
     */
    public function canCreate(ContainerInterface $container, $requestedName)
    {
        if (!class_exists($requestedName)) {
            return false;
        }

        self::$instance = new $requestedName();

        if (! self::$instance instanceof HiboutikService) {
            return false;
        }

        return true;
    }

    /**
     * @inheritdoc
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $hiboutikApiClient = $container->get('Hiboutik\\Api\\Client\\HiboutikApiClient');
        
        self::$instance->setClient($hiboutikApiClient);

        return self::$instance;
    }
}

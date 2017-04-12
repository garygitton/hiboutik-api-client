<?php 

namespace Hiboutik\Api\Client;

use Zend\Hydrator\ClassMethods;
use Zend\Hydrator\HydratorInterface;

class HiboutikApiClientHydrator implements HydratorInterface
{
    /**
     * @var ClassMethods
     */
    protected $hydrator;

    /**
     * HiboutikApiClientHydrator constructor.
     */
    public function __construct()
    {
        $this->hydrator = new ClassMethods();
    }

    /**
     * @param object $object
     * @return array|mixed
     */
    public function extract($object)
    {
        $data = $this->extract($object);

        return $data;
    }

    /**
     * @param array $data
     * @param object $object
     * @return object
     */
    public function hydrate(array $data, $object)
    {
        $this->hydrator->hydrate($data, $object);

        $dataWithShortKey = [];
        foreach($data as $key => $value) {
            $keyParts = explode('_', $key);
            array_shift($keyParts);
            $newKey = implode('_', $keyParts);
            $dataWithShortKey[$newKey] = $data[$key];
        }

        return $object;
    }
}

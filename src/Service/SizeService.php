<?php
namespace Hiboutik\Api\Client\Service;

use Hiboutik\Api\Client\Entity\Size;
use Hiboutik\Api\Client\Entity\SizeType;

/**
 * Class ProductService
 * @package Hiboutik\Api\Client\Service
 */
class SizeService extends HiboutikService
{
    const RESOURCE_NAME = 'sizes';

    /**
     * @var array $cache
     */
    protected $sizes = [];

    /**
     * Ok for the moment only support size of tyme TIMEE !!
     * @param SizeType $sizeType
     * @param $name
     * @return Size|null
     */
    public function getByTypeAndName(SizeType $sizeType, $name)
    {
        $dataSizes = $this->client->fetchAll(self::RESOURCE_NAME.'/'.$sizeType->getId());
        $name = strtolower($name);

        foreach($dataSizes as $dataSize) {
            $pattern = "/[^0123456789h]/";
            $sizeName = preg_replace($pattern, "", $dataSize['size_name']);

            if($sizeName !== $name) {
                continue;
            }

            $size = new Size();
            $size->exchangeArray($dataSize);

            return $size;
        }

        return null;
    }

    /**
     * @param SizeType $sizeType
     * @return array
     */
    public function getAllByType(SizeType $sizeType)
    {
        $dataSizes = $this->client->fetchAll(self::RESOURCE_NAME.'/'.$sizeType->getId());

        $sizes = [];
        foreach($dataSizes as $dataSize) {
            $size = new Size();
            $size->exchangeArray((array) $dataSize);

            $sizes[] = $size;
        }

        return $sizes;
    }
}

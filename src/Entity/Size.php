<?php
namespace Hiboutik\Api\Client\Entity;

/**
 * Class Size
 * @package Hiboutik\Api\Client\Entity
 */
class Size implements \JsonSerializable
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $barcode;

    /**
     * @var int
     */
    protected $typeId;

    /**
     * @var boolean
     */
    protected $enabled;

    /**
     * @var int
     */
    protected $position;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * @param string $barcode
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;
    }

    /**
     * @return int
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * @param int $typeId
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     */
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param int $position
     */
    public function setPosition($position)
    {
        $this->position = $position;
    }

    /**
     * @param array $array
     */
    public function exchangeArray(array $array)
    {
        if($array['size_id']) {
            $this->id = $array['size_id'];
        }

        if($array['size_type_id']) {
            $this->typeId = $array['size_type_id'];
        }

        if($array['size_name']) {
            $this->name = $array['size_name'];
        }

        if($array['size_enabled']) {
            $this->enabled = $array['size_enabled'];
        }

        if($array['size_position']) {
            $this->position = $array['size_position'];
        }
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        return [
            'size_id' => $this->id,
            'size_type_id' => $this->typeId,
            'size_name' => $this->name,
            'size_enabled' => $this->enabled,
            'size_position' => $this->position
        ];
    }

    /**
     * @return array
     */
    function jsonSerialize()
    {
        return $this->getArrayCopy();
    }
}

<?php
namespace Hiboutik\Api\Client\Entity;

/**
 * Class CustomerUpdate
 * @package Hiboutik\Api\Client\Entity
 */
class CustomerUpdate implements \JsonSerializable
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $attribute;

    /**
     * @var mixed
     */
    protected $newValue;

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
    public function getAttribute()
    {
        return $this->attribute;
    }

    /**
     * @param string $attribute
     */
    public function setAttribute($attribute)
    {
        $this->attribute = $attribute;
    }

    /**
     * @return mixed
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @param mixed $newValue
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;
    }

    /**
     * @return array
     */
    function jsonSerialize()
    {
        return [
            'customers_id' => $this->id,
            'customers_attribute' => $this->attribute,
            'new_value' => $this->newValue
        ];
    }
}

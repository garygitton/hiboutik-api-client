<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class Attribute
 * @package Hiboutik\Api\Client\Entity
 */
class Attribute
{
    /**
     * @var string
     */
    protected $attribute;

    /**
     * @var string
     */
    protected $newValue;

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
     * @return string
     */
    public function getNewValue()
    {
        return $this->newValue;
    }

    /**
     * @param string $newValue
     */
    public function setNewValue($newValue)
    {
        $this->newValue = $newValue;
    }
    
    
}

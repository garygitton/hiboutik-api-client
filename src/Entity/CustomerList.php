<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class CustomerList
 * @package Hiboutik\Api\Client\Entity
 */
class CustomerList
{
    /**
     * @var int
     */
    protected $id;

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
}

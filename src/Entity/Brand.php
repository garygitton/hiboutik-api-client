<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class Brand
 * @package Hiboutik\Api\Client\Entity
 */
class Brand
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
     * @var int
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
}
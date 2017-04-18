<?php
namespace Hiboutik\Api\Client\Entity;

/**
 * Class Tag
 * @package Hiboutik\Api\Client\Entity
 */
class Tag
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
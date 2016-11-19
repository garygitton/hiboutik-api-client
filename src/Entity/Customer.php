<?php

namespace Hiboutik\Api\Client\Entity;

/**
 * Class Customer
 * @package Hiboutik\Api\Client\Entity
 */
class Customer
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $country;

    /**
     * @var string
     */
    protected $taxNumber;

    /**
     * @var string
     */
    protected $phoneNumber;

    /**
     * @var string
     */
    protected $birthDate;
}

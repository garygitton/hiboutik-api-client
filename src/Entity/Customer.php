<?php
namespace Hiboutik\Api\Client\Entity;

/**
 * Class Customer
 * @package Hiboutik\Api\Client\Entity
 */
class Customer implements \JsonSerializable
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

    /**
     * @var int
     */
    protected $vat;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var boolean
     */
    protected $isNew;

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
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return string
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * @param string $taxNumber
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param string $birthDate
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }

    /**
     * @return int
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param int $vat
     */
    public function setVat($vat)
    {
        $this->vat = $vat;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return bool
     */
    public function isNew()
    {
        return $this->isNew;
    }

    /**
     * @param bool $isNew
     */
    public function setIsNew(bool $isNew)
    {
        $this->isNew = $isNew;
    }


    /**
     * @param array $array
     */
    public function exchangeArray(array $array)
    {
        if(isset($array['customers_first_name'])) {
            $this->firstName = $array['customers_first_name'];
        }

        if(isset($array['customers_last_name'])) {
            $this->lastName = $array['customers_last_name'];
        }

        if(isset($array['customers_email'])) {
            $this->email = $array['customers_email'];
        }

        if(isset($array['customers_country'])) {
            $this->country = $array['customers_country'];
        }

        if(isset($array['customers_tax_number'])) {
            $this->taxNumber = $array['customers_tax_number'];
        }
        if(isset($array['customers_phone_number'])) {
            $this->phoneNumber = $array['customers_phone_number'];
        }

        if(isset($array['customers_birth_date'])) {
            $this->birthDate = \DateTime::createFromFormat('Y-m-d', $array['customers_birth_date']);
        }

        if(isset($array['customers_id'])) {
            $this->id = $array['customers_id'];
        }

        if(isset($array['last_name'])) {
            $this->lastName = $array['last_name'];
        }

        if(isset($array['first_name'])) {
            $this->firstName = $array['first_name'];
        }

        if(isset($array['email'])) {
            $this->email = $array['email'];
        }

        if(isset($array['phone'])) {
            $this->phoneNumber = $array['phone'];
        }

        if(isset($array['vat'])) {
            $this->vat = $array['vat'];
        }

        if(isset($array['country'])) {
            $this->country = $array['country'];
        }

        if(isset($array['date_of_birth'])) {
            $this->birthDate = \DateTime::createFromFormat('Y-m-d', $array['date_of_birth']);
        }

        if(isset($array['customers_code'])) {
            $this->code = $array['customers_code'];
        }
    }

    /**
     * @return array
     */
    public function getArrayCopy()
    {
        $data = [
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'country' => $this->country,
            'tax_number' => $this->taxNumber,
            'birth_date' => $this->birthDate,
            'phone_number' => $this->phoneNumber,
            'phone' => $this->phoneNumber,
            'customers_first_name' => $this->firstName,
            'customers_last_name' => $this->lastName,
            'customers_email' => $this->email,
            'customers_country' => $this->country,
            'customers_tax_number' => $this->taxNumber,
            'customers_birth_date' => $this->birthDate,
            'customers_phone_number' => $this->phoneNumber,
        ];

        if($this->birthDate instanceof \DateTime) {
            $data['customers_birth_date'] = $this->birthDate->format('Y-m-d');
        }

        return $data;
    }

    /**
     * @return array
     */
    function jsonSerialize()
    {
       return $this->getArrayCopy();
    }
}

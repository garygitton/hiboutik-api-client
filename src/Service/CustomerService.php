<?php
namespace Hiboutik\Api\Client\Service;

use Hiboutik\Api\Client\Entity\Customer;
use Hiboutik\Api\Client\Entity\CustomerUpdate;

/**
 * Class SaleService
 * @package Hiboutik\Api\Client\Service
 */
class CustomerService extends HiboutikService
{
    /**
     * @param $email
     * @return Customer|null
     */
    public function getOneByEmail($email)
    {
        $customer = $this->findOneByEmail($email);

        if (! $customer instanceof Customer) {
            $customer = new Customer();
            $customer->setEmail($email);

            $this->create($customer);
        }

        return $customer;
    }

    public function findOneByEmail($email)
    {
        try {
            $dataCustomers = $this->client->fetchAll('search/customers?email=' . $email);
        } catch(\Exception $e) {
            return null;
        }

        $customer = new Customer();
        $customer->exchangeArray($dataCustomers[0]);

        return $customer;
    }

    public function findAll()
    {
        try {
            $dataCustomers = $this->client->fetchAll("/customers");
        } catch(\Exception $e) {
            return null;
        }

        $customers = [];
        foreach($dataCustomers as $dataCustomer) {
            $customer = new Customer();
            $customer->exchangeArray($dataCustomer);

            $customers[] = $customer;
        }

        return $customers;
    }

    public function find($id)
    {
        try {
            $dataCustomers = $this->client->fetchAll("/customer/$id");
        } catch(\Exception $e) {
            return null;
        }

        $customer = new Customer();
        $customer->exchangeArray($dataCustomers[0]);

        return $customer;
    }

    public function create(Customer $customer)
    {
        $customerData = $this->client->create('customers', $customer);
        $customer->exchangeArray($customerData);
    }

    /**
     * @param Customer $customer
     */
    public function save(Customer $customer)
    {
        $customerData = $customer->getArrayCopy();

        $ignoredAttributes = [
            'email',
            'tax_number',
            'birth_date',
            'phone_number',
            'customers_first_name',
            'customers_last_name',
            'customers_email',
            'customers_country',
            'customers_tax_number',
            'customers_birth_date',
            'customers_phone_number',
        ];

        foreach ($customerData as $attribute => $value) {
            if (in_array($attribute, $ignoredAttributes)) {
                continue;
            }

            $customerUpdate = new CustomerUpdate();
            $customerUpdate->setId($customer->getId());
            $customerUpdate->setAttribute($attribute);
            $customerUpdate->setNewValue($value);

            try {
                $this->client->update('customer/' . $customer->getId(), $customerUpdate);
            }  catch(\Exception $e) {
                error_log($e->getMessage());
            }
        }
    }
}

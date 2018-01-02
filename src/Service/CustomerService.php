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
     * @return Customer
     */
    public function getByEmail($email)
    {
        $customer = new Customer();

        try {
            $dataCustomers = $this->client->fetchAll('search/customers?email=' . $email);
            $customer->exchangeArray($dataCustomers[0]);
        } catch (\Exception $e) {
            $customer->setEmail($email);

            $data = $this->client->create('customers', $customer);
            $dataCustomer = $this->client->fetchAll('/customer/' .$data['customers_id']);
            $customer->exchangeArray($dataCustomer);
        }

        return $customer;
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
            if(in_array($attribute, $ignoredAttributes)) {
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

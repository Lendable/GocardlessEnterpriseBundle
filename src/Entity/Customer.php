<?php

namespace Gocardless\EnterpriseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Customer extends \GoCardless\Enterprise\Model\Customer
{
    public function __construct()
    {
        $this->bankAccounts = new ArrayCollection();
    }

    /**
     * @param CustomerBankAccount $bankAccount
     */
    public function addBankAccount(CustomerBankAccount $bankAccount)
    {
        $this->bankAccounts[] = $bankAccount;
        $bankAccount->setCustomer($this);
    }

    /**
     * @param CustomerBankAccount $bankAccount
     */
    public function removeBankAccount(CustomerBankAccount $bankAccount)
    {
        $this->bankAccounts->removeElement($bankAccount);
    }

    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

<?php

namespace Gocardless\EnterpriseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Customer extends \GoCardless\Enterprise\Model\Customer
{
    public function __construct()
    {
        $this->bank_accounts = new ArrayCollection();
    }

    /**
     * @param CustomerBankAccount $bankAccount
     */
    public function addBankAccount(CustomerBankAccount $bankAccount)
    {
        $this->bank_accounts[] = $bankAccount;
        $bankAccount->setCustomer($this);
    }

    /**
     * @param CustomerBankAccount $bankAccount
     */
    public function removeBankAccount(CustomerBankAccount $bankAccount)
    {
        $this->bank_accounts->removeElement($bankAccount);
    }

    public function fromArray(array $data): void
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

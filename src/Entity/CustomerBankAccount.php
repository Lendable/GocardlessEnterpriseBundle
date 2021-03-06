<?php

namespace Lendable\GoCardlessEnterpriseBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class CustomerBankAccount extends \Lendable\GoCardlessEnterprise\Model\CustomerBankAccount
{
    public function __construct()
    {
        $this->mandates = new ArrayCollection();
    }

    /**
     * @param Mandate $mandate
     */
    public function addMandate(Mandate $mandate)
    {
        $this->mandates[] = $mandate;
        $mandate->setCustomerBankAccount($this);
    }

    /**
     * @param Mandate $mandate
     */
    public function removeMandate(Mandate $mandate)
    {
        $this->mandates->removeElement($mandate);
    }

    public function fromArray($data)
    {
        parent::fromArray($data);
        if (array_key_exists('account_number_ending', $data) && !$this->getAccountNumber()) {
            $prefix = str_repeat('*', max(0, 8 - strlen($data['account_number_ending'])));
            $this->setAccountNumber($prefix.$data['account_number_ending']);
        }
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

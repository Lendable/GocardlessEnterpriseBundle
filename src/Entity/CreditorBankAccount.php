<?php

namespace Lendable\GoCardlessEnterpriseBundle\Entity;

class CreditorBankAccount extends \Lendable\GoCardlessEnterprise\Model\CreditorBankAccount
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

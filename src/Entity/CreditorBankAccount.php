<?php

namespace Gocardless\EnterpriseBundle\Entity;

class CreditorBankAccount extends \GoCardless\Enterprise\Model\CreditorBankAccount
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

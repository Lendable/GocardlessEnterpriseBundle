<?php

namespace Gocardless\EnterpriseBundle\Entity;

class CreditorBankAccount extends \GoCardless\Enterprise\Model\CreditorBankAccount
{
    public function fromArray(array $data): void
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

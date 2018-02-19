<?php

namespace Gocardless\EnterpriseBundle\Entity;

class Payment extends \GoCardless\Enterprise\Model\Payment
{
    public function fromArray(array $data): void
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

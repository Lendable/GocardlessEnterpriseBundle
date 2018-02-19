<?php

namespace Gocardless\EnterpriseBundle\Entity;

class Creditor extends \GoCardless\Enterprise\Model\Creditor
{
    public function fromArray(array $data): void
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

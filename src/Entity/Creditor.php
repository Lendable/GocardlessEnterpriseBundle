<?php

namespace Gocardless\EnterpriseBundle\Entity;

class Creditor extends \GoCardless\Enterprise\Model\Creditor
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

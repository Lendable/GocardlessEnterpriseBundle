<?php

namespace Gocardless\EnterpriseBundle\Entity;

class Payment extends \GoCardless\Enterprise\Model\Payment
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

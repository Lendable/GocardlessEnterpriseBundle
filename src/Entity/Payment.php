<?php

namespace Lendable\GoCardlessEnterpriseBundle\Entity;

class Payment extends \Lendable\GoCardlessEnterprise\Model\Payment
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

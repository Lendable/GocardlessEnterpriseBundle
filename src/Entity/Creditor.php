<?php

namespace Lendable\GoCardlessEnterpriseBundle\Entity;

class Creditor extends \Lendable\GoCardlessEnterprise\Model\Creditor
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

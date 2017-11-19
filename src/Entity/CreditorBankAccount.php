<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 13/11/2014
 * Time: 10:37.
 */

namespace Gocardless\EnterpriseBundle\Entity;

class CreditorBankAccount extends \GoCardless\Enterprise\Model\CreditorBankAccount
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

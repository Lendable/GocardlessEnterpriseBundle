<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 13/11/2014
 * Time: 10:38.
 */

namespace Gocardless\EnterpriseBundle\Entity;

class Payment extends \GoCardless\Enterprise\Model\Payment
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

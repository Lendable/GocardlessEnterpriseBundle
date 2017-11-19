<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 13/11/2014
 * Time: 10:16.
 */

namespace Gocardless\EnterpriseBundle\Entity;

class Creditor extends \GoCardless\Enterprise\Model\Creditor
{
    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }
}

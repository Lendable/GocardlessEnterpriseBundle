<?php
/**
 * Created by PhpStorm.
 * User: Paul
 * Date: 13/11/2014
 * Time: 10:37.
 */

namespace Gocardless\EnterpriseBundle\Entity;

use Gedmo\Mapping\Annotation as Gedmo;

class Mandate extends \GoCardless\Enterprise\Model\Mandate
{
    /**
     * @var \DateTime
     */
    protected $updated;

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     */
    public function setUpdated(\DateTime $updated)
    {
        $this->updated = $updated;
    }

    /**
     * @var string
     */
    protected $pdfPath;

    /**
     * @param string $path
     */
    public function setPdfPath($path)
    {
        $this->pdfPath = $path;
    }

    /**
     * @return string
     */
    public function getPdfPath()
    {
        return $this->pdfPath;
    }

    public function toArray()
    {
        $arr = parent::toArray();
        if (array_key_exists("pdfPath", $arr)) {
            unset($arr["pdfPath"]);
        }

        return $arr;
    }

    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }

    public function isActive()
    {
        return !in_array($this->getStatus(), array("failed", "cancelled"));
    }
}

<?php

namespace Lendable\GoCardlessEnterpriseBundle\Entity;

class Mandate extends \Lendable\GoCardlessEnterprise\Model\Mandate
{
    /**
     * @var \DateTimeInterface
     */
    protected $updated;

    /**
     * @return \DateTimeInterface
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param \DateTimeInterface $updated
     */
    public function setUpdated(\DateTimeInterface $updated)
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
        if (array_key_exists('pdfPath', $arr)) {
            unset($arr['pdfPath']);
        }

        return $arr;
    }

    public function fromArray($data)
    {
        parent::fromArray($data);
        $this->setCreatedAt(new \DateTime($this->getCreatedAt()));
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return !in_array($this->getStatus(), ['failed', 'cancelled']);
    }
}

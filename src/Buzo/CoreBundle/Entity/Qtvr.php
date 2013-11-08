<?php

namespace Buzo\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 */
class Qtvr
{
    use \Msi\AdminBundle\Doctrine\Extension\Model\Timestampable;
    use \Msi\AdminBundle\Doctrine\Extension\Model\Uploadable;

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $secret;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $filename;

    protected $filenameFile;

    public function __construct()
    {
        $this->secret = base_convert(sha1(uniqid(mt_rand(), true)), 16, 36);
    }

    public function getUploadFields()
    {
        return ['filename'];
    }

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    public function getFilenameFile()
    {
        return $this->filenameFile;
    }

    public function setFilenameFile($filenameFile)
    {
        $this->filenameFile = $filenameFile;
        $this->updatedAt = new \DateTime();

        return $this;
    }

    public function getSecret()
    {
        return $this->secret;
    }

    public function setSecret($secret)
    {
        $this->secret = $secret;

        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function __toString()
    {
        return (string) $this->id;
    }
}

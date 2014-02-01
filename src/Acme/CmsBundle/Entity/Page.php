<?php

namespace Acme\CmsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Msi\CmsBundle\Model\Page as BasePage;

/**
 * @ORM\Entity(repositoryClass="Acme\CmsBundle\Entity\PageRepository")
 */
class Page extends BasePage
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}

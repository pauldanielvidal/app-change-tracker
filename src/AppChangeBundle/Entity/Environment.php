<?php

namespace AppChangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;


/**
 * Environment
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="AppChangeBundle\Entity\Repository\EnvironmentRepository")
 */
class Environment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity="ApplicationURL", mappedBy="environment", orphanRemoval=true, cascade={"persist", "remove", "merge"})
     * @Serializer\Exclude
     */
    private $application_urls;

    /**
     * @ORM\OneToMany(targetEntity="ChangeLog", mappedBy="environment", orphanRemoval=true, cascade={"persist", "remove", "merge"})
     * @Serializer\Exclude
     */
    private $changelogs;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer")
     */
    private $sortOrder;


    public function __toString() {
        return $this->name;
    }


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get list of ApplicationURLs
     *
     * @return array()
     */
    public function getApplicationURLs()
    {
        return $this->application_urls;
    }

    /**
     * Get list of changelogs
     *
     * @return array()
     */
    public function getChangeLogs()
    {
        return $this->changelogs;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Environment
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     *
     * @return Status
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }
}


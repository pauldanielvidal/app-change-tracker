<?php

namespace AppChangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;

/**
 * Application
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Application
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
     * @ORM\OneToOne(targetEntity="ServiceNowConfig", mappedBy="application", orphanRemoval=true, cascade={"persist", "remove", "merge"})
     * @Serializer\Exclude
     */
    private $servicenow_config;

    /**
     * @ORM\OneToMany(targetEntity="ApplicationURL", mappedBy="application", orphanRemoval=true, cascade={"persist", "remove", "merge"})
     * @Serializer\Exclude
     */
    private $application_urls;

    /**
     * @ORM\OneToMany(targetEntity="ChangeLog", mappedBy="application", orphanRemoval=true, cascade={"persist", "remove", "merge"})
     * @Serializer\Exclude
     */
    private $changelogs;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;


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
     * Get list of changelogs
     *
     * @return array()
     */
    public function getChangeLogs()
    {
        return $this->changelogs;
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
     * Get ServiceNow config
     *
     * @return array()
     */
    public function getServicenowConfig()
    {
        return $this->servicenow_config;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Application
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
}


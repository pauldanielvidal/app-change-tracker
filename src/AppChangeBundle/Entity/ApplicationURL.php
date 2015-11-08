<?php

namespace AppChangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ApplicationURL
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ApplicationURL
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
     * @ORM\ManyToOne(targetEntity="Environment", inversedBy="ApplicationURL")
     * @ORM\JoinColumn(name="environment_id", referencedColumnName="id", nullable=false)
     */
    private $environment;

    /**
     * @ORM\ManyToOne(targetEntity="Application", inversedBy="ApplicationURL")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id", nullable=false)
     */
    private $application;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=255)
     */
    private $url;


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
     * Set application
     *
     * @param integer $application
     * @return Application
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return integer
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set environment
     *
     * @param integer $environment
     * @return Environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;

        return $this;
    }

    /**
     * Get environment
     *
     * @return integer
     */
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return ApplicationURL
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
}


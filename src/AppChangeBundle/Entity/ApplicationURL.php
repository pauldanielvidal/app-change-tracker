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
     * @var integer
     *
     * @ORM\Column(name="application_id", type="integer")
     */
    private $applicationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="environment_id", type="integer")
     */
    private $environmentId;

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
     * Set applicationId
     *
     * @param integer $applicationId
     *
     * @return ApplicationURL
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * Get applicationId
     *
     * @return integer
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * Set environmentId
     *
     * @param integer $environmentId
     *
     * @return ApplicationURL
     */
    public function setEnvironmentId($environmentId)
    {
        $this->environmentId = $environmentId;

        return $this;
    }

    /**
     * Get environmentId
     *
     * @return integer
     */
    public function getEnvironmentId()
    {
        return $this->environmentId;
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


<?php

namespace AppChangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ChangeLog
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ChangeLog
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="version", type="string", length=255)
     */
    private $version;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_entered", type="datetimetz")
     */
    private $dateEntered;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_of_deployment", type="datetimetz")
     */
    private $dateOfDeployment;

    /**
     * @var integer
     *
     * @ORM\Column(name="status_id", type="integer")
     */
    private $statusId;

    /**
     * @var string
     *
     * @ORM\Column(name="comments", type="text")
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="servicenow_ticket_ref", type="string", length=255)
     */
    private $servicenowTicketRef;


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
     * @return ChangeLog
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
     * @return ChangeLog
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
     * Set description
     *
     * @param string $description
     *
     * @return ChangeLog
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set version
     *
     * @param string $version
     *
     * @return ChangeLog
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return ChangeLog
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;

        return $this;
    }

    /**
     * Get dateEntered
     *
     * @return \DateTime
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * Set dateOfDeployment
     *
     * @param \DateTime $dateOfDeployment
     *
     * @return ChangeLog
     */
    public function setDateOfDeployment($dateOfDeployment)
    {
        $this->dateOfDeployment = $dateOfDeployment;

        return $this;
    }

    /**
     * Get dateOfDeployment
     *
     * @return \DateTime
     */
    public function getDateOfDeployment()
    {
        return $this->dateOfDeployment;
    }

    /**
     * Set statusId
     *
     * @param integer $statusId
     *
     * @return ChangeLog
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return integer
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return ChangeLog
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set servicenowTicketRef
     *
     * @param string $servicenowTicketRef
     *
     * @return ChangeLog
     */
    public function setServicenowTicketRef($servicenowTicketRef)
    {
        $this->servicenowTicketRef = $servicenowTicketRef;

        return $this;
    }

    /**
     * Get servicenowTicketRef
     *
     * @return string
     */
    public function getServicenowTicketRef()
    {
        return $this->servicenowTicketRef;
    }
}


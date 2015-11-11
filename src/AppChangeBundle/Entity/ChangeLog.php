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
     * @ORM\ManyToOne(targetEntity="Status", inversedBy="ChangeLog")
     * @ORM\JoinColumn(name="status_id", referencedColumnName="id", nullable=false)
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="Application", inversedBy="ChangeLog")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id", nullable=false)
     */
    private $application;

    /**
     * @ORM\ManyToOne(targetEntity="Environment", inversedBy="ChangeLog")
     * @ORM\JoinColumn(name="environment_id", referencedColumnName="id", nullable=false)
     */
    private $environment;

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
     * @var string
     *
     * @ORM\Column(name="comments", type="text")
     */
    private $comments;

    /**
     * @var string
     *
     * @ORM\Column(name="servicenow_ticket_ref", type="string", length=255, nullable=true)
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
     * Set status
     *
     * @param integer $status
     * @return Status
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
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

    public function toArray()
    {
        return array(
            'id' => $this->id,
            'status' => $this->status->__toString(),
            'application' => $this->application->__toString(),
            'environment' => $this->environment->__toString(),
            'description' => $this->description,
            'version' => $this->version,
            'dateEntered' => $this->dateEntered,
            'dateOfDeployment' => $this->dateOfDeployment,
            'comments' => $this->comments,
            'servicenowTicketRef' => $this->servicenowTicketRef,
        );
    }
}


<?php

namespace AppChangeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServiceNowConfig
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class ServiceNowConfig
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
     * @ORM\OneToOne(targetEntity="Application", inversedBy="ServiceNowConfig")
     * @ORM\JoinColumn(name="application_id", referencedColumnName="id", nullable=false)
     */
    private $application;

    /**
     * @var string
     *
     * @ORM\Column(name="business_service", type="string", length=255)
     */
    private $businessService;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=255)
     */
    private $category;

    /**
     * @var string
     *
     * @ORM\Column(name="subcategory", type="string", length=255)
     */
    private $subcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="configuration_item", type="string", length=255)
     */
    private $configurationItem;


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
     * @return ServiceNowConfig
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
     * Set businessService
     *
     * @param string $businessService
     *
     * @return ServiceNowConfig
     */
    public function setBusinessService($businessService)
    {
        $this->businessService = $businessService;

        return $this;
    }

    /**
     * Get businessService
     *
     * @return string
     */
    public function getBusinessService()
    {
        return $this->businessService;
    }

    /**
     * Set category
     *
     * @param string $category
     *
     * @return ServiceNowConfig
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set subcategory
     *
     * @param string $subcategory
     *
     * @return ServiceNowConfig
     */
    public function setSubcategory($subcategory)
    {
        $this->subcategory = $subcategory;

        return $this;
    }

    /**
     * Get subcategory
     *
     * @return string
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Set configurationItem
     *
     * @param string $configurationItem
     *
     * @return ServiceNowConfig
     */
    public function setConfigurationItem($configurationItem)
    {
        $this->configurationItem = $configurationItem;

        return $this;
    }

    /**
     * Get configurationItem
     *
     * @return string
     */
    public function getConfigurationItem()
    {
        return $this->configurationItem;
    }
}


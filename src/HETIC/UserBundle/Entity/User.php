<?php
// src/AppBundle/Entity/User.php

namespace HETIC\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="mobile", type="string", length=255, nullable=true)
     */
    private $mobile;

    /**
     * @var string
     *
     * @ORM\Column(name="company", type="string", length=255, nullable=true)
     */
    private $company;

    /**
     * @ORM\ManyToMany(targetEntity="HETIC\CoreBundle\Entity\Adresses", mappedBy="user", cascade={"persist"})
     */
    private $address;

    /**
     * @ORM\OneToOne(targetEntity="HETIC\CoreBundle\Entity\Warehouse", cascade={"persist"})
     */
    private $warehouse;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set mobile
     *
     * @param string $mobile
     *
     * @return User
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;

        return $this;
    }

    /**
     * Get mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Set company
     *
     * @param string $company
     *
     * @return User
     */
    public function setCompany($company)
    {
        $this->company = $company;

        return $this;
    }

    /**
     * Get company
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * Add address
     *
     * @param \HETIC\CoreBundle\Entity\Adresses $address
     *
     * @return User
     */
    public function addAddress(\HETIC\CoreBundle\Entity\Adresses $address)
    {
        $this->address[] = $address;

        return $this;
    }

    /**
     * Remove address
     *
     * @param \HETIC\CoreBundle\Entity\Adresses $address
     */
    public function removeAddress(\HETIC\CoreBundle\Entity\Adresses $address)
    {
        $this->address->removeElement($address);
    }

    /**
     * Get address
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set warehouse
     *
     * @param \HETIC\CoreBundle\Entity\Warehouse $warehouse
     *
     * @return User
     */
    public function setWarehouse(\HETIC\CoreBundle\Entity\Warehouse $warehouse = null)
    {
        $this->warehouse = $warehouse;

        return $this;
    }

    /**
     * Get warehouse
     *
     * @return \HETIC\CoreBundle\Entity\Warehouse
     */
    public function getWarehouse()
    {
        return $this->warehouse;
    }
}

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
     * @ORM\Column(name="company", type="string", length=255)
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
}

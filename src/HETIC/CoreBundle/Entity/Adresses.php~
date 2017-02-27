<?php

namespace HETIC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Adresses
 *
 * @ORM\Table(name="adresses")
 * @ORM\Entity(repositoryClass="HETIC\CoreBundle\Repository\AdressesRepository")
 */
class Adresses
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=25)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var string
     *
     * @ORM\Column(name="zipCode", type="string", length=50)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="town", type="string", length=50)
     */
    private $town;

    /**
     * @ORM\ManyToMany(targetEntity="HETIC\UserBundle\Entity\User", inversedBy="address", cascade={"persist"})
     */
    private $user;

    /**
     * @ORM\OneToMany(targetEntity="AdressesType", mappedBy="address", cascade={"persist"})
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity="Adresses", inversedBy="address", cascade={"persist"})
     */
    private $warehouse;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return Adresses
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return Adresses
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     *
     * @return Adresses
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set town
     *
     * @param string $town
     *
     * @return Adresses
     */
    public function setTown($town)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return string
     */
    public function getTown()
    {
        return $this->town;
    }
}

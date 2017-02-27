<?php

namespace HETIC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Quantity
 *
 * @ORM\Table(name="quantity")
 * @ORM\Entity(repositoryClass="HETIC\CoreBundle\Repository\QuantityRepository")
 */
class Quantity
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
     * @var int
     *
     * @ORM\Column(name="number", type="integer", nullable=true)
     */
    private $number;

    /**
     * @ORM\OneToMany(targetEntity="Warehouse", mappedBy="quantity")
     */
    private $warehouse;

    /**
     * @ORM\OneToMany(targetEntity="Products", mappedBy="quantity")
     */
    private $products;


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
     * @param integer $number
     *
     * @return Quantity
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }
}

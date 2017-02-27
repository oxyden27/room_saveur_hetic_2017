<?php

namespace HETIC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Warehouse
 *
 * @ORM\Table(name="warehouse")
 * @ORM\Entity(repositoryClass="HETIC\CoreBundle\Repository\WarehouseRepository")
 */
class Warehouse
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
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @ORM\OneToMany(targetEntity="WarehouseType", mappedBy="warehouse", cascade={"persist"})
     */
    private $type;

    /**
     * @ORM\OneToMany(targetEntity="Adresses", mappedBy="warehouse", cascade={"persist"})
     */
    private $address;

    /**
     * @ORM\ManyToMany(targetEntity="Products", mappedBy="warehouse", cascade={"persist"})
     */
    private $products;

    /**
     * @ORM\ManyToOne(targetEntity="Quantity", inversedBy="warehouse", cascade={"persist"})
     */
    private $quantity;

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
     * Set name
     *
     * @param string $name
     *
     * @return Warehouse
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

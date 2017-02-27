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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
        $this->address = new \Doctrine\Common\Collections\ArrayCollection();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add type
     *
     * @param \HETIC\CoreBundle\Entity\WarehouseType $type
     *
     * @return Warehouse
     */
    public function addType(\HETIC\CoreBundle\Entity\WarehouseType $type)
    {
        $this->type[] = $type;

        return $this;
    }

    /**
     * Remove type
     *
     * @param \HETIC\CoreBundle\Entity\WarehouseType $type
     */
    public function removeType(\HETIC\CoreBundle\Entity\WarehouseType $type)
    {
        $this->type->removeElement($type);
    }

    /**
     * Get type
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add address
     *
     * @param \HETIC\CoreBundle\Entity\Adresses $address
     *
     * @return Warehouse
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
     * Add product
     *
     * @param \HETIC\CoreBundle\Entity\Products $product
     *
     * @return Warehouse
     */
    public function addProduct(\HETIC\CoreBundle\Entity\Products $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * Remove product
     *
     * @param \HETIC\CoreBundle\Entity\Products $product
     */
    public function removeProduct(\HETIC\CoreBundle\Entity\Products $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * Get products
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * Set quantity
     *
     * @param \HETIC\CoreBundle\Entity\Quantity $quantity
     *
     * @return Warehouse
     */
    public function setQuantity(\HETIC\CoreBundle\Entity\Quantity $quantity = null)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return \HETIC\CoreBundle\Entity\Quantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->warehouse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->products = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add warehouse
     *
     * @param \HETIC\CoreBundle\Entity\Warehouse $warehouse
     *
     * @return Quantity
     */
    public function addWarehouse(\HETIC\CoreBundle\Entity\Warehouse $warehouse)
    {
        $this->warehouse[] = $warehouse;

        return $this;
    }

    /**
     * Remove warehouse
     *
     * @param \HETIC\CoreBundle\Entity\Warehouse $warehouse
     */
    public function removeWarehouse(\HETIC\CoreBundle\Entity\Warehouse $warehouse)
    {
        $this->warehouse->removeElement($warehouse);
    }

    /**
     * Get warehouse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWarehouse()
    {
        return $this->warehouse;
    }

    /**
     * Add product
     *
     * @param \HETIC\CoreBundle\Entity\Products $product
     *
     * @return Quantity
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
}

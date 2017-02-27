<?php

namespace HETIC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products")
 * @ORM\Entity(repositoryClass="HETIC\CoreBundle\Repository\ProductsRepository")
 */
class Products
{

    const STATUS_NOT_CHOOSEN = 0;
    const STATUS_ACTIVE = 1;
    const STATUS_CHOOSEN = 2;

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
     * @ORM\Column(name="EANCode", type="string", length=50)
     */
    private $eanCode;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var float
     *
     * @ORM\Column(name="price", type="float")
     */
    private $price;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expirationDate", type="date")
     */
    private $expirationDate;

    /**
     * @ORM\OneToMany(targetEntity="VAT", mappedBy="products", cascade={"persist"})
     */
    private $vat;

    /**
     * @ORM\ManyToMany(targetEntity="Warehouse", inversedBy="products", cascade={"persist"})
     */
    private $warehouse;

    /**
     * @ORM\ManyToOne(targetEntity="Quantity", inversedBy="products", cascade={"persist"})
     */
    private $quantity;

    /**
     * @ORM\ManyToMany(targetEntity="Commands", inversedBy="products", cascade={"persist"})
     */
    private $commands;


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
     * Set eANCode
     *
     * @param string $eANCode
     *
     * @return Products
     */
    public function setEANCode($eANCode)
    {
        $this->eANCode = $eANCode;

        return $this;
    }

    /**
     * Get eANCode
     *
     * @return string
     */
    public function getEANCode()
    {
        return $this->eANCode;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Products
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
     * Set description
     *
     * @param string $description
     *
     * @return Products
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
     * Set price
     *
     * @param float $price
     *
     * @return Products
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set expirationDate
     *
     * @param \DateTime $expirationDate
     *
     * @return Products
     */
    public function setExpirationDate($expirationDate)
    {
        $this->expirationDate = $expirationDate;

        return $this;
    }

    /**
     * Get expirationDate
     *
     * @return \DateTime
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->vat = new \Doctrine\Common\Collections\ArrayCollection();
        $this->warehouse = new \Doctrine\Common\Collections\ArrayCollection();
        $this->commands = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add vat
     *
     * @param \HETIC\CoreBundle\Entity\VAT $vat
     *
     * @return Products
     */
    public function addVat(\HETIC\CoreBundle\Entity\VAT $vat)
    {
        $this->vat[] = $vat;

        return $this;
    }

    /**
     * Remove vat
     *
     * @param \HETIC\CoreBundle\Entity\VAT $vat
     */
    public function removeVat(\HETIC\CoreBundle\Entity\VAT $vat)
    {
        $this->vat->removeElement($vat);
    }

    /**
     * Get vat
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Add warehouse
     *
     * @param \HETIC\CoreBundle\Entity\Warehouse $warehouse
     *
     * @return Products
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
     * Set quantity
     *
     * @param \HETIC\CoreBundle\Entity\Quantity $quantity
     *
     * @return Products
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

    /**
     * Add command
     *
     * @param \HETIC\CoreBundle\Entity\Commands $command
     *
     * @return Products
     */
    public function addCommand(\HETIC\CoreBundle\Entity\Commands $command)
    {
        $this->commands[] = $command;

        return $this;
    }

    /**
     * Remove command
     *
     * @param \HETIC\CoreBundle\Entity\Commands $command
     */
    public function removeCommand(\HETIC\CoreBundle\Entity\Commands $command)
    {
        $this->commands->removeElement($command);
    }

    /**
     * Get commands
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCommands()
    {
        return $this->commands;
    }
}

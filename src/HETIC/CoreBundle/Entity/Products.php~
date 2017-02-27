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

}

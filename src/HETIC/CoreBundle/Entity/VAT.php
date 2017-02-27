<?php

namespace HETIC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * VAT
 *
 * @ORM\Table(name="v_a_t")
 * @ORM\Entity(repositoryClass="HETIC\CoreBundle\Repository\VATRepository")
 */
class VAT
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
     * @var float
     *
     * @ORM\Column(name="rate", type="float")
     */
    private $rate;

    /**
     * @ORM\ManyToOne(targetEntity="Products", inversedBy="vat", cascade={"persist"})
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
     * Set rate
     *
     * @param float $rate
     *
     * @return VAT
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set products
     *
     * @param \HETIC\CoreBundle\Entity\Products $products
     *
     * @return VAT
     */
    public function setProducts(\HETIC\CoreBundle\Entity\Products $products = null)
    {
        $this->products = $products;

        return $this;
    }

    /**
     * Get products
     *
     * @return \HETIC\CoreBundle\Entity\Products
     */
    public function getProducts()
    {
        return $this->products;
    }
}

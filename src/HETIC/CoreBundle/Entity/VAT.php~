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
}

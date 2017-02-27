<?php

namespace HETIC\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WarehouseType
 *
 * @ORM\Table(name="warehouse_type")
 * @ORM\Entity(repositoryClass="HETIC\CoreBundle\Repository\WarehouseTypeRepository")
 */
class WarehouseType
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
     * @ORM\ManyToOne(targetEntity="Warehouse", inversedBy="type", cascade={"persist"})
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
     * Set name
     *
     * @param string $name
     *
     * @return WarehouseType
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

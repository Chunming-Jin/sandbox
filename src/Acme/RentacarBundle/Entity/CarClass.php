<?php

namespace Acme\RentacarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarClass
 *
 * @ORM\Table(name="car_class")
 * @ORM\Entity
 */
class CarClass
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=20, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="car_types", type="string", length=100, nullable=false)
     */
    private $carTypes;

    /**
     * @var string
     *
     * @ORM\Column(name="seats", type="string", length=20, nullable=false)
     */
    private $seats;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @var string
     *
     * @ORM\Column(name="price3", type="decimal", precision=9, scale=3, nullable=false)
     */
    private $price3;

    /**
     * @var string
     *
     * @ORM\Column(name="price6", type="decimal", precision=9, scale=3, nullable=false)
     */
    private $price6;

    /**
     * @var string
     *
     * @ORM\Column(name="price12", type="decimal", precision=9, scale=3, nullable=false)
     */
    private $price12;

    /**
     * @var string
     *
     * @ORM\Column(name="price24", type="decimal", precision=9, scale=3, nullable=false)
     */
    private $price24;

    /**
     * @var string
     *
     * @ORM\Column(name="insurance_price", type="decimal", precision=9, scale=3, nullable=false)
     */
    private $insurancePrice;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=false)
     */
    private $updatedAt;


}

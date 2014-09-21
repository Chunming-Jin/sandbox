<?php

namespace Acme\RentacarBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation", indexes={@ORM\Index(name="fk_reservation_user", columns={"user_id"}), @ORM\Index(name="fk_reservation_car_type1", columns={"car_class_id"}), @ORM\Index(name="fk_reservation_location1", columns={"departure_location_id"}), @ORM\Index(name="fk_reservation_location2", columns={"return_location_id"})})
 * @ORM\Entity
 */
class Reservation
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
     * @var \DateTime
     *
     * @ORM\Column(name="departure_at", type="datetime", nullable=false)
     */
    private $departureAt;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="return_at", type="datetime", nullable=false)
     */
    private $returnAt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="has_insurance", type="boolean", nullable=false)
     */
    private $hasInsurance;

    /**
     * @var string
     *
     * @ORM\Column(name="car_subtotal", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $carSubtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="option_subtotal", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $optionSubtotal;

    /**
     * @var string
     *
     * @ORM\Column(name="total_amount", type="decimal", precision=9, scale=3, nullable=true)
     */
    private $totalAmount;

    /**
     * @var string
     *
     * @ORM\Column(name="note", type="text", nullable=true)
     */
    private $note;

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

    /**
     * @var \CarClass
     *
     * @ORM\ManyToOne(targetEntity="CarClass")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_class_id", referencedColumnName="id")
     * })
     */
    private $carClass;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="departure_location_id", referencedColumnName="id")
     * })
     */
    private $departureLocation;

    /**
     * @var \Location
     *
     * @ORM\ManyToOne(targetEntity="Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="return_location_id", referencedColumnName="id")
     * })
     */
    private $returnLocation;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     * })
     */
    private $user;


}

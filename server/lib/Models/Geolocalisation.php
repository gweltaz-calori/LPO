<?php
/*
 * Geolocalisation
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="Geolocalisation")
 * @ORM\Entity
 */
class Geolocalisation {

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="latitude", type="float")
     */
    private $latitude;
    /**
     * @ORM\Column(name="longitude", type="float")
     */
    private $longitude;
}

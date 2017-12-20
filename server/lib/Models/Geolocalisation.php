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
class Geolocalisation implements \JsonSerializable {

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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Geolocalisation
     */
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Geolocalisation
     */
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    public function jsonSerialize()
    {
        return [
            "id" => $this->id,
            "latitude" => $this->latitude,
            "longitude" => $this->longitude
        ];
    }
}

<?php
/*
 * Nichoir
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="Nichoir")
 * @ORM\Entity
 */
class Nichoir {

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;
    /**
     * @ORM\Column(name="photo", type="string")
     */
    private $photo;
    /**
     * @ORM\Column(name="dateInstallation", type="datetime")
     */
    private $dateInstallation;

    /**
     * @ORM\OneToOne(targetEntity="Geolocalisation")
     * @ORM\JoinColumn(name="idGeolocalisation", referencedColumnName="id")
     */
    private $geolocalisation;

    /**
     * @ORM\OneToOne(targetEntity="Adherent")
     * @ORM\JoinColumn(name="idAdherent", referencedColumnName="id")
     */
    private $adherent;
}

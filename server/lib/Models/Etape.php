<?php
/*
 * Etape
 */
namespace Models;

/**
 * @ORM\Table(name="Etape")
 * @ORM\Entity
 */
class Etape {

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $id;
    /**
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
    /**
     * @ORM\Column(name="heure", type="datetime")
     */
    private $heure;
    /**
     * @ORM\Column(name="photo", type="string")
     */
    private $photo;
    /**
     * @ORM\Column(name="commentaire", type="string")
     */
    private $commentaire;


    /**
     * @ORM\OneToOne(targetEntity="Nichoir")
     * @ORM\JoinColumn(name="idNichoir", referencedColumnName="id")
     */
    private $nichoir;
}

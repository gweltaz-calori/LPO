<?php
/*
 * Oiseau
 */
namespace Models;

/**
 * @ORM\Table(name="Oiseau")
 * @ORM\Entity
 */
class Oiseau {

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     */
    private $id;
    /**
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;
    /**
     * @ORM\Column(name="famille", type="string")
     */
    private $famille;

    /**
     * @ORM\Column(name="description", type="string")
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity="Nichoir")
     * @ORM\JoinColumn(name="idNichoir", referencedColumnName="id")
     */
    private $nichoir;
}

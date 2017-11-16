<?php
/*
 * Adresse
 */
namespace Models;

/**
 * @ORM\Table(name="Adresse")
 * @ORM\Entity
 */
class Adresse {

    /**
    * @ORM\Column(name="id", type="integer", nullable=false)
    */
    private $id;
    /**
     * @ORM\Column(name="rue", type="string")
     */
    private $rue;
    /**
     * @ORM\Column(name="ville", type="string")
     */
    private $ville;
    /**
     * @ORM\Column(name="cp", type="string")
     */
    private $cp;
}

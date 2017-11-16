<?php
/*
 * Adresse
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="Adresse")
 * @ORM\Entity
 */
class Adresse {

    /**
    * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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

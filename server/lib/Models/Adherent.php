<?php
/*
 * Adherent
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Adherent")
 * @ORM\Entity
 */
class Adherent {

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
    * @ORM\Column(name="prenom", type="string")
    */
    private $prenom;

    /**
    * @ORM\Column(name="login", type="string")
    */
    private $login;

    /**
    * @ORM\Column(name="password", type="string")
    */
    private $password;

    /**
    * @ORM\Column(name="telephone", type="string")
    */
    private $telephone;

    /**
    * @ORM\Column(name="mail", type="string")
    */
    private $mail;

    /**
    * @ORM\Column(name="photo", type="string")
    */
    private $photo;

    /**
     * @ORM\OneToOne(targetEntity="Adresse")
     * @ORM\JoinColumn(name="idAdresse", referencedColumnName="id")
     */
    private $adresse;


}

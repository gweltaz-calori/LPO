<?php
/*
 * OiseauPhoto
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="OiseauPhoto")
 * @ORM\Entity
 */
class OiseauPhoto {

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(name="url", type="string")
     */
    private $url;

    /**
     * @ORM\OneToOne(targetEntity="Oiseau")
     * @ORM\JoinColumn(name="idOiseau", referencedColumnName="id")
     */
    private $oiseau;
}

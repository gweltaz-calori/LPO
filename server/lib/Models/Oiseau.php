<?php
/*
 * Oiseau
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="Oiseau")
 * @ORM\Entity
 */
class Oiseau {

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
     * Set nom
     *
     * @param string $nom
     *
     * @return Oiseau
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set famille
     *
     * @param string $famille
     *
     * @return Oiseau
     */
    public function setFamille($famille)
    {
        $this->famille = $famille;

        return $this;
    }

    /**
     * Get famille
     *
     * @return string
     */
    public function getFamille()
    {
        return $this->famille;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Oiseau
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set nichoir
     *
     * @param \Models\Nichoir $nichoir
     *
     * @return Oiseau
     */
    public function setNichoir(\Models\Nichoir $nichoir = null)
    {
        $this->nichoir = $nichoir;

        return $this;
    }

    /**
     * Get nichoir
     *
     * @return \Models\Nichoir
     */
    public function getNichoir()
    {
        return $this->nichoir;
    }
}

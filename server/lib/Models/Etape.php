<?php
/*
 * Etape
 */
namespace Models;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Table(name="Etape")
 * @ORM\Entity
 */
class Etape {

    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Etape
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set heure
     *
     * @param \DateTime $heure
     *
     * @return Etape
     */
    public function setHeure($heure)
    {
        $this->heure = $heure;

        return $this;
    }

    /**
     * Get heure
     *
     * @return \DateTime
     */
    public function getHeure()
    {
        return $this->heure;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Etape
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Etape
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set nichoir
     *
     * @param \Models\Nichoir $nichoir
     *
     * @return Etape
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

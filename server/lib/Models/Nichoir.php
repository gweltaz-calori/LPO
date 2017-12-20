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
class Nichoir implements \JsonSerializable {

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
     * @ORM\ManyToOne(targetEntity="Adherent",inversedBy="nichoirs")
     * @ORM\JoinColumn(name="idAdherent", referencedColumnName="id")
     */
    private $adherent;



    /**
     * @ORM\OneToMany(targetEntity="Etape",mappedBy="idNichoir")
     */
    private $etapes;

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
     * @return Nichoir
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
     * Set photo
     *
     * @param string $photo
     *
     * @return Nichoir
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
     * Set dateInstallation
     *
     * @param \DateTime $dateInstallation
     *
     * @return Nichoir
     */
    public function setDateInstallation($dateInstallation)
    {
        $this->dateInstallation = $dateInstallation;

        return $this;
    }

    /**
     * Get dateInstallation
     *
     * @return \DateTime
     */
    public function getDateInstallation()
    {
        return $this->dateInstallation;
    }

    /**
     * Set geolocalisation
     *
     * @param \Models\Geolocalisation $geolocalisation
     *
     * @return Nichoir
     */
    public function setGeolocalisation(\Models\Geolocalisation $geolocalisation = null)
    {
        $this->geolocalisation = $geolocalisation;

        return $this;
    }

    /**
     * Get geolocalisation
     *
     * @return \Models\Geolocalisation
     */
    public function getGeolocalisation()
    {
        return $this->geolocalisation;
    }

    /**
     * Set adherent
     *
     * @param \Models\Adherent $adherent
     *
     * @return Nichoir
     */
    public function setAdherent(\Models\Adherent $adherent = null)
    {
        $this->adherent = $adherent;

        return $this;
    }

    /**
     * Get adherent
     *
     * @return \Models\Adherent
     */
    public function getAdherent()
    {
        return $this->adherent;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->etape = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add etape
     *
     * @param \Models\Etape $etape
     *
     * @return Nichoir
     */
    public function addEtape(\Models\Etape $etape)
    {
        $this->etape[] = $etape;

        return $this;
    }

    /**
     * Remove etape
     *
     * @param \Models\Etape $etape
     */
    public function removeEtape(\Models\Etape $etape)
    {
        $this->etape->removeElement($etape);
    }

    /**
     * Get etape
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtape()
    {
        return $this->etape;
    }

    /**
     * Get etapes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEtapes()
    {
        return $this->etapes;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return [
            "id" => $this->id,
            "nom" => $this->nom,
            "photo" => $this->photo,
            "dateInstallation" => $this->dateInstallation->format('Y-m-d H:i'),
            "geolocalisation" => $this->geolocalisation,
            "etapes" => $this->etapes
        ];
    }
}

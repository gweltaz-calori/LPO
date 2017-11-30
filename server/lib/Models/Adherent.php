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
class Adherent implements \JsonSerializable {

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
     * @return Adherent
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Adherent
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set login
     *
     * @param string $login
     *
     * @return Adherent
     */
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get login
     *
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Adherent
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     *
     * @return Adherent
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Adherent
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Adherent
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
     * Set adresse
     *
     * @param \Models\Adresse $adresse
     *
     * @return Adherent
     */
    public function setAdresse(\Models\Adresse $adresse = null)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return \Models\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
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
            "nom" => $this->nom
        ];
    }
}

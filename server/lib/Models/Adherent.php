<?php
/*
 * Adherent
 */
namespace Models;

/*
 * Adherent
 */
class Adherent implements \JsonSerializable {
    /* @var int $id  */
    private $id;
/* @var string $nom  */
    private $nom;
/* @var string $prenom  */
    private $prenom;
/* @var string $login  */
    private $login;
/* @var string $password  */
    private $password;
/* @var string $telephone  */
    private $telephone;
/* @var string $mail  */
    private $mail;
/* @var string $photo  */
    private $photo;
/* @var object $adresse  */
    private $adresse;

    public function __construct()
    {

    }


    /**
     * @param string $nom
     */
    public function setNom(string $nom)
    {
        $this->nom = $nom;
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

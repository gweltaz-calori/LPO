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
class Adresse implements \JsonSerializable {

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
     * Set rue
     *
     * @param string $rue
     *
     * @return Adresse
     */
    public function setRue($rue)
    {
        $this->rue = $rue;

        return $this;
    }

    /**
     * Get rue
     *
     * @return string
     */
    public function getRue()
    {
        return $this->rue;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Adresse
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set cp
     *
     * @param string $cp
     *
     * @return Adresse
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return string
     */
    public function getCp()
    {
        return $this->cp;
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
            "rue" => $this->rue,
            "ville" => $this->ville,
            "cp" => $this->cp
        ];
    }
}

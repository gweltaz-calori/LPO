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
     * Set url
     *
     * @param string $url
     *
     * @return OiseauPhoto
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set oiseau
     *
     * @param \Models\Oiseau $oiseau
     *
     * @return OiseauPhoto
     */
    public function setOiseau(\Models\Oiseau $oiseau = null)
    {
        $this->oiseau = $oiseau;

        return $this;
    }

    /**
     * Get oiseau
     *
     * @return \Models\Oiseau
     */
    public function getOiseau()
    {
        return $this->oiseau;
    }
}

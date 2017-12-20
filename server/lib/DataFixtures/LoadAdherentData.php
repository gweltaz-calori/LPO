<?php

namespace DataFixtures;


use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use \Models\Adherent;
use \Models\Adresse;

class LoadAdherentData implements FixtureInterface
{


    public function load(ObjectManager $manager)
    {


        $adherent = new Adherent();
        $adherent->setNom('Jean');
        $adherent->setPrenom('Paul');
        $adherent->setLogin('polo');
        $adherent->setTelephone('0455555');
        $adherent->setMail('polo@gmail.com');

        $adresse = new Adresse();
        $adresse->setCp('74900');
        $adresse->setRue('4 rue de ah');
        $adresse->setVille('Paris');

        $adherent->setAdresse($adresse);
        $adherent->setPassword('polo');
        $adherent->setPhoto('http://static4.businessinsider.com/image/57ae527ddb5ce9b2008b6935/paul-szoldra.jpg');

        $manager->persist($adherent);
        $manager->flush();


    }
}
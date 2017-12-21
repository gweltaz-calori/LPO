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

        $userRepo = $manager->getRepository('Models\Adherent');
        $userExist = $userRepo->findOneBy(['login' => "polo"]);
        $userExist2 = $userRepo->findOneBy(['login' => "cena"]);

        if(!$userExist) {
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
        }

        if(!$userExist2) {

            $adherent2 = new Adherent();
            $adherent2->setNom('Cena');
            $adherent2->setPrenom('John');
            $adherent2->setLogin('cena');
            $adherent2->setTelephone('555556');
            $adherent2->setMail('johncena@gmail.com');

            $adresse2 = new Adresse();
            $adresse2->setCp('74960');
            $adresse2->setRue('2 rue de cena');
            $adresse2->setVille('New York');

            $adherent2->setAdresse($adresse2);
            $adherent2->setPassword('cena');
            $adherent2->setPhoto('https://upload.wikimedia.org/wikipedia/commons/7/77/John_Cena_May_2016.jpg');

            $manager->persist($adherent2);
        }


        $manager->flush();



    }
}
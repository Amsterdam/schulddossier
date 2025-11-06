<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use DateTime;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;

class SchuldItemFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $dossier = $this->getReference('dossier');
        $gebruiker = $this->getReference(GebruikerFixtures::SHV_USER_REFERENCE);
        $schuldeiser = $this->getReference('schuldeiser');

        $schuldItem = new SchuldItem();

        $schuldItem->setBedrag(1000);
        $schuldItem->setDossier($dossier);
        $schuldItem->setBedragOorspronkelijk(2000);
        $schuldItem->setSchuldeiser($schuldeiser);
        $schuldItem->setReferentie('Referentie schuld');
        $schuldItem->setAanmaker($gebruiker);
        $schuldItem->setBewerker($gebruiker);
        $schuldItem->setVaststelDatum(new \DateTime('now'));

        $this->addReference('schulditem', $schuldItem);

        $manager->persist($schuldItem);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            DossierFixtures::class,
            GebruikerFixtures::class,
            SchuldeiserFixtures::class
        ];
    }
}
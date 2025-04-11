<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;

class SchuldItemFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
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

        $this->addReference('schulditem', $schuldItem);

        $manager->persist($schuldItem);
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            DossierFixtures::class,
            GebruikerFixtures::class,
            SchuldeiserFixtures::class
        ];
    }
}
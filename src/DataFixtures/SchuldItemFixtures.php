<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;

class SchuldItemFixtures extends Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    #[Override]
    public function load(ObjectManager $manager): void
    {
        $dossier = $this->getReference('dossier', Dossier::class);
        $gebruiker = $this->getReference(GebruikerFixtures::SHV_USER_REFERENCE, Gebruiker::class);
        $schuldeiser = $this->getReference('schuldeiser', Schuldeiser::class);

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
<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;

class AantekeningFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        $aantekening = new Aantekening();

        $dossier = $this->getReference('dossier');
        $schulditem = $this->getReference('schulditem');
        $gebruiker = $this->getReference(GebruikerFixtures::ADMIN_USER_REFERENCE);

        $aantekening->setDossier($dossier);
        $aantekening->setTekst('Dit is een aantekening');
        $aantekening->setOnderwerp('Onderwerp Aantekening');
        $aantekening->setSchuldItem($schulditem);
        $aantekening->setGebruiker($gebruiker);

        $manager->persist($aantekening);
        $manager->flush();
    }

    public function getDependencies(): array
    {
        return [
            DossierFixtures::class,
            SchuldItemFixtures::class,
            GebruikerFixtures::class
        ];
    }
}
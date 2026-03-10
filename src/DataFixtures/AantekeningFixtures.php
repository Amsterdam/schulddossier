<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Aantekening;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\SchuldItem;

class AantekeningFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{
    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        $aantekening = new Aantekening();

        $dossier = $this->getReference('dossier', Dossier::class);
        $schulditem = $this->getReference('schulditem', SchuldItem::class);
        $gebruiker = $this->getReference(GebruikerFixtures::ADMIN_USER_REFERENCE, Gebruiker::class);

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

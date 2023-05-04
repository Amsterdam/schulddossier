<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Gebruiker;

class GebruikerFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{
    const ADMIN_USER_REFERENCE = 'admin';
    const GKA_USER_REFERENCE = 'gka';
    const MADI_USER_REFERENCE = 'madi';

    /**
     * @inheritDoc
     */
    public function load(\Doctrine\Persistence\ObjectManager $manager)
    {
        $gebruikerNames = [
            self::ADMIN_USER_REFERENCE,
            self::GKA_USER_REFERENCE,
            self::MADI_USER_REFERENCE
        ];

        $schuldhulpBureau = $this->getReference(SchuldhulpBureauFixtures::SCHULDHULP_BUREAU_REFERENCE);

        foreach ($gebruikerNames as $gebruikerName) {
            $fullName = "schulddossier_$gebruikerName";

            $gebruiker = new Gebruiker();
            $gebruiker->setEmail("$fullName@amsterdam.nl");
            $gebruiker->setType("$gebruikerName");
            $gebruiker->setNaam("$fullName $fullName");
            $gebruiker->setUsername("$fullName@amsterdam.nl");
            $gebruiker->setEnabled(true);
            $gebruiker->addSchuldhulpbureau($schuldhulpBureau);

            $this->addReference($gebruikerName, $gebruiker);

            $manager->persist($gebruiker);
        }

        // Add disabled gebruiker
        $fullName = "schulddossier_disabled";
        $gebruiker = new Gebruiker();
        $gebruiker->setEmail("$fullName@amsterdam.nl");
        $gebruiker->setType("madi");
        $gebruiker->setNaam("$fullName $fullName");
        $gebruiker->setUsername("$fullName@amsterdam.nl");
        $gebruiker->setEnabled(false);
        $gebruiker->addSchuldhulpbureau($schuldhulpBureau);
        $this->addReference("disabled", $gebruiker);
        $manager->persist($gebruiker);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            SchuldhulpBureauFixtures::class
        ];
    }
}
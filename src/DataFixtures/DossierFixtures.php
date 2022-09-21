<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;

class DossierFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $dossier = new Dossier();

        $schuldhulpBureau = $this->getReference(SchuldhulpBureauFixtures::SCHULDHULP_BUREAU_REFERENCE);

        $dossier->setTeamGka($this->getReference('Team 1'));
        $dossier->setSchuldhulpbureau($schuldhulpBureau);
        $dossier->setMedewerkerSchuldhulpbureau($this->getReference(GebruikerFixtures::MADI_USER_REFERENCE));

        $dossier->setClientVoorletters("T");
        $dossier->setClientNaam("Tester Testemans");
        $dossier->setAanmaker($this->getReference(GebruikerFixtures::ADMIN_USER_REFERENCE));
        $dossier->setDossierTemplate('v1');
        $dossier->setStatus('bezig_madi');

        $this->addReference('dossier', $dossier);

        $manager->persist($dossier);
        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            TeamFixtures::class,
            GebruikerFixtures::class
        ];
    }
}
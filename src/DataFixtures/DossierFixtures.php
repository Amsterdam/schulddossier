<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use DateTime;

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
        $dossier->setClientGeslacht('Man');
        $dossier->setClientGeboortedatum(new DateTime('12-11-1953'));
        $dossier->setClientBSN('282372714');
        $dossier->setClientTelefoonnummer('0634449270');
        $dossier->setClientEmail('mail@invalid.nl');
        $dossier->setClientStraat('Westwouderstraat');
        $dossier->setClientHuisnummer('21');
        $dossier->setClientPostcode('1023VN');
        $dossier->setClientWoonplaats('Amsterdam');
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
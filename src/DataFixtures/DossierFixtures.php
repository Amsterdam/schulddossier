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
        $schuldhulpBureau = $this->getReference(SchuldhulpBureauFixtures::SCHULDHULP_BUREAU_REFERENCE);

        $dossier = new Dossier();
        $dossier->setTeamGka($this->getReference('Team 1'));
        $dossier->setSchuldhulpbureau($schuldhulpBureau);
        $dossier->setMedewerkerSchuldhulpbureau($this->getReference(GebruikerFixtures::SHV_USER_REFERENCE));
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
        $dossier->setPartnerNvt(true);
        $dossier->setAanmaker($this->getReference(GebruikerFixtures::SHV_USER_REFERENCE));
        $dossier->setDossierTemplate('v1');
        $dossier->setStatus('bezig_shv');

        $this->addReference('dossier', $dossier);

        $manager->persist($dossier);

        $dossier = new Dossier();
        $dossier->setTeamGka($this->getReference('Team 2'));
        $dossier->setSchuldhulpbureau($schuldhulpBureau);
        $dossier->setMedewerkerSchuldhulpbureau($this->getReference(GebruikerFixtures::SHV_KEYUSER_USER_REFERENCE));
        $dossier->setClientVoorletters("WA");
        $dossier->setClientNaam("Wolfgang Amadeus Mozart");
        $dossier->setClientGeslacht('Man');
        $dossier->setClientGeboortedatum(new DateTime('11-11-1985'));
        $dossier->setClientBSN('596897169');
        $dossier->setClientTelefoonnummer('0634449271');
        $dossier->setClientEmail('mozart@invalid.nl');
        $dossier->setClientStraat('Czaar Peterstraat');
        $dossier->setClientHuisnummer('51');
        $dossier->setClientPostcode('1018PB');
        $dossier->setClientWoonplaats('Amsterdam');
        $dossier->setPartnerNvt(true);
        $dossier->setAanmaker($this->getReference(GebruikerFixtures::SHV_KEYUSER_USER_REFERENCE));
        $dossier->setDossierTemplate('v1');
        $dossier->setStatus('gecontroleerd_shv');

        $this->addReference('dossier2', $dossier);

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
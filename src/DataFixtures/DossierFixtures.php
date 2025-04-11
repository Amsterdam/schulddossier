<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use DateTime;

class DossierFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{
    public const DOSSIERS_JSON_FILENAME = 'dossiers.json';

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        $dossiers = $this->loadDossiersJson();
        $schuldhulpverlener = $this->getReference('schuldhulpverlener');

        for ($i = 0; $i < 11; $i++) {
            $aanmaker = ($i % 2) === 0 ? GebruikerFixtures::SHV_USER_REFERENCE : GebruikerFixtures::SHV_KEYUSER_USER_REFERENCE;

            $dossier = new Dossier();
            $dossier->setTeamGka($this->getReference('Team 3'));
            $dossier->setOrganisatie($schuldhulpverlener);
            $dossier->setRegasNummer(($i + 2) . 634638 . $i);
            $dossier->setMedewerkerOrganisatie($this->getReference($aanmaker));
            $dossier->setClientVoorletters($dossiers[$i]['voorletters']);
            $dossier->setClientNaam($dossiers[$i]['naam']);
            $dossier->setClientGeslacht($dossiers[$i]['geslacht']);
            $dossier->setClientGeboortedatum(new DateTime($dossiers[$i]['dateOfBirth']));
            $dossier->setClientBSN($dossiers[$i]['bsn']);
            $dossier->setClientTelefoonnummer('0634449272');
            $dossier->setClientEmail($dossiers[$i]['email']);
            $dossier->setClientStraat('Czaar Peterstraat');
            $dossier->setClientHuisnummer('51');
            $dossier->setClientPostcode('1018PB');
            $dossier->setClientWoonplaats('Amsterdam');
            $dossier->setPartnerNvt(true);
            $dossier->setAanmaker($this->getReference($aanmaker));
            $dossier->setDossierTemplate('v1');
            $dossier->setStatus($dossiers[$i]['status']);
            $dossier->setEersteKeerVerzondenAanGKA($dossiers[$i]['verzondenGka']);
            $dossier->setInPrullenbak($dossiers[$i]['inPrullenbak']);

            if($dossiers[$i]['verzondenGka']) {
                $dossier->setAllegroNummer(834 . ($i-1) . 3879 . $i);
            }

            $this->addReference($i === 0 ? 'dossier' : 'dossier'.$i, $dossier);

            $manager->persist($dossier);
        }

        $manager->flush();
    }

    private function loadDossiersJson()
    {
        $dir = explode('src/', __DIR__);
        $file = $dir[0] . self::DOSSIERS_JSON_FILENAME;
        $jsonString = file_get_contents($file);

        return array_values(array_filter(json_decode($jsonString, true)));
    }

    public function getDependencies(): array
    {
        return [
            TeamFixtures::class,
            GebruikerFixtures::class
        ];
    }
}
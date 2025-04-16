<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Voorlegger;

class VoorleggerFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{
public const VOORLEGGERS_JSON_FILENAME = 'voorleggers.json';

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        $voorleggers = $this->loadVoorleggersJson();

        for ($i = 0; $i < 11; $i++) {
            $dossierReference = $i === 0 ? 'dossier' : 'dossier' . $i;

            $voorlegger = new Voorlegger();
            $voorlegger->setDossier($this->getReference($dossierReference, Dossier::class));
            $voorlegger->setLegitimatieOntvangenShv($voorleggers[$i]["legitimatieShv"]);
            $voorlegger->setLegitimatieOntvangenGka($voorleggers[$i]["legitimatieGka"]);
            $voorlegger->setArbeidsovereenkomstOntvangenShv($voorleggers[$i]["arbeidsovereenkomstShv"]);
            $voorlegger->setArbeidsovereenkomstOntvangenGka($voorleggers[$i]["arbeidsovereenkomstGka"]);

            $manager->persist($voorlegger);
        }

        $manager->flush();
    }

    private function loadVoorleggersJson()
        {
            $dir = explode('src/', __DIR__);
            $file = $dir[0] . self::VOORLEGGERS_JSON_FILENAME;
            $jsonString = file_get_contents($file);

            return array_values(array_filter(json_decode($jsonString, true)));
        }

        public function getDependencies(): array
        {
            return [
                DossierFixtures::class
            ];
        }
}
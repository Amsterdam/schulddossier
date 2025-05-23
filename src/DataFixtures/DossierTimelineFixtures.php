<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\DossierTimeline;


class DossierTimelineFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture implements DependentFixtureInterface
{
    public const TIMELINE_JSON_FILENAME = 'timeline.json';

    /**
     * @inheritDoc
     */
    #[Override]
    public function load(ObjectManager $manager): void
    {
        $dossierTimelines = $this->loadDossierTimelineJson();

        foreach ($dossierTimelines as $dossierTimeline) {
            $timeline = new DossierTimeline();

            $timeline->setDossier($this->getReference('dossier5', Dossier::class));
            $timeline->setType($dossierTimeline['type']);
            $timeline->setSubtype($dossierTimeline['subtype']);
            $timeline->setOmschrijving($dossierTimeline['omschrijving']);
            $timeline->setDatumtijd(new \DateTime($dossierTimeline['datumtijd']));

            $manager->persist($timeline);
        }

        $manager->flush();
    }

    private function loadDossierTimelineJson()
    {
        $dir = explode('src/', __DIR__);
        $file = $dir[0] . self::TIMELINE_JSON_FILENAME;
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
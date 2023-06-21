<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;

class SchuldhulpBureauFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    public const BUREAUS_JSON_FILENAME = 'bureaus.json';

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $bureaus = $this->loadBureausJson();

        foreach ($bureaus as $bureau) {
            $organisatie = new Schuldhulpbureau();
            $organisatie->setNaam($bureau['naam']);
            $organisatie->setEmailAdresControle($bureau['email']);
            $organisatie->setStandaardGkaTeam($this->getReference($bureau['teamGka']));
            $this->addReference($bureau['reference'], $organisatie);

            $manager->persist($organisatie);
        }

        $manager->flush();
    }

    private function loadBureausJson()
    {
        $dir = explode('src/', __DIR__);
        $file = $dir[0] . self::BUREAUS_JSON_FILENAME;
        $jsonString = file_get_contents($file);

        return array_values(array_filter(json_decode($jsonString, true)));
    }

    public function getDependencies()
        {
            return [
                TeamFixtures::class
            ];
        }
}
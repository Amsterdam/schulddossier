<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Organisatie;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;
use Override;

class OrganisatieFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    public const ORGANISATIES_JSON_FILENAME = 'organisaties.json';

    /**
     * @inheritDoc
     */
    #[Override]
    public function load(ObjectManager $manager): void
    {
        $fictionalOrganisations = $this->loadOrganisatiesJson();

        foreach ($fictionalOrganisations as $org) {
            $organisatie = new Organisatie();
            $organisatie->setNaam($org['naam']);
            $organisatie->setEmailAdresControle($org['email']);
            $organisatie->setStandaardGkaTeam($this->getReference($org['teamGka'], Team::class));
            $this->addReference($org['reference'], $organisatie);

            $manager->persist($organisatie);
        }

        $manager->flush();
    }

    private function loadOrganisatiesJson()
    {
        $dir = explode('src/', __DIR__);
        $file = $dir[0] . self::ORGANISATIES_JSON_FILENAME;
        $jsonString = file_get_contents($file);

        return array_values(array_filter(json_decode($jsonString, true)));
    }

    public function getDependencies(): array
    {
            return [
                TeamFixtures::class
            ];
        }
}
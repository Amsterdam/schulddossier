<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Team;

class TeamFixtures extends Fixture
{
    const TEAM_3_REFERENCE = 'Team 3';

    /**
     * @inheritDoc
     */
    #[Override]
    public function load(ObjectManager $manager): void
    {
        foreach ([1, 2, 3] as $teamNumber) {
            $team = new Team();
            $team->setNaam("GKA Team $teamNumber");
            $team->setEmail("gka$teamNumber@example.com");

            $manager->persist($team);

            $this->addReference("Team $teamNumber", $team);
        }

        $manager->flush();
    }
}
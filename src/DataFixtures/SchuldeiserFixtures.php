<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;

class SchuldeiserFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $schuldEiser = new Schuldeiser();

        $schuldEiser->setEnabled(true);
        $schuldEiser->setBedrijfsnaam('onbekende schuldeiser');
        $schuldEiser->setRekening('0');

        $manager->persist($schuldEiser);
        $manager->flush();
    }
}
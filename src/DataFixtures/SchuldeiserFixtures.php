<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldeiser;

class SchuldeiserFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager): void
    {
        $schuldEiser = new Schuldeiser();

        $schuldEiser->setEnabled(true);
        $schuldEiser->setBedrijfsnaam('onbekende schuldeiser');
        $schuldEiser->setRekening('0');

        $manager->persist($schuldEiser);
        $manager->flush();


        $schuldeiser = new Schuldeiser();

        $schuldeiser->setRekening('123456787654321');
        $schuldeiser->setBedrijfsnaam("Test schuldeiser");
        $schuldeiser->setEnabled(true);
        $schuldeiser->setHuisnummer(1);
        $schuldeiser->setPlaats('Amsterdam');
        $schuldeiser->setPostcode('1000AA');
        $schuldeiser->setStraat('Amstel');

        $this->addReference('schuldeiser', $schuldeiser);

        $manager->persist($schuldeiser);
        $manager->flush();
    }
}

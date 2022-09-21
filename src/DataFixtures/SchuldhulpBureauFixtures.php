<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures;

use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\Entity\Schuldhulpbureau;

class SchuldhulpBureauFixtures extends \Doctrine\Bundle\FixturesBundle\Fixture
{
    const SCHULDHULP_BUREAU_REFERENCE = 'schuldhulpbureau';

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $bureau = new Schuldhulpbureau();

        $bureau->setNaam('Salmagundi Bureau');

        $this->addReference(self::SCHULDHULP_BUREAU_REFERENCE, $bureau);

        $manager->persist($bureau);
        $manager->flush();
    }
}
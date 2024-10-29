<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\TemplateData;

use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;
use GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\DossierFixtures;
use GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\GebruikerFixtures;
use GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\OrganisatieFixtures;
use GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\SchuldeiserFixtures;
use GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\SchuldItemFixtures;
use GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\TeamFixtures;
use GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\VoorleggerFixtures;

class SchulddossierDataTemplateFixture extends \Doctrine\Bundle\FixturesBundle\Fixture implements FixtureGroupInterface, DependentFixtureInterface
{
    public const DATA_SQL_FILE = '20240731_schulddossier_template_data_only.sql';

    /**
     * @inheritDoc
     */
    public function load(ObjectManager $manager)
    {
        $sql = $this->loadSQLFile();

        $connection = $manager->getConnection();

        foreach($sql as $line) {
            if (strlen($line) > 1 && substr($line, 0, 2) !== '--') {
                //echo "Execute ". $line;
                $connection->executeQuery($line);  // Execute native SQL
            }
        }

        $manager->flush();
    }

    private function loadSQLFile()
    {
        $dir = explode('src/', __DIR__);
        $file = $dir[0] . self::DATA_SQL_FILE;
        $lines = file($file);

        return $lines;
    }

    public static function getGroups(): array
    {
        return ['DataTemplate'];
    }

    public function getDependencies()
    {
        return [
            TeamFixtures::class,
            GebruikerFixtures::class,
            OrganisatieFixtures::class,
            DossierFixtures::class,
            SchuldeiserFixtures::class,
            SchuldItemFixtures::class,
            VoorleggerFixtures::class
        ];
    }
}
<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\DataFixtures\TemplateData;

use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;
use Doctrine\Persistence\ObjectManager;

class SchulddossierDataTemplateFixture extends \Doctrine\Bundle\FixturesBundle\Fixture implements FixtureGroupInterface
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
                echo "Execute ". $line;
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
}
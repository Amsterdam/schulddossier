<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230621103701 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("ALTER TABLE dossier RENAME COLUMN schuldhulpbureau_id TO organisatie_id");
        $this->addSql("ALTER TABLE dossier RENAME COLUMN medewerker_schuldhulpbureau_id TO medewerker_organisatie_id");
        $this->addSql("ALTER TABLE gebruiker_schuldhulpbureau RENAME COLUMN schuldhulpbureau_id TO organisatie_id");

        $this->addSql("ALTER TABLE IF EXISTS gebruiker_schuldhulpbureau RENAME TO gebruiker_organisatie");
        $this->addSql("ALTER TABLE IF EXISTS schuldhulpbureau RENAME TO organisatie");

        $this->addSql("ALTER SEQUENCE IF EXISTS schuldhulpbureau_id_seq RENAME TO organisatie_id_seq");
    }
}

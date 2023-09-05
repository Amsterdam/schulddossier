<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230831105610 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Voeg boolean herfinanciering toe aan voorlegger';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE voorlegger ADD herfinancering BOOLEAN DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE voorlegger DROP herfinancering');
    }
}

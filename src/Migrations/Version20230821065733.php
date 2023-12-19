<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

final class Version20230821065733 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Voeg principebeslissing en schulden op de werkvloer toe aan voorleggen tabel';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('ALTER TABLE voorlegger ADD principebeslissing BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD schulden_op_de_werkvloer BOOLEAN DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('ALTER TABLE voorlegger DROP principebeslissing');
        $this->addSql('ALTER TABLE voorlegger DROP schulden_op_de_werkvloer');

    }
}

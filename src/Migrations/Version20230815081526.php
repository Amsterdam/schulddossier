<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230815081526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Add index to verwijderd_date_time';
    }

    public function up(Schema $schema): void
    {
        $this->addSql('CREATE INDEX idx_verwijderd_datetime ON gebruiker (verwijderd_date_time)');
    }

    public function down(Schema $schema): void
    {
        $this->addSql('DROP INDEX idx_verwijderd_datetime');
    }
}

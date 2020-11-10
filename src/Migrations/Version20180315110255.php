<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180315110255 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ADD cjib BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger DROP cjib_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP cjib_ontvangen_gka');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger ADD cjib_ontvangen_gka BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger RENAME COLUMN cjib TO cjib_ontvangen_madi');
    }
}

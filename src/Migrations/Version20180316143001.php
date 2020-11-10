<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316143001 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE document ADD in_prullenbak BOOLEAN NULL');
        $this->addSql('ALTER TABLE dossier ADD in_prullenbak BOOLEAN NULL');

        $this->addSql('UPDATE document SET in_prullenbak = false');
        $this->addSql('UPDATE dossier SET in_prullenbak = false');

        $this->addSql('ALTER TABLE document ALTER COLUMN in_prullenbak SET NOT NULL');
        $this->addSql('ALTER TABLE dossier ALTER COLUMN in_prullenbak SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dossier DROP in_prullenbak');
        $this->addSql('ALTER TABLE document DROP in_prullenbak');
    }
}

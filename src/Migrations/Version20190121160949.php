<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190121160949 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE action_event ADD dossier_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE action_event ADD CONSTRAINT FK_DC60C61B611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_DC60C61B611C0C56 ON action_event (dossier_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE action_event DROP CONSTRAINT FK_DC60C61B611C0C56');
        $this->addSql('DROP INDEX IDX_DC60C61B611C0C56');
        $this->addSql('ALTER TABLE action_event DROP dossier_id');
    }
}

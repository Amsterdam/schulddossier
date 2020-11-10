<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180316152547 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE dossier DROP CONSTRAINT fk_3d48e037e6b3c17');
        $this->addSql('DROP INDEX uniq_3d48e037e6b3c17');
        $this->addSql('ALTER TABLE dossier DROP voorlegger_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dossier ADD voorlegger_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT fk_3d48e037e6b3c17 FOREIGN KEY (voorlegger_id) REFERENCES voorlegger (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX uniq_3d48e037e6b3c17 ON dossier (voorlegger_id)');
    }
}

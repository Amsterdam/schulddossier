<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180405161008 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE dossier_timeline_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE dossier_timeline (id INT NOT NULL, dossier_id INT NOT NULL, gebruiker_id INT DEFAULT NULL, datumtijd TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, type VARCHAR(50) NOT NULL, omschrijving TEXT DEFAULT NULL, data JSON DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6EBE2411611C0C56 ON dossier_timeline (dossier_id)');
        $this->addSql('CREATE INDEX IDX_6EBE24119C92A3DF ON dossier_timeline (gebruiker_id)');
        $this->addSql('ALTER TABLE dossier_timeline ADD CONSTRAINT FK_6EBE2411611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dossier_timeline ADD CONSTRAINT FK_6EBE24119C92A3DF FOREIGN KEY (gebruiker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE dossier_timeline_id_seq CASCADE');
        $this->addSql('DROP TABLE dossier_timeline');
    }
}

<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180307132849 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE document_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE dossier_document_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE document (id INT NOT NULL, gebruiker_id INT NOT NULL, originele_bestandsnaam VARCHAR(255) NOT NULL, originele_extensie VARCHAR(15) NOT NULL, naam VARCHAR(255) NOT NULL, upload_datum_tijd TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, md5hash VARCHAR(32) NOT NULL, groep VARCHAR(255) NOT NULL, directory VARCHAR(1024) NOT NULL, bestandsnaam VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D8698A769C92A3DF ON document (gebruiker_id)');
        $this->addSql('CREATE UNIQUE INDEX uq_file ON document (groep, directory, bestandsnaam)');
        $this->addSql('CREATE TABLE dossier_document (id INT NOT NULL, dossier_id INT NOT NULL, document_id INT NOT NULL, onderwerp VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_F0296801611C0C56 ON dossier_document (dossier_id)');
        $this->addSql('CREATE INDEX IDX_F0296801C33F7837 ON dossier_document (document_id)');
        $this->addSql('ALTER TABLE document ADD CONSTRAINT FK_D8698A769C92A3DF FOREIGN KEY (gebruiker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dossier_document ADD CONSTRAINT FK_F0296801611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dossier_document ADD CONSTRAINT FK_F0296801C33F7837 FOREIGN KEY (document_id) REFERENCES document (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dossier_document DROP CONSTRAINT FK_F0296801C33F7837');
        $this->addSql('DROP SEQUENCE document_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE dossier_document_id_seq CASCADE');
        $this->addSql('DROP TABLE document');
        $this->addSql('DROP TABLE dossier_document');
    }
}

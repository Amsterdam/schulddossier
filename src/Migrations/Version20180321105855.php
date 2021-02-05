<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180321105855 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE schuldeiser_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE schuld_item_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE schuldeiser (id INT NOT NULL, bedrijfsnaam VARCHAR(255) NOT NULL, rekening VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE schuld_item (id INT NOT NULL, dossier_id INT NOT NULL, aanmaker_id INT NOT NULL, schuldeiser_id INT DEFAULT NULL, aanmaak_datum_tijd TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, bewerk_datum_tijd TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, verwijderd BOOLEAN NOT NULL, referentie VARCHAR(255) DEFAULT NULL, opmerkingen TEXT DEFAULT NULL, type VARCHAR(15) NOT NULL, bedrag NUMERIC(5, 2) DEFAULT NULL, vaststel_datum DATE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6EF34FE0611C0C56 ON schuld_item (dossier_id)');
        $this->addSql('CREATE INDEX IDX_6EF34FE05DA14CC6 ON schuld_item (aanmaker_id)');
        $this->addSql('CREATE INDEX IDX_6EF34FE09D84DD56 ON schuld_item (schuldeiser_id)');
        $this->addSql('ALTER TABLE schuld_item ADD CONSTRAINT FK_6EF34FE0611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE schuld_item ADD CONSTRAINT FK_6EF34FE05DA14CC6 FOREIGN KEY (aanmaker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE schuld_item ADD CONSTRAINT FK_6EF34FE09D84DD56 FOREIGN KEY (schuldeiser_id) REFERENCES schuldeiser (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dossier_document ADD schuld_item_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier_document ADD CONSTRAINT FK_F02968019CF6E592 FOREIGN KEY (schuld_item_id) REFERENCES schuld_item (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_F02968019CF6E592 ON dossier_document (schuld_item_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE schuld_item DROP CONSTRAINT FK_6EF34FE09D84DD56');
        $this->addSql('ALTER TABLE dossier_document DROP CONSTRAINT FK_F02968019CF6E592');
        $this->addSql('DROP SEQUENCE schuldeiser_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE schuld_item_id_seq CASCADE');
        $this->addSql('DROP TABLE schuldeiser');
        $this->addSql('DROP TABLE schuld_item');
        $this->addSql('DROP INDEX IDX_F02968019CF6E592');
        $this->addSql('ALTER TABLE dossier_document DROP schuld_item_id');
    }
}

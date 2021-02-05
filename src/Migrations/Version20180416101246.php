<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180416101246 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE aantekening_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE aantekening (id BIGINT NOT NULL, dossier_id INT NOT NULL, schuld_item_id INT NOT NULL, gebruiker_id INT NOT NULL, string VARCHAR(255) NOT NULL, datum_tijd TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, tekst TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_267BF4AD611C0C56 ON aantekening (dossier_id)');
        $this->addSql('CREATE INDEX IDX_267BF4AD9CF6E592 ON aantekening (schuld_item_id)');
        $this->addSql('CREATE INDEX IDX_267BF4AD9C92A3DF ON aantekening (gebruiker_id)');
        $this->addSql('ALTER TABLE aantekening ADD CONSTRAINT FK_267BF4AD611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE aantekening ADD CONSTRAINT FK_267BF4AD9CF6E592 FOREIGN KEY (schuld_item_id) REFERENCES schuld_item (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE aantekening ADD CONSTRAINT FK_267BF4AD9C92A3DF FOREIGN KEY (gebruiker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP SEQUENCE aantekening_id_seq CASCADE');
        $this->addSql('DROP TABLE aantekening');
    }
}

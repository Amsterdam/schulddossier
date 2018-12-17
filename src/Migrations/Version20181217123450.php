<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181217123450 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE action_event_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE action_event (id BIGINT NOT NULL, gebruiker_id INT NOT NULL, dossier_id INT DEFAULT NULL, gewijzigde_gebruiker_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, ip VARCHAR(45) NOT NULL, datum_tijd TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_DC60C61B9C92A3DF ON action_event (gebruiker_id)');
        $this->addSql('CREATE INDEX IDX_DC60C61B611C0C56 ON action_event (dossier_id)');
        $this->addSql('CREATE INDEX IDX_DC60C61B8EE23E6C ON action_event (gewijzigde_gebruiker_id)');
        $this->addSql('ALTER TABLE action_event ADD CONSTRAINT FK_DC60C61B9C92A3DF FOREIGN KEY (gebruiker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action_event ADD CONSTRAINT FK_DC60C61B611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE action_event ADD CONSTRAINT FK_DC60C61B8EE23E6C FOREIGN KEY (gewijzigde_gebruiker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP SEQUENCE action_event_id_seq CASCADE');
        $this->addSql('DROP TABLE action_event');
    }
}

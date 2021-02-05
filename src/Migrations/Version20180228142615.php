<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180228142615 extends AbstractMigration
{


    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE dossier_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE gebruiker_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE schuldhulpbureau_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE SEQUENCE team_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE dossier (id INT NOT NULL, schuldhulpbureau_id INT NOT NULL, team_id INT NOT NULL, aanmaker_id INT NOT NULL, dossier_template VARCHAR(25) NOT NULL, client_naam VARCHAR(255) NOT NULL, partner_naam VARCHAR(255) DEFAULT NULL, regas_nummer VARCHAR(255) NOT NULL, allegro_nummer VARCHAR(255) NOT NULL, aanmaak_datum_tijd TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_3D48E0373E6B6494 ON dossier (schuldhulpbureau_id)');
        $this->addSql('CREATE INDEX IDX_3D48E037296CD8AE ON dossier (team_id)');
        $this->addSql('CREATE INDEX IDX_3D48E0375DA14CC6 ON dossier (aanmaker_id)');
        $this->addSql('CREATE TABLE gebruiker (id INT NOT NULL, username VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX uq_username ON gebruiker (username)');
        $this->addSql('CREATE TABLE schuldhulpbureau (id INT NOT NULL, naam VARCHAR(125) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE team (id INT NOT NULL, naam VARCHAR(50) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E0373E6B6494 FOREIGN KEY (schuldhulpbureau_id) REFERENCES schuldhulpbureau (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E0375DA14CC6 FOREIGN KEY (aanmaker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dossier DROP CONSTRAINT FK_3D48E0375DA14CC6');
        $this->addSql('ALTER TABLE dossier DROP CONSTRAINT FK_3D48E0373E6B6494');
        $this->addSql('ALTER TABLE dossier DROP CONSTRAINT FK_3D48E037296CD8AE');
        $this->addSql('DROP SEQUENCE dossier_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE gebruiker_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE schuldhulpbureau_id_seq CASCADE');
        $this->addSql('DROP SEQUENCE team_id_seq CASCADE');
        $this->addSql('DROP TABLE dossier');
        $this->addSql('DROP TABLE gebruiker');
        $this->addSql('DROP TABLE schuldhulpbureau');
        $this->addSql('DROP TABLE team');
    }
}

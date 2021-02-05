<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180305132129 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ADD energie_bedrijf VARCHAR(125) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD energie_bedrijf_klantnummer VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD energie_bedrijf_datum_opname DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD energie_bedrijf_t1 BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD energie_bedrijf_t2 BIGINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD energie_bedrijf_gas DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD warmte_bedrijf VARCHAR(125) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD warmte_bedrijf_klantnummer VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD warmte_bedrijf_datum_opname DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD warmte_bedrijf_opname DOUBLE PRECISION DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD drinkwater_klantnummer VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD drinkwater_datum_opname DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD drinkwater_opname DOUBLE PRECISION DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger DROP energie_bedrijf');
        $this->addSql('ALTER TABLE voorlegger DROP energie_bedrijf_klantnummer');
        $this->addSql('ALTER TABLE voorlegger DROP energie_bedrijf_datum_opname');
        $this->addSql('ALTER TABLE voorlegger DROP energie_bedrijf_t1');
        $this->addSql('ALTER TABLE voorlegger DROP energie_bedrijf_t2');
        $this->addSql('ALTER TABLE voorlegger DROP energie_bedrijf_gas');
        $this->addSql('ALTER TABLE voorlegger DROP warmte_bedrijf');
        $this->addSql('ALTER TABLE voorlegger DROP warmte_bedrijf_klantnummer');
        $this->addSql('ALTER TABLE voorlegger DROP warmte_bedrijf_datum_opname');
        $this->addSql('ALTER TABLE voorlegger DROP warmte_bedrijf_opname');
        $this->addSql('ALTER TABLE voorlegger DROP drinkwater_klantnummer');
        $this->addSql('ALTER TABLE voorlegger DROP drinkwater_datum_opname');
        $this->addSql('ALTER TABLE voorlegger DROP drinkwater_opname');
    }
}

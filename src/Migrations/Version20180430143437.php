<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180430143437 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger DROP huurtoeslag_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP huurtoeslag_ontvangen_gka');
        $this->addSql('ALTER TABLE voorlegger DROP huurtoeslag_nvt');
        $this->addSql('ALTER TABLE voorlegger DROP zorgtoeslag_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP zorgtoeslag_ontvangen_gka');
        $this->addSql('ALTER TABLE voorlegger DROP zorgtoeslag_nvt');
        $this->addSql('ALTER TABLE voorlegger DROP kinderopvangtoeslag_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP kinderopvangtoeslag_ontvangen_gka');
        $this->addSql('ALTER TABLE voorlegger DROP kinderopvangtoeslag_nvt');
        $this->addSql('ALTER TABLE voorlegger DROP kindgebonden_budget_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP kindgebonden_budget_ontvangen_gka');
        $this->addSql('ALTER TABLE voorlegger DROP kindgebonden_budget_nvt');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ADD huurtoeslag_ontvangen_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD huurtoeslag_ontvangen_gka SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD huurtoeslag_nvt BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD zorgtoeslag_ontvangen_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD zorgtoeslag_ontvangen_gka SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD zorgtoeslag_nvt BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD kinderopvangtoeslag_ontvangen_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD kinderopvangtoeslag_ontvangen_gka SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD kinderopvangtoeslag_nvt BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD kindgebonden_budget_ontvangen_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD kindgebonden_budget_ontvangen_gka SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD kindgebonden_budget_nvt BOOLEAN DEFAULT NULL');
    }
}

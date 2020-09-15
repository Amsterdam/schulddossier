<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200915084350 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ADD aangifte_belastingdienst_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD aangifte_belastingdienst_gka SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD aangifte_belastingdienst_nvt BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger DROP aangifte_belastingdienst_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP aangifte_belastingdienst_ontvangen_gka');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger ADD aangifte_belastingdienst_ontvangen_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD aangifte_belastingdienst_ontvangen_gka SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger DROP aangifte_belastingdienst_madi');
        $this->addSql('ALTER TABLE voorlegger DROP aangifte_belastingdienst_gka');
        $this->addSql('ALTER TABLE voorlegger DROP aangifte_belastingdienst_nvt');
    }
}

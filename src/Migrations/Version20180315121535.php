<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180315121535 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ADD ondertekend_aanvraag_formulier_ontvangen_madi BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD ondertekend_aanvraag_formulier_ontvangen_gka BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger DROP ondertekend_aanvraag_formulier_madi');
        $this->addSql('ALTER TABLE voorlegger DROP ondertekend_aanvraag_formulier_gka');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger ADD ondertekend_aanvraag_formulier_madi BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD ondertekend_aanvraag_formulier_gka BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger DROP ondertekend_aanvraag_formulier_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP ondertekend_aanvraag_formulier_ontvangen_gka');
    }
}

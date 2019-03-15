<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190315141225 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE dossier ADD client_voorletters VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_geslacht VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_geboortedatum DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_bsn VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_telefoonnummer VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_straat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_huisnummer VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_postcode VARCHAR(50) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_woonplaats VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_burgelijke_staat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD client_kinderen JSON DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD partner_nvt BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD partner_voorletters VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD partner_geslacht VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD partner_geboortedatum DATE DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD partner_bsn VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD arbeidsovereenkomst_werkgever VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD arbeidsovereenkomst_contract VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD arbeidsovereenkomst_partner_werkgever VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD arbeidsovereenkomst_partner_contract VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD beschikking_inkomen_uit_werk BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD beschikking_uwv_wajong BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD beschikking_gemeente_amsterdam_wpi BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD beschikking_svbaow BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD beschikking_svbanw BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD beschikking_gemeente_amsterdam_ioaw BOOLEAN DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

//        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dossier DROP client_voorletters');
        $this->addSql('ALTER TABLE dossier DROP client_geslacht');
        $this->addSql('ALTER TABLE dossier DROP client_geboortedatum');
        $this->addSql('ALTER TABLE dossier DROP client_bsn');
        $this->addSql('ALTER TABLE dossier DROP client_telefoonnummer');
        $this->addSql('ALTER TABLE dossier DROP client_straat');
        $this->addSql('ALTER TABLE dossier DROP client_huisnummer');
        $this->addSql('ALTER TABLE dossier DROP client_postcode');
        $this->addSql('ALTER TABLE dossier DROP client_woonplaats');
        $this->addSql('ALTER TABLE dossier DROP client_burgelijke_staat');
        $this->addSql('ALTER TABLE dossier DROP client_kinderen');
        $this->addSql('ALTER TABLE dossier DROP partner_nvt');
        $this->addSql('ALTER TABLE dossier DROP partner_voorletters');
        $this->addSql('ALTER TABLE dossier DROP partner_geslacht');
        $this->addSql('ALTER TABLE dossier DROP partner_geboortedatum');
        $this->addSql('ALTER TABLE dossier DROP partner_bsn');
        $this->addSql('ALTER TABLE voorlegger DROP arbeidsovereenkomst_werkgever');
        $this->addSql('ALTER TABLE voorlegger DROP arbeidsovereenkomst_contract');
        $this->addSql('ALTER TABLE voorlegger DROP arbeidsovereenkomst_partner_werkgever');
        $this->addSql('ALTER TABLE voorlegger DROP arbeidsovereenkomst_partner_contract');
        $this->addSql('ALTER TABLE voorlegger DROP beschikking_inkomen_uit_werk');
        $this->addSql('ALTER TABLE voorlegger DROP beschikking_uwv_wajong');
        $this->addSql('ALTER TABLE voorlegger DROP beschikking_gemeente_amsterdam_wpi');
        $this->addSql('ALTER TABLE voorlegger DROP beschikking_svbaow');
        $this->addSql('ALTER TABLE voorlegger DROP beschikking_svbanw');
        $this->addSql('ALTER TABLE voorlegger DROP beschikking_gemeente_amsterdam_ioaw');
    }
}

<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180430134212 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ADD toeslagen_ontvangen_madi SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD toeslagen_ontvangen_gka SMALLINT DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD toeslagen_nvt BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD toeslagen_huur BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD toeslagen_zorg BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD toeslagen_kinderopvang BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD toeslagen_kindgebonden_budget BOOLEAN DEFAULT NULL');
        
        $this->addSql('UPDATE voorlegger SET toeslagen_ontvangen_madi = 1');
        $this->addSql('UPDATE voorlegger SET toeslagen_ontvangen_gka = 0');
        $this->addSql('UPDATE voorlegger SET toeslagen_huur = (SELECT COUNT(dd.id) FROM dossier_document AS dd WHERE dd.onderwerp = \'huurtoeslag\' AND dd.dossier_id = voorlegger.dossier_id) > 0');
        $this->addSql('UPDATE voorlegger SET toeslagen_zorg = (SELECT COUNT(dd.id) FROM dossier_document AS dd WHERE dd.onderwerp = \'zorgtoeslag\' AND dd.dossier_id = voorlegger.dossier_id) > 0');
        $this->addSql('UPDATE voorlegger SET toeslagen_kinderopvang = (SELECT COUNT(dd.id) FROM dossier_document AS dd WHERE dd.onderwerp = \'kinderopvangtoeslag\' AND dd.dossier_id = voorlegger.dossier_id) > 0');
        $this->addSql('UPDATE voorlegger SET toeslagen_kindgebonden_budget = (SELECT COUNT(dd.id) FROM dossier_document AS dd WHERE dd.onderwerp = \'kindgebondenBudget\' AND dd.dossier_id = voorlegger.dossier_id) > 0');
        $this->addSql('UPDATE voorlegger SET toeslagen_nvt = false');
        $this->addSql('UPDATE voorlegger SET toeslagen_nvt = true WHERE toeslagen_huur = false AND toeslagen_zorg = false AND toeslagen_kinderopvang = false AND toeslagen_kindgebonden_budget = false');
        
        $this->addSql('UPDATE dossier_document SET onderwerp = \'toeslagen\' WHERE onderwerp =\'huurtoeslag\'');
        $this->addSql('UPDATE dossier_document SET onderwerp = \'toeslagen\' WHERE onderwerp =\'zorgtoeslag\'');
        $this->addSql('UPDATE dossier_document SET onderwerp = \'toeslagen\' WHERE onderwerp =\'kinderopvangtoeslag\'');
        $this->addSql('UPDATE dossier_document SET onderwerp = \'toeslagen\' WHERE onderwerp =\'kindgebodenBudgettoeslag\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger DROP toeslagen_ontvangen_madi');
        $this->addSql('ALTER TABLE voorlegger DROP toeslagen_ontvangen_gka');
        $this->addSql('ALTER TABLE voorlegger DROP toeslagen_nvt');
        $this->addSql('ALTER TABLE voorlegger DROP toeslagen_huur');
        $this->addSql('ALTER TABLE voorlegger DROP toeslagen_zorg');
        $this->addSql('ALTER TABLE voorlegger DROP toeslagen_kinderopvang');
        $this->addSql('ALTER TABLE voorlegger DROP toeslagen_kindgebonden_budget');
    }
}

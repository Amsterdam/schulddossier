<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221020083425 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voorlegger ADD jss_adviseur_naam VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD jss_adviseur_telefoon VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ADD jss_adviseur_email VARCHAR(25) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voorlegger DROP jss_adviseur_naam');
        $this->addSql('ALTER TABLE voorlegger DROP jss_adviseur_telefoon');
        $this->addSql('ALTER TABLE voorlegger DROP jss_adviseur_email');
    }
}

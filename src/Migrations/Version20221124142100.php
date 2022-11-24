<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221124142100 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voorlegger ALTER jss_adviseur_naam TYPE VARCHAR(125)');
        $this->addSql('ALTER TABLE voorlegger ALTER jss_adviseur_telefoon TYPE VARCHAR(125)');
        $this->addSql('ALTER TABLE voorlegger ALTER jss_adviseur_email TYPE VARCHAR(125)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger ALTER jss_adviseur_naam TYPE VARCHAR(25)');
        $this->addSql('ALTER TABLE voorlegger ALTER jss_adviseur_telefoon TYPE VARCHAR(25)');
        $this->addSql('ALTER TABLE voorlegger ALTER jss_adviseur_email TYPE VARCHAR(25)');
    }
}

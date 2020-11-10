<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180411093516 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE schuldeiser ADD allegro_code VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldeiser ADD straat VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldeiser ADD huisnummer VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldeiser ADD huisnummer_toevoeging VARCHAR(25) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldeiser ADD postcode VARCHAR(6) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldeiser ADD plaats VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldeiser ADD opmerkingen TEXT DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE schuldeiser DROP allegro_code');
        $this->addSql('ALTER TABLE schuldeiser DROP straat');
        $this->addSql('ALTER TABLE schuldeiser DROP huisnummer');
        $this->addSql('ALTER TABLE schuldeiser DROP huisnummer_toevoeging');
        $this->addSql('ALTER TABLE schuldeiser DROP postcode');
        $this->addSql('ALTER TABLE schuldeiser DROP plaats');
        $this->addSql('ALTER TABLE schuldeiser DROP opmerkingen');
    }
}

<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180322143038 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE schuld_item ADD incassant_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE schuld_item ADD CONSTRAINT FK_6EF34FE0DAEC65A3 FOREIGN KEY (incassant_id) REFERENCES schuldeiser (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_6EF34FE0DAEC65A3 ON schuld_item (incassant_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE schuld_item DROP CONSTRAINT FK_6EF34FE0DAEC65A3');
        $this->addSql('DROP INDEX IDX_6EF34FE0DAEC65A3');
        $this->addSql('ALTER TABLE schuld_item DROP incassant_id');
    }
}

<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191211095758 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE dossier ADD allegro_sync_date TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD allegro_status VARCHAR(1) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD allegro_extra_status TEXT DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD allegro_eind_status VARCHAR(1) DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE dossier DROP allegro_sync_date');
        $this->addSql('ALTER TABLE dossier DROP allegro_status');
        $this->addSql('ALTER TABLE dossier DROP allegro_extra_status');
        $this->addSql('ALTER TABLE dossier DROP allegro_eind_status');
    }
}

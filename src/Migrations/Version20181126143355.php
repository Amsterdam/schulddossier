<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181126143355 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE dossier_timeline ADD subtype VARCHAR(125) DEFAULT NULL');
        $this->addSql('CREATE INDEX idx_dossier_timeline ON dossier_timeline (dossier_id, type, subtype)');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'opgevoerd_madi\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'opgevoerd_madi\' ');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'goedkeuren_madi\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'goedkeuren_madi\' ');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'afkeuren_madi\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'afkeuren_madi\' ');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'verzenden_madi\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'verzenden_madi\' ');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'gestart_gka\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'gestart_gka\' ');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'goedkeuren_dossier_gka\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'goedkeuren_dossier_gka\' ');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'afkeuren_dossier_gka\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'afkeuren_dossier_gka\' ');
        $this->addSql('UPDATE dossier_timeline SET subtype = \'afsluiten_gka\' WHERE type =\'workflow\' AND subtype IS NULL AND data::json->>\'transition\' = \'afsluiten_gka\' ');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('DROP INDEX idx_dossier_timeline');
        $this->addSql('ALTER TABLE dossier_timeline DROP subtype');
    }
}

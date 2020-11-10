<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180301125804 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE dossier ADD medewerker_schuldhulpbureau_id INT DEFAULT NULL');
        $this->addSql('UPDATE dossier SET medewerker_schuldhulpbureau_id = (SELECT id FROM gebruiker WHERE username = \'madi1\' LIMIT 1)');
        $this->addSql('ALTER TABLE dossier ALTER COLUMN medewerker_schuldhulpbureau_id SET NOT NULL');

        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E0373F310E50 FOREIGN KEY (medewerker_schuldhulpbureau_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_3D48E0373F310E50 ON dossier (medewerker_schuldhulpbureau_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dossier DROP CONSTRAINT FK_3D48E0373F310E50');
        $this->addSql('DROP INDEX IDX_3D48E0373F310E50');
        $this->addSql('ALTER TABLE dossier DROP medewerker_schuldhulpbureau_id');
    }
}

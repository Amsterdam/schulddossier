<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180326122929 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE gebruiker ADD team_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gebruiker ADD schuldhulpbureau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gebruiker ADD email VARCHAR(255) NULL');
        $this->addSql('UPDATE gebruiker SET email = \'\'');
        $this->addSql('ALTER TABLE gebruiker ALTER COLUMN email SET NOT NULL');
        $this->addSql('ALTER TABLE gebruiker ADD CONSTRAINT FK_89DCDB1F296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE gebruiker ADD CONSTRAINT FK_89DCDB1F3E6B6494 FOREIGN KEY (schuldhulpbureau_id) REFERENCES schuldhulpbureau (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_89DCDB1F296CD8AE ON gebruiker (team_id)');
        $this->addSql('CREATE INDEX IDX_89DCDB1F3E6B6494 ON gebruiker (schuldhulpbureau_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE gebruiker DROP CONSTRAINT FK_89DCDB1F296CD8AE');
        $this->addSql('ALTER TABLE gebruiker DROP CONSTRAINT FK_89DCDB1F3E6B6494');
        $this->addSql('DROP INDEX IDX_89DCDB1F296CD8AE');
        $this->addSql('DROP INDEX IDX_89DCDB1F3E6B6494');
        $this->addSql('ALTER TABLE gebruiker DROP team_id');
        $this->addSql('ALTER TABLE gebruiker DROP schuldhulpbureau_id');
        $this->addSql('ALTER TABLE gebruiker DROP email');
    }
}

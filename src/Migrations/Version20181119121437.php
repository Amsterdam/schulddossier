<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181119121437 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE schuldhulpbureau ADD team_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldhulpbureau ADD CONSTRAINT FK_28D92139296CD8AE FOREIGN KEY (team_id) REFERENCES team (id) ON DELETE SET NULL NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX IDX_28D92139296CD8AE ON schuldhulpbureau (team_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE schuldhulpbureau DROP CONSTRAINT FK_28D92139296CD8AE');
        $this->addSql('DROP INDEX IDX_28D92139296CD8AE');
        $this->addSql('ALTER TABLE schuldhulpbureau DROP team_id');
    }
}

<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190121143103 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE TABLE gebruiker_schuldhulpbureau (gebruiker_id INT NOT NULL, schuldhulpbureau_id INT NOT NULL, PRIMARY KEY(gebruiker_id, schuldhulpbureau_id))');
        $this->addSql('CREATE INDEX IDX_367A5DC79C92A3DF ON gebruiker_schuldhulpbureau (gebruiker_id)');
        $this->addSql('CREATE INDEX IDX_367A5DC73E6B6494 ON gebruiker_schuldhulpbureau (schuldhulpbureau_id)');
        $this->addSql('ALTER TABLE gebruiker_schuldhulpbureau ADD CONSTRAINT FK_367A5DC79C92A3DF FOREIGN KEY (gebruiker_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE gebruiker_schuldhulpbureau ADD CONSTRAINT FK_367A5DC73E6B6494 FOREIGN KEY (schuldhulpbureau_id) REFERENCES schuldhulpbureau (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE gebruiker DROP CONSTRAINT fk_89dcdb1f3e6b6494');
        $this->addSql('DROP INDEX idx_89dcdb1f3e6b6494');

        $this->addSql('INSERT INTO gebruiker_schuldhulpbureau (gebruiker_id, schuldhulpbureau_id) SELECT id AS gebruiker_id, schuldhulpbureau_id FROM gebruiker WHERE type = \'madi\' AND schuldhulpbureau_id IS NOT NULL');

        $this->addSql('ALTER TABLE gebruiker DROP schuldhulpbureau_id');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('DROP TABLE gebruiker_schuldhulpbureau');
        $this->addSql('ALTER TABLE gebruiker ADD schuldhulpbureau_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gebruiker ADD CONSTRAINT fk_89dcdb1f3e6b6494 FOREIGN KEY (schuldhulpbureau_id) REFERENCES schuldhulpbureau (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE INDEX idx_89dcdb1f3e6b6494 ON gebruiker (schuldhulpbureau_id)');
    }
}

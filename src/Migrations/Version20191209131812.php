<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20191209131812 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE schuldhulpbureau ADD allegro_username VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldhulpbureau ADD allegro_password VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldhulpbureau ADD allegro_session_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE schuldhulpbureau ADD allegro_session_age TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE schuldhulpbureau DROP allegro_username');
        $this->addSql('ALTER TABLE schuldhulpbureau DROP allegro_password');
        $this->addSql('ALTER TABLE schuldhulpbureau DROP allegro_session_id');
        $this->addSql('ALTER TABLE schuldhulpbureau DROP allegro_session_age');
    }
}

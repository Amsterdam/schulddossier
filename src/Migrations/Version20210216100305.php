<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210216100305 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SEQUENCE news_item_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE news_item (id INT NOT NULL, created_by_id INT DEFAULT NULL, last_updated_by_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, content TEXT DEFAULT NULL, published_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, last_updated_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_CAC6D395B03A8386 ON news_item (created_by_id)');
        $this->addSql('CREATE INDEX IDX_CAC6D395E562D849 ON news_item (last_updated_by_id)');
        $this->addSql('ALTER TABLE news_item ADD CONSTRAINT FK_CAC6D395B03A8386 FOREIGN KEY (created_by_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE news_item ADD CONSTRAINT FK_CAC6D395E562D849 FOREIGN KEY (last_updated_by_id) REFERENCES gebruiker (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE news_item_id_seq CASCADE');
        $this->addSql('DROP TABLE news_item');
    }
}

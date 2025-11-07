<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251107143558 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Remove corrigeren_gemeente_belasting column and change kwijtschelding_gemeente_belasting from boolean to string enum.';
    }

    public function up(Schema $schema): void
    {
        // Map "true" to "ja" and "false" to "nee" in kwijtschelding_gemeente_belasting
        $this->addSql("UPDATE voorlegger SET kwijtschelding_gemeente_belasting = 'ja' WHERE kwijtschelding_gemeente_belasting = 'true'");
        $this->addSql("UPDATE voorlegger SET kwijtschelding_gemeente_belasting = 'nee' WHERE kwijtschelding_gemeente_belasting = 'false'");
        $this->addSql("UPDATE voorlegger SET kwijtschelding_gemeente_belasting = 'onbekend' WHERE kwijtschelding_gemeente_belasting IS NULL");

        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voorlegger DROP corrigeren_gemeente_belasting');
        $this->addSql('ALTER TABLE voorlegger ALTER kwijtschelding_gemeente_belasting TYPE VARCHAR(255)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger ADD corrigeren_gemeente_belasting BOOLEAN DEFAULT NULL');
        // Convert string values back to boolean before altering the column type
        $this->addSql("UPDATE voorlegger SET kwijtschelding_gemeente_belasting = 'true' WHERE kwijtschelding_gemeente_belasting = 'ja'");
        $this->addSql("UPDATE voorlegger SET kwijtschelding_gemeente_belasting = 'false' WHERE kwijtschelding_gemeente_belasting = 'nee'");
        $this->addSql("UPDATE voorlegger SET kwijtschelding_gemeente_belasting = NULL WHERE kwijtschelding_gemeente_belasting = 'onbekend'");
        $this->addSql('ALTER TABLE voorlegger ALTER kwijtschelding_gemeente_belasting TYPE BOOLEAN');
    }
}

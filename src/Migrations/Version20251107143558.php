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
        $this->addSql('DROP SEQUENCE thumbnail_id_seq CASCADE');
        $this->addSql('ALTER TABLE thumbnail DROP CONSTRAINT fk_c35726e6c33f7837');
        $this->addSql('DROP TABLE thumbnail');
        $this->addSql('ALTER INDEX idx_3d48e0373e6b6494 RENAME TO IDX_3D48E037BD53D44E');
        $this->addSql('ALTER INDEX idx_3d48e0373f310e50 RENAME TO IDX_3D48E0379445F818');
        $this->addSql('ALTER INDEX idx_367a5dc79c92a3df RENAME TO IDX_EE455A469C92A3DF');
        $this->addSql('ALTER INDEX idx_367a5dc73e6b6494 RENAME TO IDX_EE455A46BD53D44E');
        $this->addSql('ALTER INDEX idx_28d92139296cd8ae RENAME TO IDX_6DD12C19296CD8AE');
        $this->addSql('ALTER TABLE voorlegger DROP corrigeren_gemeente_belasting');
        $this->addSql('ALTER TABLE voorlegger ALTER kwijtschelding_gemeente_belasting TYPE VARCHAR(255)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE thumbnail_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE thumbnail (id INT NOT NULL, document_id INT NOT NULL, bestandsnaam VARCHAR(255) NOT NULL, type VARCHAR(25) NOT NULL, sort INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX uq_bestandsnaam ON thumbnail (bestandsnaam)');
        $this->addSql('CREATE INDEX idx_c35726e6c33f7837 ON thumbnail (document_id)');
        $this->addSql('ALTER TABLE thumbnail ADD CONSTRAINT fk_c35726e6c33f7837 FOREIGN KEY (document_id) REFERENCES document (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER INDEX idx_ee455a46bd53d44e RENAME TO idx_367a5dc73e6b6494');
        $this->addSql('ALTER INDEX idx_ee455a469c92a3df RENAME TO idx_367a5dc79c92a3df');
        $this->addSql('ALTER INDEX idx_6dd12c19296cd8ae RENAME TO idx_28d92139296cd8ae');
        $this->addSql('ALTER TABLE voorlegger ADD corrigeren_gemeente_belasting BOOLEAN DEFAULT NULL');
        $this->addSql('ALTER TABLE voorlegger ALTER kwijtschelding_gemeente_belasting TYPE BOOLEAN');
        $this->addSql('ALTER INDEX idx_3d48e0379445f818 RENAME TO idx_3d48e0373f310e50');
        $this->addSql('ALTER INDEX idx_3d48e037bd53d44e RENAME TO idx_3d48e0373e6b6494');
    }
}

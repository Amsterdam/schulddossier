<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20251111152154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'Update dossier.indiendatum_tijd with the latest datumtijd from dossier_timeline for subtype verzenden_shv';
    }

    public function up(Schema $schema): void
    {
        $this->addSql("
            UPDATE dossier
            SET indiendatum_tijd = (
                SELECT MAX(dt.datumtijd)
                FROM dossier_timeline dt
                WHERE dt.dossier_id = dossier.id
                  AND dt.subtype = 'verzenden_shv'
            )
            WHERE EXISTS (
                SELECT 1
                FROM dossier_timeline dt
                WHERE dt.dossier_id = dossier.id
                  AND dt.subtype = 'verzenden_shv'
            );
        ");
    }

    public function down(Schema $schema): void
    {
        $this->addSql("
            UPDATE dossier
            SET indiendatum_tijd = NULL
        ");
    }
}

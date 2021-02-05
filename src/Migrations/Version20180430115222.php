<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180430115222 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql("
                INSERT INTO aantekening
                    (id, dossier_id, schuld_item_id, gebruiker_id, string, datum_tijd, tekst)
                SELECT
                    nextval('aantekening_id_seq'), dossier_id, id, aanmaker_id, 'schuldenoverzicht', aanmaak_datum_tijd, opmerkingen
                FROM schuld_item
                WHERE opmerkingen IS NOT NULL AND opmerkingen != ''
            ");
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}

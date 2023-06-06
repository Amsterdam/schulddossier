<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230605122047 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $oldColumnNames = [
            "legitimatie_ontvangen_shv",
            "inkomstenspecificatie_ontvangen_shv",
            "arbeidsovereenkomst_ontvangen_shv",
            "alimentatie_ontvangen_shv",
            "kostgeld_ontvangen_shv",
            "huurspecificatie_ontvangen_shv",
            "polisblad_zorgverzekering_ontvangen_shv",
            "alimentatie_echtscheidingsconvenant_ontvangen_shv",
            "overeenkomst_kinderopvang_ontvangen_shv",
            "autolasten_km_woonwerkverkeer_ontvangen_shv",
            "verklaring_werkgever_ontvangen_shv",
            "vrijwaringsbewijs_ontvangen_shv",
            "schuldenoverzicht_ontvangen_shv",
            "vorderingen_ontvangen_shv",
            "inzage_toetsing_bkr_ontvangen_shv",
            "stabilisatieovereenkomst_ontvangen_shv",
            "meterstanden_energie_ontvangen_shv",
            "waternet_ontvangen_shv",
            "retourbewijs_modem_ontvangen_shv",
            "beschikking_onder_bewindstelling_ontvangen_shv",
            "gereserveerde_gelden_ontvangen_shv",
            "auto_taxatie_ontvangen_shv",
            "toelichting_aanvraag_schuldsanering_client_ontvangen_shv",
            "toelichting_aanvraag_schuldsanering_shv_ontvangen_shv",
            "toelichting_aanvraag_schuldsanering_shv_ontvangen_gka",
            "ondertekend_aanvraag_formulier_ontvangen_shv",
            "voorlopige_teruggaaf_belastingdienst_ontvangen_shv",
            "vtlb_ontvangen_shv",
            "beschikking_uwv_ontvangen_shv",
            "budgetbeheer_ontvangen_shv",
            "kwijtschelding_gemeente_belasting_ontvangen_shv",
            "cjib_ontvangen_shv",
            "toeslagen_ontvangen_shv",
            "aangifte_belastingdienst_shv"
        ];

        foreach ($oldColumnNames as $oldColumnName) {
            $newColumnName = str_replace('shv', 'madi', $oldColumnName);
            $query = "ALTER TABLE voorlegger RENAME COLUMN " . $oldColumnName . " TO " . $newColumnName;
            $this->addSql($query);
        }
    }
}

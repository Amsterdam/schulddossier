<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230522125400 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        $oldColumnNames = [
                        "legitimatie_ontvangen_madi",
                        "inkomstenspecificatie_ontvangen_madi",
                        "arbeidsovereenkomst_ontvangen_madi",
                        "alimentatie_ontvangen_madi",
                        "kostgeld_ontvangen_madi",
                        "huurspecificatie_ontvangen_madi",
                        "polisblad_zorgverzekering_ontvangen_madi",
                        "alimentatie_echtscheidingsconvenant_ontvangen_madi",
                        "overeenkomst_kinderopvang_ontvangen_madi",
                        "autolasten_km_woonwerkverkeer_ontvangen_madi",
                        "verklaring_werkgever_ontvangen_madi",
                        "vrijwaringsbewijs_ontvangen_madi",
                        "schuldenoverzicht_ontvangen_madi",
                        "vorderingen_ontvangen_madi",
                        "inzage_toetsing_bkr_ontvangen_madi",
                        "stabilisatieovereenkomst_ontvangen_madi",
                        "meterstanden_energie_ontvangen_madi",
                        "waternet_ontvangen_madi",
                        "retourbewijs_modem_ontvangen_madi",
                        "beschikking_onder_bewindstelling_ontvangen_madi",
                        "gereserveerde_gelden_ontvangen_madi",
                        "auto_taxatie_ontvangen_madi",
                        "toelichting_aanvraag_schuldsanering_client_ontvangen_madi",
                        "toelichting_aanvraag_schuldsanering_madi_ontvangen_madi",
                        "toelichting_aanvraag_schuldsanering_madi_ontvangen_gka",
                        "ondertekend_aanvraag_formulier_ontvangen_madi",
                        "voorlopige_teruggaaf_belastingdienst_ontvangen_madi",
                        "vtlb_ontvangen_madi",
                        "beschikking_uwv_ontvangen_madi",
                        "budgetbeheer_ontvangen_madi",
                        "kwijtschelding_gemeente_belasting_ontvangen_madi",
                        "cjib_ontvangen_madi",
                        "toeslagen_ontvangen_madi",
                        "aangifte_belastingdienst_madi"
                    ];

        foreach ($oldColumnNames as $oldColumnName) {
            $newColumnName = str_replace('madi', 'shv', $oldColumnName);
            $query = "ALTER TABLE voorlegger RENAME COLUMN " . $oldColumnName . " TO " . $newColumnName;
            $this->addSql($query);
        }
    }
}

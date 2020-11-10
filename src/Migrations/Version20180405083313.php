<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180405083313 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('ALTER TABLE voorlegger ALTER legitimatie_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER legitimatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER inkomstenspecificatie_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER inkomstenspecificatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER arbeidsovereenkomst_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER arbeidsovereenkomst_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER kostgeld_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER kostgeld_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER huurtoeslag_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER huurtoeslag_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER zorgtoeslag_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER zorgtoeslag_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER kinderopvangtoeslag_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER kinderopvangtoeslag_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER kindgebonden_budget_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER kindgebonden_budget_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER huurspecificatie_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER huurspecificatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER polisblad_zorgverzekering_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER polisblad_zorgverzekering_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_echtscheidingsconvenant_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_echtscheidingsconvenant_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER overeenkomst_kinderopvang_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER overeenkomst_kinderopvang_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER corrigeren_gemeente_belasting_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER corrigeren_gemeente_belasting_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER autolasten_km_woonwerkverkeer_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER autolasten_km_woonwerkverkeer_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER verklaring_werkgever_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER verklaring_werkgever_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER vrijwaringsbewijs_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER vrijwaringsbewijs_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER schuldenoverzicht_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER schuldenoverzicht_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER vorderingen_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER vorderingen_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER inzage_toetsing_bkr_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER inzage_toetsing_bkr_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER stabilisatieovereenkomst_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER stabilisatieovereenkomst_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER meterstanden_energie_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER meterstanden_energie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER waternet_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER waternet_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER retourbewijs_modem_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER retourbewijs_modem_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER beschikking_onder_bewindstelling_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER beschikking_onder_bewindstelling_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER gereserveerde_gelden_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER gereserveerde_gelden_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER auto_taxatie_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER auto_taxatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_client_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_client_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_madi_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_madi_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER ondertekend_aanvraag_formulier_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER ondertekend_aanvraag_formulier_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER voorlopige_teruggaaf_belastingdienst_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER voorlopige_teruggaaf_belastingdienst_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER vtlb_ontvangen_gka TYPE SMALLINT USING CASE WHEN false THEN 0 ELSE 1 END');
        $this->addSql('ALTER TABLE voorlegger ALTER vtlb_ontvangen_gka DROP DEFAULT');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE voorlegger ALTER legitimatie_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER legitimatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER vtlb_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER vtlb_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER inkomstenspecificatie_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER inkomstenspecificatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER arbeidsovereenkomst_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER arbeidsovereenkomst_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER voorlopige_teruggaaf_belastingdienst_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER voorlopige_teruggaaf_belastingdienst_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER kostgeld_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER kostgeld_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER huurtoeslag_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER huurtoeslag_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER zorgtoeslag_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER zorgtoeslag_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER kinderopvangtoeslag_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER kinderopvangtoeslag_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER kindgebonden_budget_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER kindgebonden_budget_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER huurspecificatie_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER huurspecificatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER polisblad_zorgverzekering_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER polisblad_zorgverzekering_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_echtscheidingsconvenant_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER alimentatie_echtscheidingsconvenant_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER overeenkomst_kinderopvang_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER overeenkomst_kinderopvang_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER corrigeren_gemeente_belasting_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER corrigeren_gemeente_belasting_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER auto_taxatie_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER auto_taxatie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER autolasten_km_woonwerkverkeer_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER autolasten_km_woonwerkverkeer_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER verklaring_werkgever_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER verklaring_werkgever_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER vrijwaringsbewijs_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER vrijwaringsbewijs_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER schuldenoverzicht_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER schuldenoverzicht_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER vorderingen_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER vorderingen_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER inzage_toetsing_bkr_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER inzage_toetsing_bkr_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER stabilisatieovereenkomst_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER stabilisatieovereenkomst_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER meterstanden_energie_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER meterstanden_energie_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER waternet_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER waternet_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER retourbewijs_modem_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER retourbewijs_modem_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_client_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_client_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_madi_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER toelichting_aanvraag_schuldsanering_madi_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER beschikking_onder_bewindstelling_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER beschikking_onder_bewindstelling_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER gereserveerde_gelden_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER gereserveerde_gelden_ontvangen_gka DROP DEFAULT');
        $this->addSql('ALTER TABLE voorlegger ALTER ondertekend_aanvraag_formulier_ontvangen_gka TYPE BOOLEAN');
        $this->addSql('ALTER TABLE voorlegger ALTER ondertekend_aanvraag_formulier_ontvangen_gka DROP DEFAULT');
    }
}

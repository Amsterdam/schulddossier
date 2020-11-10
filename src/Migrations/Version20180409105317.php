<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180409105317 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        $this->addSql('UPDATE voorlegger SET legitimatie_ontvangen_gka = 0 WHERE legitimatie_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET inkomstenspecificatie_ontvangen_gka = 0 WHERE inkomstenspecificatie_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET arbeidsovereenkomst_ontvangen_gka = 0 WHERE arbeidsovereenkomst_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET alimentatie_ontvangen_gka = 0 WHERE alimentatie_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET kostgeld_ontvangen_gka = 0 WHERE kostgeld_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET huurtoeslag_ontvangen_gka = 0 WHERE huurtoeslag_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET zorgtoeslag_ontvangen_gka = 0 WHERE zorgtoeslag_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET kinderopvangtoeslag_ontvangen_gka = 0 WHERE kinderopvangtoeslag_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET kindgebonden_budget_ontvangen_gka = 0 WHERE kindgebonden_budget_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET huurspecificatie_ontvangen_gka = 0 WHERE huurspecificatie_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET polisblad_zorgverzekering_ontvangen_gka = 0 WHERE polisblad_zorgverzekering_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET alimentatie_echtscheidingsconvenant_ontvangen_gka = 0 WHERE alimentatie_echtscheidingsconvenant_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET overeenkomst_kinderopvang_ontvangen_gka = 0 WHERE overeenkomst_kinderopvang_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET corrigeren_gemeente_belasting_ontvangen_gka = 0 WHERE corrigeren_gemeente_belasting_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET autolasten_km_woonwerkverkeer_ontvangen_gka = 0 WHERE autolasten_km_woonwerkverkeer_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET verklaring_werkgever_ontvangen_gka = 0 WHERE verklaring_werkgever_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET vrijwaringsbewijs_ontvangen_gka = 0 WHERE vrijwaringsbewijs_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET schuldenoverzicht_ontvangen_gka = 0 WHERE schuldenoverzicht_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET vorderingen_ontvangen_gka = 0 WHERE vorderingen_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET inzage_toetsing_bkr_ontvangen_gka = 0 WHERE inzage_toetsing_bkr_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET stabilisatieovereenkomst_ontvangen_gka = 0 WHERE stabilisatieovereenkomst_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET meterstanden_energie_ontvangen_gka = 0 WHERE meterstanden_energie_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET waternet_ontvangen_gka = 0 WHERE waternet_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET retourbewijs_modem_ontvangen_gka = 0 WHERE retourbewijs_modem_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET beschikking_onder_bewindstelling_ontvangen_gka = 0 WHERE beschikking_onder_bewindstelling_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET gereserveerde_gelden_ontvangen_gka = 0 WHERE gereserveerde_gelden_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET auto_taxatie_ontvangen_gka = 0 WHERE auto_taxatie_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET toelichting_aanvraag_schuldsanering_client_ontvangen_gka = 0 WHERE toelichting_aanvraag_schuldsanering_client_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET toelichting_aanvraag_schuldsanering_madi_ontvangen_gka = 0 WHERE toelichting_aanvraag_schuldsanering_madi_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET ondertekend_aanvraag_formulier_ontvangen_gka = 0 WHERE ondertekend_aanvraag_formulier_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET voorlopige_teruggaaf_belastingdienst_ontvangen_gka = 0 WHERE voorlopige_teruggaaf_belastingdienst_ontvangen_gka = 1');
        $this->addSql('UPDATE voorlegger SET vtlb_ontvangen_gka = 0 WHERE vtlb_ontvangen_gka = 1');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs

    }
}

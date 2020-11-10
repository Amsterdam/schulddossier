<?php declare(strict_types = 1);

namespace DoctrineMigrations;

use Doctrine\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20180301145034 extends AbstractMigration
{
    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SEQUENCE voorlegger_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE voorlegger (id VARCHAR(255) NOT NULL, dossier_id INT NOT NULL, legitimatie_ontvangen_gka BOOLEAN DEFAULT NULL, legitimatie_ontvangen_madi BOOLEAN DEFAULT NULL, vtlb_madi BOOLEAN DEFAULT NULL, vtlb_gka BOOLEAN DEFAULT NULL, inkomstenspecificatie_ontvangen_madi BOOLEAN DEFAULT NULL, inkomstenspecificatie_ontvangen_gka BOOLEAN DEFAULT NULL, arbeidsovereenkomst_ontvangen_madi BOOLEAN DEFAULT NULL, arbeidsovereenkomst_ontvangen_gka BOOLEAN DEFAULT NULL, arbeidsovereenkomst_nvt BOOLEAN DEFAULT NULL, beschikking_uwv_ontvangen_madi BOOLEAN DEFAULT NULL, beschikking_uwv_ontvangen_gka BOOLEAN DEFAULT NULL, beschikking_uwv_nvt BOOLEAN DEFAULT NULL, beschikking_uwv_ww BOOLEAN DEFAULT NULL, beschikking_uwv_wia BOOLEAN DEFAULT NULL, beschikking_uwv_zw BOOLEAN DEFAULT NULL, beschikking_uwv_overig VARCHAR(255) DEFAULT NULL, voorlopige_terugaaf_belastingdienst_ontvangen_madi BOOLEAN DEFAULT NULL, voorlopige_terugaaf_belastingdienst_ontvangen_gka BOOLEAN DEFAULT NULL, voorlopige_terugaaf_belastingdienst_nvt BOOLEAN DEFAULT NULL, alimentatie_ontvangen_madi BOOLEAN DEFAULT NULL, alimentatie_ontvangen_gka BOOLEAN DEFAULT NULL, alimentatie_nvt BOOLEAN DEFAULT NULL, kostgeld_ontvangen_madi BOOLEAN DEFAULT NULL, kostgeld_ontvangen_gka BOOLEAN DEFAULT NULL, kostgeld_nvt BOOLEAN DEFAULT NULL, huurtoeslag_ontvangen_madi BOOLEAN DEFAULT NULL, huurtoeslag_ontvangen_gka BOOLEAN DEFAULT NULL, huurtoeslag_nvt BOOLEAN DEFAULT NULL, zorgtoeslag_ontvangen_madi BOOLEAN DEFAULT NULL, zorgtoeslag_ontvangen_gka BOOLEAN DEFAULT NULL, zorgtoeslag_nvt BOOLEAN DEFAULT NULL, kinderopvangtoeslag_ontvangen_madi BOOLEAN DEFAULT NULL, kinderopvangtoeslag_ontvangen_gka BOOLEAN DEFAULT NULL, kinderopvangtoeslag_nvt BOOLEAN DEFAULT NULL, kindgebonden_budget_ontvangen_madi BOOLEAN DEFAULT NULL, kindgebonden_budget_ontvangen_gka BOOLEAN DEFAULT NULL, kindgebonden_budget_nvt BOOLEAN DEFAULT NULL, huurspecificatie_ontvangen_madi BOOLEAN DEFAULT NULL, huurspecificatie_ontvangen_gka BOOLEAN DEFAULT NULL, huurspecificatie_nvt BOOLEAN DEFAULT NULL, polisblad_zorgverzekering_ontvangen_madi BOOLEAN DEFAULT NULL, polisblad_zorgverzekering_ontvangen_gka BOOLEAN DEFAULT NULL, polisblad_zorgverzekering_nvt BOOLEAN DEFAULT NULL, alimentatie_echtscheidingsconvenant_ontvangen_madi BOOLEAN DEFAULT NULL, alimentatie_echtscheidingsconvenant_ontvangen_gka BOOLEAN DEFAULT NULL, alimentatie_echtscheidingsconvenant_nvt BOOLEAN DEFAULT NULL, overeenkomst_kinderopvang_ontvangen_madi BOOLEAN DEFAULT NULL, overeenkomst_kinderopvang_ontvangen_gka BOOLEAN DEFAULT NULL, overeenkomst_kinderopvang_nvt BOOLEAN DEFAULT NULL, kwijtschelding_gemeente_belasting_ontvangen_madi BOOLEAN DEFAULT NULL, kwijtschelding_gemeente_belasting_ontvangen_gka BOOLEAN DEFAULT NULL, kwijtschelding_gemeente_belasting_nvt BOOLEAN DEFAULT NULL, corrigeren_gemeente_belasting_ontvangen_gka BOOLEAN DEFAULT NULL, corrigeren_gemeente_belasting_nvt BOOLEAN DEFAULT NULL, autolasten_km_woonwerkverkeer_ontvangen_madi BOOLEAN DEFAULT NULL, autolasten_km_woonwerkverkeer_ontvangen_gka BOOLEAN DEFAULT NULL, autolasten_km_woonwerkverkeer_nvt BOOLEAN DEFAULT NULL, kenteken_ontvangen_madi BOOLEAN DEFAULT NULL, kenteken_ontvangen_gka BOOLEAN DEFAULT NULL, kenteken_nvt BOOLEAN DEFAULT NULL, verklaring_werkgever_ontvangen_madi BOOLEAN DEFAULT NULL, verklaring_werkgever_ontvangen_gka BOOLEAN DEFAULT NULL, verklaring_werkgever_nvt BOOLEAN DEFAULT NULL, vrijwaringsbewijs_ontvangen_madi BOOLEAN DEFAULT NULL, vrijwaringsbewijs_ontvangen_gka BOOLEAN DEFAULT NULL, vrijwaringsbewijs_nvt BOOLEAN DEFAULT NULL, schuldenoverzicht_ontvangen_madi BOOLEAN DEFAULT NULL, schuldenoverzicht_ontvangen_gka BOOLEAN DEFAULT NULL, vorderingen_ontvangen_madi BOOLEAN DEFAULT NULL, vorderingen_ontvangen_gka BOOLEAN DEFAULT NULL, inzage_toetsing_bkr_ontvangen_madi BOOLEAN DEFAULT NULL, inzage_toetsing_bkr_ontvangen_gka BOOLEAN DEFAULT NULL, stabilisatieovereenkomst_ontvangen_madi BOOLEAN DEFAULT NULL, stabilisatieovereenkomst_ontvangen_gka BOOLEAN DEFAULT NULL, stabilisatieovereenkomst_nvt BOOLEAN DEFAULT NULL, cjib_ontvangen_madi BOOLEAN DEFAULT NULL, cjib_ontvangen_gka BOOLEAN DEFAULT NULL, cjib_nvt BOOLEAN DEFAULT NULL, meterstanden_energie_ontvangen_madi BOOLEAN DEFAULT NULL, meterstanden_energie_ontvangen_gka BOOLEAN DEFAULT NULL, meterstanden_energie_nvt BOOLEAN DEFAULT NULL, waternet_ontvangen_madi BOOLEAN DEFAULT NULL, waternet_ontvangen_gka BOOLEAN DEFAULT NULL, waternet_nvt BOOLEAN DEFAULT NULL, klantnummer_ziggo_ontvangen_madi BOOLEAN DEFAULT NULL, klantnummer_ziggo_ontvangen_gka BOOLEAN DEFAULT NULL, klantnummer_ziggo_nvt BOOLEAN DEFAULT NULL, retourbewijs_modem_ontvangen_madi BOOLEAN DEFAULT NULL, retourbewijs_modem_ontvangen_gka BOOLEAN DEFAULT NULL, retourbewijs_modem_nvt BOOLEAN DEFAULT NULL, toelichting_aanvraag_schuldsanering_ontvangen_madi BOOLEAN DEFAULT NULL, toelichting_aanvraag_schuldsanering_ontvangen_gka BOOLEAN DEFAULT NULL, bewindstelling_of_budgetbeheer_nvt BOOLEAN DEFAULT NULL, beschikking_onder_bewindstelling_ontvangen_madi BOOLEAN DEFAULT NULL, beschikking_onder_bewindstelling_ontvangen_gka BOOLEAN DEFAULT NULL, beschikking_onder_bewindstelling_nvt BOOLEAN DEFAULT NULL, budgetbeheer_ontvangen_madi BOOLEAN DEFAULT NULL, budgetbeheer_ontvangen_gka BOOLEAN DEFAULT NULL, budgetbeheer_nvt BOOLEAN DEFAULT NULL, budgetbeheer_plangroep BOOLEAN DEFAULT NULL, budgetbeheer_cav BOOLEAN DEFAULT NULL, budgetbeheer_fibi BOOLEAN DEFAULT NULL, budgetbeheer_overig VARCHAR(255) DEFAULT NULL, gereserveerde_gelden_ontvangen_madi BOOLEAN DEFAULT NULL, gereserveerde_gelden_ontvangen_gka BOOLEAN DEFAULT NULL, gereserveerde_gelden_nvt BOOLEAN DEFAULT NULL, ondertekend_aanvraag_formulier_madi BOOLEAN DEFAULT NULL, ondertekend_aanvraag_formulier_gka BOOLEAN DEFAULT NULL, aanvullende_informatie TEXT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8A370A38611C0C56 ON voorlegger (dossier_id)');
        $this->addSql('ALTER TABLE voorlegger ADD CONSTRAINT FK_8A370A38611C0C56 FOREIGN KEY (dossier_id) REFERENCES dossier (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE dossier ADD voorlegger_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE dossier ADD CONSTRAINT FK_3D48E037E6B3C17 FOREIGN KEY (voorlegger_id) REFERENCES voorlegger (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_3D48E037E6B3C17 ON dossier (voorlegger_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'postgresql', 'Migration can only be executed safely on \'postgresql\'.');

        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE dossier DROP CONSTRAINT FK_3D48E037E6B3C17');
        $this->addSql('DROP SEQUENCE voorlegger_id_seq CASCADE');
        $this->addSql('DROP TABLE voorlegger');
        $this->addSql('DROP INDEX UNIQ_3D48E037E6B3C17');
        $this->addSql('ALTER TABLE dossier DROP voorlegger_id');
    }
}

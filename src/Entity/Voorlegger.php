<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Voorlegger
{
    /**
     * @var integer
     * @ORM\Id
     * @ORM\Column
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Dossier
     * @ORM\OneToOne(targetEntity="Dossier", inversedBy="voorlegger", orphanRemoval=true)
     * @ORM\JoinColumn(name="dossier_id", referencedColumnName="id", nullable=false)
     */
    private $dossier;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $legitimatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $legitimatieOntvangenMadi;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vtlbMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vtlbGka;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inkomstenspecificatieOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inkomstenspecificatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $arbeidsovereenkomstOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $arbeidsovereenkomstOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $arbeidsovereenkomstNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingUwvNvt;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingUwvWw;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingUwvWia;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingUwvZw;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $beschikkingUwvOverig;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $voorlopigeTerugaafBelastingdienstOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $voorlopigeTerugaafBelastingdienstOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $voorlopigeTerugaafBelastingdienstNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kostgeldOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kostgeldOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kostgeldNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $huurtoeslagOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $huurtoeslagOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $huurtoeslagNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zorgtoeslagOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zorgtoeslagOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $zorgtoeslagNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kinderopvangtoeslagOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kinderopvangtoeslagOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kinderopvangtoeslagNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kindgebondenBudgetOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kindgebondenBudgetOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kindgebondenBudgetNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $huurspecificatieOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $huurspecificatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $huurspecificatieNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $polisbladZorgverzekeringOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $polisbladZorgverzekeringOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $polisbladZorgverzekeringNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieEchtscheidingsconvenantOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieEchtscheidingsconvenantOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieEchtscheidingsconvenantNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $overeenkomstKinderopvangOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $overeenkomstKinderopvangOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $overeenkomstKinderopvangNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kwijtscheldingGemeenteBelastingNvt;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kwijtscheldingGemeenteBelasting;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $corrigerenGemeenteBelastingOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $corrigerenGemeenteBelastingNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autoNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autoTaxatieOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autoTaxatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autoTaxatieNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autolastenKmWoonwerkverkeerOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autolastenKmWoonwerkverkeerOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autolastenKmWoonwerkverkeerNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $verklaringWerkgeverOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $verklaringWerkgeverOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $verklaringWerkgeverNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vrijwaringsbewijsOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vrijwaringsbewijsOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vrijwaringsbewijsNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $schuldenoverzichtOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $schuldenoverzichtOntvangenGka;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vorderingenOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vorderingenOntvangenGka;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inzageToetsingBkrOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $inzageToetsingBkrOntvangenGka;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $stabilisatieovereenkomstOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $stabilisatieovereenkomstOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $stabilisatieovereenkomstNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cjib;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cjibNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $meterstandenEnergieOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $meterstandenEnergieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $meterstandenEnergieNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $waternetOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $waternetOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $waternetNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $retourbewijsModemOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $retourbewijsModemOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $retourbewijsModemNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringClientOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringClientOntvangenGka;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringMadiOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringMadiOntvangenGka;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $bewindstellingOfBudgetbeheerNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingOnderBewindstellingOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingOnderBewindstellingOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingOnderBewindstellingNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $budgetbeheerNvt;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $budgetbeheerPlangroep;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $budgetbeheerCav;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $budgetbeheerFibu;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $budgetbeheerOverig;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $gereserveerdeGeldenOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $gereserveerdeGeldenOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $gereserveerdeGeldenNvt;

    // ---

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ondertekendAanvraagFormulierMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $ondertekendAanvraagFormulierGka;

    // ---

    /**
     * @var string
     * @ORM\Column(type="text", nullable=true)
     */
    private $aanvullendeInformatie;

    // ---

    /**
     * @var string
     * @ORM\Column(type="string", length=125, nullable=true)
     * @Assert\Length(min=0, max=125)
     */
    private $energieBedrijf;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Assert\Length(min=0, max=25)
     */
    private $energieBedrijfKlantnummer;

    /**
     * @var \DateTime
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $energieBedrijfDatumOpname;

    /**
     * @var long
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $energieBedrijfT1;

    /**
     * @var long
     * @ORM\Column(type="bigint", nullable=true)
     */
    private $energieBedrijfT2;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $energieBedrijfGas;

    /**
     * @var string
     * @ORM\Column(type="string", length=125, nullable=true)
     * @Assert\Length(min=0, max=125)
     */
    private $warmteBedrijf;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Assert\Length(min=0, max=25)
     */
    private $warmteBedrijfKlantnummer;

    /**
     * @var \DateTime
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $warmteBedrijfDatumOpname;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $warmteBedrijfOpname;

    /**
     * @var string
     * @ORM\Column(type="string", length=25, nullable=true)
     * @Assert\Length(min=0, max=25)
     */
    private $drinkwaterKlantnummer;

    /**
     * @var \DateTime
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $drinkwaterDatumOpname;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     */
    private $drinkwaterOpname;

    // ---

    public function __construct()
    {
        $this->legitimatieOntvangenGka = false;
        $this->legitimatieOntvangenMadi = false;
        $this->vtlbMadi = false;
        $this->vtlbGka = false;
        $this->inkomstenspecificatieOntvangenMadi = false;
        $this->inkomstenspecificatieOntvangenGka = false;
        $this->arbeidsovereenkomstOntvangenMadi = false;
        $this->arbeidsovereenkomstOntvangenGka = false;
        $this->arbeidsovereenkomstNvt = false;
        $this->beschikkingUwvNvt = false;
        $this->beschikkingUwvWw = false;
        $this->beschikkingUwvWia = false;
        $this->beschikkingUwvZw = false;
        $this->voorlopigeTerugaafBelastingdienstOntvangenMadi = false;
        $this->voorlopigeTerugaafBelastingdienstOntvangenGka = false;
        $this->voorlopigeTerugaafBelastingdienstNvt = false;
        $this->alimentatieOntvangenMadi = false;
        $this->alimentatieOntvangenGka = false;
        $this->alimentatieNvt = false;
        $this->kostgeldOntvangenMadi = false;
        $this->kostgeldOntvangenGka = false;
        $this->kostgeldNvt = false;
        $this->huurtoeslagOntvangenMadi = false;
        $this->huurtoeslagOntvangenGka = false;
        $this->huurtoeslagNvt = false;
        $this->zorgtoeslagOntvangenMadi = false;
        $this->zorgtoeslagOntvangenGka = false;
        $this->zorgtoeslagNvt = false;
        $this->kinderopvangtoeslagOntvangenMadi = false;
        $this->kinderopvangtoeslagOntvangenGka = false;
        $this->kinderopvangtoeslagNvt = false;
        $this->kindgebondenBudgetOntvangenMadi = false;
        $this->kindgebondenBudgetOntvangenGka = false;
        $this->kindgebondenBudgetNvt = false;
        $this->huurspecificatieOntvangenMadi = false;
        $this->huurspecificatieOntvangenGka = false;
        $this->huurspecificatieNvt = false;
        $this->polisbladZorgverzekeringOntvangenMadi = false;
        $this->polisbladZorgverzekeringOntvangenGka = false;
        $this->polisbladZorgverzekeringNvt = false;
        $this->alimentatieEchtscheidingsconvenantOntvangenMadi = false;
        $this->alimentatieEchtscheidingsconvenantOntvangenGka = false;
        $this->alimentatieEchtscheidingsconvenantNvt = false;
        $this->overeenkomstKinderopvangOntvangenMadi = false;
        $this->overeenkomstKinderopvangOntvangenGka = false;
        $this->overeenkomstKinderopvangNvt = false;
        $this->kwijtscheldingGemeenteBelastingNvt = false;
        $this->kwijtscheldingGemeenteBelasting = false;
        $this->corrigerenGemeenteBelastingOntvangenGka = false;
        $this->corrigerenGemeenteBelastingNvt = false;
        $this->autoNvt = false;
        $this->autoTaxatieOntvangenMadi = false;
        $this->autoTaxatieOntvangenGka = false;
        $this->autoTaxatieNvt = false;
        $this->autolastenKmWoonwerkverkeerOntvangenMadi = false;
        $this->autolastenKmWoonwerkverkeerOntvangenGka = false;
        $this->autolastenKmWoonwerkverkeerNvt = false;
        $this->verklaringWerkgeverOntvangenMadi = false;
        $this->verklaringWerkgeverOntvangenGka = false;
        $this->verklaringWerkgeverNvt = false;
        $this->vrijwaringsbewijsOntvangenMadi = false;
        $this->vrijwaringsbewijsOntvangenGka = false;
        $this->vrijwaringsbewijsNvt = false;
        $this->schuldenoverzichtOntvangenMadi = false;
        $this->schuldenoverzichtOntvangenGka = false;
        $this->vorderingenOntvangenMadi = false;
        $this->vorderingenOntvangenGka = false;
        $this->inzageToetsingBkrOntvangenMadi = false;
        $this->inzageToetsingBkrOntvangenGka = false;
        $this->stabilisatieovereenkomstOntvangenMadi = false;
        $this->stabilisatieovereenkomstOntvangenGka = false;
        $this->stabilisatieovereenkomstNvt = false;
        $this->cjib = false;
        $this->cjibNvt = false;
        $this->meterstandenEnergieOntvangenMadi = false;
        $this->meterstandenEnergieOntvangenGka = false;
        $this->meterstandenEnergieNvt = false;
        $this->waternetOntvangenMadi = false;
        $this->waternetOntvangenGka = false;
        $this->waternetNvt = false;
        $this->retourbewijsModemOntvangenMadi = false;
        $this->retourbewijsModemOntvangenGka = false;
        $this->retourbewijsModemNvt = false;
        $this->toelichtingAanvraagSchuldsaneringClientOntvangenMadi = false;
        $this->toelichtingAanvraagSchuldsaneringClientOntvangenGka = false;
        $this->toelichtingAanvraagSchuldsaneringMadiOntvangenMadi = false;
        $this->toelichtingAanvraagSchuldsaneringMadiOntvangenGka = false;
        $this->bewindstellingOfBudgetbeheerNvt = false;
        $this->beschikkingOnderBewindstellingOntvangenMadi = false;
        $this->beschikkingOnderBewindstellingOntvangenGka = false;
        $this->beschikkingOnderBewindstellingNvt = false;
        $this->budgetbeheerNvt = false;
        $this->budgetbeheerPlangroep = false;
        $this->budgetbeheerCav = false;
        $this->budgetbeheerFibu = false;
        $this->gereserveerdeGeldenOntvangenMadi = false;
        $this->gereserveerdeGeldenOntvangenGka = false;
        $this->gereserveerdeGeldenNvt = false;
        $this->ondertekendAanvraagFormulierMadi = false;
        $this->ondertekendAanvraagFormulierGka = false;
    }

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Entity\Dossier
     */
    public function getDossier()
    {
        return $this->dossier;
    }

    public function isLegitimatieOntvangenGka()
    {
        return $this->legitimatieOntvangenGka;
    }

    public function isLegitimatieOntvangenMadi()
    {
        return $this->legitimatieOntvangenMadi;
    }

    public function isVtlbMadi()
    {
        return $this->vtlbMadi;
    }

    public function isVtlbGka()
    {
        return $this->vtlbGka;
    }

    public function isInkomstenspecificatieOntvangenMadi()
    {
        return $this->inkomstenspecificatieOntvangenMadi;
    }

    public function isInkomstenspecificatieOntvangenGka()
    {
        return $this->inkomstenspecificatieOntvangenGka;
    }

    public function isArbeidsovereenkomstOntvangenMadi()
    {
        return $this->arbeidsovereenkomstOntvangenMadi;
    }

    public function isArbeidsovereenkomstOntvangenGka()
    {
        return $this->arbeidsovereenkomstOntvangenGka;
    }

    public function isArbeidsovereenkomstNvt()
    {
        return $this->arbeidsovereenkomstNvt;
    }

    public function isBeschikkingUwvNvt()
    {
        return $this->beschikkingUwvNvt;
    }

    public function isBeschikkingUwvWw()
    {
        return $this->beschikkingUwvWw;
    }

    public function isBeschikkingUwvWia()
    {
        return $this->beschikkingUwvWia;
    }

    public function isBeschikkingUwvZw()
    {
        return $this->beschikkingUwvZw;
    }

    public function getBeschikkingUwvOverig()
    {
        return $this->beschikkingUwvOverig;
    }

    public function isVoorlopigeTerugaafBelastingdienstOntvangenMadi()
    {
        return $this->voorlopigeTerugaafBelastingdienstOntvangenMadi;
    }

    public function isVoorlopigeTerugaafBelastingdienstOntvangenGka()
    {
        return $this->voorlopigeTerugaafBelastingdienstOntvangenGka;
    }

    public function isVoorlopigeTerugaafBelastingdienstNvt()
    {
        return $this->voorlopigeTerugaafBelastingdienstNvt;
    }

    public function isAlimentatieOntvangenMadi()
    {
        return $this->alimentatieOntvangenMadi;
    }

    public function isAlimentatieOntvangenGka()
    {
        return $this->alimentatieOntvangenGka;
    }

    public function isAlimentatieNvt()
    {
        return $this->alimentatieNvt;
    }

    public function isKostgeldOntvangenMadi()
    {
        return $this->kostgeldOntvangenMadi;
    }

    public function isKostgeldOntvangenGka()
    {
        return $this->kostgeldOntvangenGka;
    }

    public function isKostgeldNvt()
    {
        return $this->kostgeldNvt;
    }

    public function isHuurtoeslagOntvangenMadi()
    {
        return $this->huurtoeslagOntvangenMadi;
    }

    public function isHuurtoeslagOntvangenGka()
    {
        return $this->huurtoeslagOntvangenGka;
    }

    public function isHuurtoeslagNvt()
    {
        return $this->huurtoeslagNvt;
    }

    public function isZorgtoeslagOntvangenMadi()
    {
        return $this->zorgtoeslagOntvangenMadi;
    }

    public function isZorgtoeslagOntvangenGka()
    {
        return $this->zorgtoeslagOntvangenGka;
    }

    public function isZorgtoeslagNvt()
    {
        return $this->zorgtoeslagNvt;
    }

    public function isKinderopvangtoeslagOntvangenMadi()
    {
        return $this->kinderopvangtoeslagOntvangenMadi;
    }

    public function isKinderopvangtoeslagOntvangenGka()
    {
        return $this->kinderopvangtoeslagOntvangenGka;
    }

    public function isKinderopvangtoeslagNvt()
    {
        return $this->kinderopvangtoeslagNvt;
    }

    public function isKindgebondenBudgetOntvangenMadi()
    {
        return $this->kindgebondenBudgetOntvangenMadi;
    }

    public function isKindgebondenBudgetOntvangenGka()
    {
        return $this->kindgebondenBudgetOntvangenGka;
    }

    public function isKindgebondenBudgetNvt()
    {
        return $this->kindgebondenBudgetNvt;
    }

    public function isHuurspecificatieOntvangenMadi()
    {
        return $this->huurspecificatieOntvangenMadi;
    }

    public function isHuurspecificatieOntvangenGka()
    {
        return $this->huurspecificatieOntvangenGka;
    }

    public function isHuurspecificatieNvt()
    {
        return $this->huurspecificatieNvt;
    }

    public function isPolisbladZorgverzekeringOntvangenMadi()
    {
        return $this->polisbladZorgverzekeringOntvangenMadi;
    }

    public function isPolisbladZorgverzekeringOntvangenGka()
    {
        return $this->polisbladZorgverzekeringOntvangenGka;
    }

    public function isPolisbladZorgverzekeringNvt()
    {
        return $this->polisbladZorgverzekeringNvt;
    }

    public function isAlimentatieEchtscheidingsconvenantOntvangenMadi()
    {
        return $this->alimentatieEchtscheidingsconvenantOntvangenMadi;
    }

    public function isAlimentatieEchtscheidingsconvenantOntvangenGka()
    {
        return $this->alimentatieEchtscheidingsconvenantOntvangenGka;
    }

    public function isAlimentatieEchtscheidingsconvenantNvt()
    {
        return $this->alimentatieEchtscheidingsconvenantNvt;
    }

    public function isOvereenkomstKinderopvangOntvangenMadi()
    {
        return $this->overeenkomstKinderopvangOntvangenMadi;
    }

    public function isOvereenkomstKinderopvangOntvangenGka()
    {
        return $this->overeenkomstKinderopvangOntvangenGka;
    }

    public function isOvereenkomstKinderopvangNvt()
    {
        return $this->overeenkomstKinderopvangNvt;
    }

    public function isKwijtscheldingGemeenteBelastingNvt()
    {
        return $this->kwijtscheldingGemeenteBelastingNvt;
    }

    public function isKwijtscheldingGemeenteBelasting()
    {
        return $this->kwijtscheldingGemeenteBelasting;
    }

    public function isCorrigerenGemeenteBelastingOntvangenGka()
    {
        return $this->corrigerenGemeenteBelastingOntvangenGka;
    }

    public function isCorrigerenGemeenteBelastingNvt()
    {
        return $this->corrigerenGemeenteBelastingNvt;
    }

    public function isAutoNvt()
    {
        return $this->autoNvt;
    }

    public function isAutoTaxatieOntvangenMadi()
    {
        return $this->autoTaxatieOntvangenMadi;
    }

    public function isAutoTaxatieOntvangenGka()
    {
        return $this->autoTaxatieOntvangenGka;
    }

    public function isAutoTaxatieNvt()
    {
        return $this->autoTaxatieNvt;
    }

    public function isAutolastenKmWoonwerkverkeerOntvangenMadi()
    {
        return $this->autolastenKmWoonwerkverkeerOntvangenMadi;
    }

    public function isAutolastenKmWoonwerkverkeerOntvangenGka()
    {
        return $this->autolastenKmWoonwerkverkeerOntvangenGka;
    }

    public function isAutolastenKmWoonwerkverkeerNvt()
    {
        return $this->autolastenKmWoonwerkverkeerNvt;
    }

    public function isVerklaringWerkgeverOntvangenMadi()
    {
        return $this->verklaringWerkgeverOntvangenMadi;
    }

    public function isVerklaringWerkgeverOntvangenGka()
    {
        return $this->verklaringWerkgeverOntvangenGka;
    }

    public function isVerklaringWerkgeverNvt()
    {
        return $this->verklaringWerkgeverNvt;
    }

    public function isVrijwaringsbewijsOntvangenMadi()
    {
        return $this->vrijwaringsbewijsOntvangenMadi;
    }

    public function isVrijwaringsbewijsOntvangenGka()
    {
        return $this->vrijwaringsbewijsOntvangenGka;
    }

    public function isVrijwaringsbewijsNvt()
    {
        return $this->vrijwaringsbewijsNvt;
    }

    public function isSchuldenoverzichtOntvangenMadi()
    {
        return $this->schuldenoverzichtOntvangenMadi;
    }

    public function isSchuldenoverzichtOntvangenGka()
    {
        return $this->schuldenoverzichtOntvangenGka;
    }

    public function isVorderingenOntvangenMadi()
    {
        return $this->vorderingenOntvangenMadi;
    }

    public function isVorderingenOntvangenGka()
    {
        return $this->vorderingenOntvangenGka;
    }

    public function isInzageToetsingBkrOntvangenMadi()
    {
        return $this->inzageToetsingBkrOntvangenMadi;
    }

    public function isInzageToetsingBkrOntvangenGka()
    {
        return $this->inzageToetsingBkrOntvangenGka;
    }

    public function isStabilisatieovereenkomstOntvangenMadi()
    {
        return $this->stabilisatieovereenkomstOntvangenMadi;
    }

    public function isStabilisatieovereenkomstOntvangenGka()
    {
        return $this->stabilisatieovereenkomstOntvangenGka;
    }

    public function isStabilisatieovereenkomstNvt()
    {
        return $this->stabilisatieovereenkomstNvt;
    }

    public function isCjib()
    {
        return $this->cjib;
    }

    public function isCjibNvt()
    {
        return $this->cjibNvt;
    }

    public function isMeterstandenEnergieOntvangenMadi()
    {
        return $this->meterstandenEnergieOntvangenMadi;
    }

    public function isMeterstandenEnergieOntvangenGka()
    {
        return $this->meterstandenEnergieOntvangenGka;
    }

    public function isMeterstandenEnergieNvt()
    {
        return $this->meterstandenEnergieNvt;
    }

    public function isWaternetOntvangenMadi()
    {
        return $this->waternetOntvangenMadi;
    }

    public function isWaternetOntvangenGka()
    {
        return $this->waternetOntvangenGka;
    }

    public function isWaternetNvt()
    {
        return $this->waternetNvt;
    }

    public function isRetourbewijsModemOntvangenMadi()
    {
        return $this->retourbewijsModemOntvangenMadi;
    }

    public function isRetourbewijsModemOntvangenGka()
    {
        return $this->retourbewijsModemOntvangenGka;
    }

    public function isRetourbewijsModemNvt()
    {
        return $this->retourbewijsModemNvt;
    }

    public function isToelichtingAanvraagSchuldsaneringClientOntvangenMadi()
    {
        return $this->toelichtingAanvraagSchuldsaneringClientOntvangenMadi;
    }

    public function isToelichtingAanvraagSchuldsaneringClientOntvangenGka()
    {
        return $this->toelichtingAanvraagSchuldsaneringClientOntvangenGka;
    }

    public function isToelichtingAanvraagSchuldsaneringMadiOntvangenMadi()
    {
        return $this->toelichtingAanvraagSchuldsaneringMadiOntvangenMadi;
    }

    public function isToelichtingAanvraagSchuldsaneringMadiOntvangenGka()
    {
        return $this->toelichtingAanvraagSchuldsaneringMadiOntvangenGka;
    }

    public function isBewindstellingOfBudgetbeheerNvt()
    {
        return $this->bewindstellingOfBudgetbeheerNvt;
    }

    public function isBeschikkingOnderBewindstellingOntvangenMadi()
    {
        return $this->beschikkingOnderBewindstellingOntvangenMadi;
    }

    public function isBeschikkingOnderBewindstellingOntvangenGka()
    {
        return $this->beschikkingOnderBewindstellingOntvangenGka;
    }

    public function isBeschikkingOnderBewindstellingNvt()
    {
        return $this->beschikkingOnderBewindstellingNvt;
    }

    public function isBudgetbeheerNvt()
    {
        return $this->budgetbeheerNvt;
    }

    public function isBudgetbeheerPlangroep()
    {
        return $this->budgetbeheerPlangroep;
    }

    public function isBudgetbeheerCav()
    {
        return $this->budgetbeheerCav;
    }

    public function isBudgetbeheerFibu()
    {
        return $this->budgetbeheerFibu;
    }

    public function getBudgetbeheerOverig()
    {
        return $this->budgetbeheerOverig;
    }

    public function isGereserveerdeGeldenOntvangenMadi()
    {
        return $this->gereserveerdeGeldenOntvangenMadi;
    }

    public function isGereserveerdeGeldenOntvangenGka()
    {
        return $this->gereserveerdeGeldenOntvangenGka;
    }

    public function isGereserveerdeGeldenNvt()
    {
        return $this->gereserveerdeGeldenNvt;
    }

    public function isOndertekendAanvraagFormulierMadi()
    {
        return $this->ondertekendAanvraagFormulierMadi;
    }

    public function isOndertekendAanvraagFormulierGka()
    {
        return $this->ondertekendAanvraagFormulierGka;
    }

    public function getAanvullendeInformatie()
    {
        return $this->aanvullendeInformatie;
    }

    public function getEnergieBedrijf()
    {
        return $this->energieBedrijf;
    }

    public function getEnergieBedrijfKlantnummer()
    {
        return $this->energieBedrijfKlantnummer;
    }

    /**
     * @return \DateTime
     */
    public function getEnergieBedrijfDatumOpname()
    {
        return $this->energieBedrijfDatumOpname;
    }

    public function getEnergieBedrijfT1()
    {
        return $this->energieBedrijfT1;
    }

    public function getEnergieBedrijfT2()
    {
        return $this->energieBedrijfT2;
    }

    public function getEnergieBedrijfGas()
    {
        return $this->energieBedrijfGas;
    }

    public function getWarmteBedrijf()
    {
        return $this->warmteBedrijf;
    }

    public function getWarmteBedrijfKlantnummer()
    {
        return $this->warmteBedrijfKlantnummer;
    }

    /**
     * @return \DateTime
     */
    public function getWarmteBedrijfDatumOpname()
    {
        return $this->warmteBedrijfDatumOpname;
    }

    public function getWarmteBedrijfOpname()
    {
        return $this->warmteBedrijfOpname;
    }

    public function getDrinkwaterKlantnummer()
    {
        return $this->drinkwaterKlantnummer;
    }

    /**
     * @return \DateTime
     */
    public function getDrinkwaterDatumOpname()
    {
        return $this->drinkwaterDatumOpname;
    }

    public function getDrinkwaterOpname()
    {
        return $this->drinkwaterOpname;
    }

    /**
     * @param Dossier $dossier
     */
    public function setDossier(Dossier $dossier = null)
    {
        $oldDossier = $this->dossier;
        $this->dossier = $dossier;
        if ($oldDossier !== null && $oldDossier->getVoorlegger() === $this) {
            $oldDossier->setVoorlegger(null);
        }
        if ($dossier !== null && $dossier->getVoorlegger() !== $this) {
            $dossier->setVoorlegger(null);
        }
    }

    public function setLegitimatieOntvangenGka($legitimatieOntvangenGka)
    {
        $this->legitimatieOntvangenGka = $legitimatieOntvangenGka;
    }

    public function setLegitimatieOntvangenMadi($legitimatieOntvangenMadi)
    {
        $this->legitimatieOntvangenMadi = $legitimatieOntvangenMadi;
    }

    public function setVtlbMadi($vtlbMadi)
    {
        $this->vtlbMadi = $vtlbMadi;
    }

    public function setVtlbGka($vtlbGka)
    {
        $this->vtlbGka = $vtlbGka;
    }

    public function setInkomstenspecificatieOntvangenMadi($inkomstenspecificatieOntvangenMadi)
    {
        $this->inkomstenspecificatieOntvangenMadi = $inkomstenspecificatieOntvangenMadi;
    }

    public function setInkomstenspecificatieOntvangenGka($inkomstenspecificatieOntvangenGka)
    {
        $this->inkomstenspecificatieOntvangenGka = $inkomstenspecificatieOntvangenGka;
    }

    public function setArbeidsovereenkomstOntvangenMadi($arbeidsovereenkomstOntvangenMadi)
    {
        $this->arbeidsovereenkomstOntvangenMadi = $arbeidsovereenkomstOntvangenMadi;
    }

    public function setArbeidsovereenkomstOntvangenGka($arbeidsovereenkomstOntvangenGka)
    {
        $this->arbeidsovereenkomstOntvangenGka = $arbeidsovereenkomstOntvangenGka;
    }

    public function setArbeidsovereenkomstNvt($arbeidsovereenkomstNvt)
    {
        $this->arbeidsovereenkomstNvt = $arbeidsovereenkomstNvt;
    }

    public function setBeschikkingUwvNvt($beschikkingUwvNvt)
    {
        $this->beschikkingUwvNvt = $beschikkingUwvNvt;
    }

    public function setBeschikkingUwvWw($beschikkingUwvWw)
    {
        $this->beschikkingUwvWw = $beschikkingUwvWw;
    }

    public function setBeschikkingUwvWia($beschikkingUwvWia)
    {
        $this->beschikkingUwvWia = $beschikkingUwvWia;
    }

    public function setBeschikkingUwvZw($beschikkingUwvZw)
    {
        $this->beschikkingUwvZw = $beschikkingUwvZw;
    }

    public function setBeschikkingUwvOverig($beschikkingUwvOverig)
    {
        $this->beschikkingUwvOverig = $beschikkingUwvOverig;
    }

    public function setVoorlopigeTerugaafBelastingdienstOntvangenMadi($voorlopigeTerugaafBelastingdienstOntvangenMadi)
    {
        $this->voorlopigeTerugaafBelastingdienstOntvangenMadi = $voorlopigeTerugaafBelastingdienstOntvangenMadi;
    }

    public function setVoorlopigeTerugaafBelastingdienstOntvangenGka($voorlopigeTerugaafBelastingdienstOntvangenGka)
    {
        $this->voorlopigeTerugaafBelastingdienstOntvangenGka = $voorlopigeTerugaafBelastingdienstOntvangenGka;
    }

    public function setVoorlopigeTerugaafBelastingdienstNvt($voorlopigeTerugaafBelastingdienstNvt)
    {
        $this->voorlopigeTerugaafBelastingdienstNvt = $voorlopigeTerugaafBelastingdienstNvt;
    }

    public function setAlimentatieOntvangenMadi($alimentatieOntvangenMadi)
    {
        $this->alimentatieOntvangenMadi = $alimentatieOntvangenMadi;
    }

    public function setAlimentatieOntvangenGka($alimentatieOntvangenGka)
    {
        $this->alimentatieOntvangenGka = $alimentatieOntvangenGka;
    }

    public function setAlimentatieNvt($alimentatieNvt)
    {
        $this->alimentatieNvt = $alimentatieNvt;
    }

    public function setKostgeldOntvangenMadi($kostgeldOntvangenMadi)
    {
        $this->kostgeldOntvangenMadi = $kostgeldOntvangenMadi;
    }

    public function setKostgeldOntvangenGka($kostgeldOntvangenGka)
    {
        $this->kostgeldOntvangenGka = $kostgeldOntvangenGka;
    }

    public function setKostgeldNvt($kostgeldNvt)
    {
        $this->kostgeldNvt = $kostgeldNvt;
    }

    public function setHuurtoeslagOntvangenMadi($huurtoeslagOntvangenMadi)
    {
        $this->huurtoeslagOntvangenMadi = $huurtoeslagOntvangenMadi;
    }

    public function setHuurtoeslagOntvangenGka($huurtoeslagOntvangenGka)
    {
        $this->huurtoeslagOntvangenGka = $huurtoeslagOntvangenGka;
    }

    public function setHuurtoeslagNvt($huurtoeslagNvt)
    {
        $this->huurtoeslagNvt = $huurtoeslagNvt;
    }

    public function setZorgtoeslagOntvangenMadi($zorgtoeslagOntvangenMadi)
    {
        $this->zorgtoeslagOntvangenMadi = $zorgtoeslagOntvangenMadi;
    }

    public function setZorgtoeslagOntvangenGka($zorgtoeslagOntvangenGka)
    {
        $this->zorgtoeslagOntvangenGka = $zorgtoeslagOntvangenGka;
    }

    public function setZorgtoeslagNvt($zorgtoeslagNvt)
    {
        $this->zorgtoeslagNvt = $zorgtoeslagNvt;
    }

    public function setKinderopvangtoeslagOntvangenMadi($kinderopvangtoeslagOntvangenMadi)
    {
        $this->kinderopvangtoeslagOntvangenMadi = $kinderopvangtoeslagOntvangenMadi;
    }

    public function setKinderopvangtoeslagOntvangenGka($kinderopvangtoeslagOntvangenGka)
    {
        $this->kinderopvangtoeslagOntvangenGka = $kinderopvangtoeslagOntvangenGka;
    }

    public function setKinderopvangtoeslagNvt($kinderopvangtoeslagNvt)
    {
        $this->kinderopvangtoeslagNvt = $kinderopvangtoeslagNvt;
    }

    public function setKindgebondenBudgetOntvangenMadi($kindgebondenBudgetOntvangenMadi)
    {
        $this->kindgebondenBudgetOntvangenMadi = $kindgebondenBudgetOntvangenMadi;
    }

    public function setKindgebondenBudgetOntvangenGka($kindgebondenBudgetOntvangenGka)
    {
        $this->kindgebondenBudgetOntvangenGka = $kindgebondenBudgetOntvangenGka;
    }

    public function setKindgebondenBudgetNvt($kindgebondenBudgetNvt)
    {
        $this->kindgebondenBudgetNvt = $kindgebondenBudgetNvt;
    }

    public function setHuurspecificatieOntvangenMadi($huurspecificatieOntvangenMadi)
    {
        $this->huurspecificatieOntvangenMadi = $huurspecificatieOntvangenMadi;
    }

    public function setHuurspecificatieOntvangenGka($huurspecificatieOntvangenGka)
    {
        $this->huurspecificatieOntvangenGka = $huurspecificatieOntvangenGka;
    }

    public function setHuurspecificatieNvt($huurspecificatieNvt)
    {
        $this->huurspecificatieNvt = $huurspecificatieNvt;
    }

    public function setPolisbladZorgverzekeringOntvangenMadi($polisbladZorgverzekeringOntvangenMadi)
    {
        $this->polisbladZorgverzekeringOntvangenMadi = $polisbladZorgverzekeringOntvangenMadi;
    }

    public function setPolisbladZorgverzekeringOntvangenGka($polisbladZorgverzekeringOntvangenGka)
    {
        $this->polisbladZorgverzekeringOntvangenGka = $polisbladZorgverzekeringOntvangenGka;
    }

    public function setPolisbladZorgverzekeringNvt($polisbladZorgverzekeringNvt)
    {
        $this->polisbladZorgverzekeringNvt = $polisbladZorgverzekeringNvt;
    }

    public function setAlimentatieEchtscheidingsconvenantOntvangenMadi($alimentatieEchtscheidingsconvenantOntvangenMadi)
    {
        $this->alimentatieEchtscheidingsconvenantOntvangenMadi = $alimentatieEchtscheidingsconvenantOntvangenMadi;
    }

    public function setAlimentatieEchtscheidingsconvenantOntvangenGka($alimentatieEchtscheidingsconvenantOntvangenGka)
    {
        $this->alimentatieEchtscheidingsconvenantOntvangenGka = $alimentatieEchtscheidingsconvenantOntvangenGka;
    }

    public function setAlimentatieEchtscheidingsconvenantNvt($alimentatieEchtscheidingsconvenantNvt)
    {
        $this->alimentatieEchtscheidingsconvenantNvt = $alimentatieEchtscheidingsconvenantNvt;
    }

    public function setOvereenkomstKinderopvangOntvangenMadi($overeenkomstKinderopvangOntvangenMadi)
    {
        $this->overeenkomstKinderopvangOntvangenMadi = $overeenkomstKinderopvangOntvangenMadi;
    }

    public function setOvereenkomstKinderopvangOntvangenGka($overeenkomstKinderopvangOntvangenGka)
    {
        $this->overeenkomstKinderopvangOntvangenGka = $overeenkomstKinderopvangOntvangenGka;
    }

    public function setOvereenkomstKinderopvangNvt($overeenkomstKinderopvangNvt)
    {
        $this->overeenkomstKinderopvangNvt = $overeenkomstKinderopvangNvt;
    }

    public function setKwijtscheldingGemeenteBelastingNvt($kwijtscheldingGemeenteBelastingNvt)
    {
        $this->kwijtscheldingGemeenteBelastingNvt = $kwijtscheldingGemeenteBelastingNvt;
    }

    public function setKwijtscheldingGemeenteBelasting($kwijtscheldingGemeenteBelasting)
    {
        $this->kwijtscheldingGemeenteBelasting = $kwijtscheldingGemeenteBelasting;
    }

    public function setCorrigerenGemeenteBelastingOntvangenGka($corrigerenGemeenteBelastingOntvangenGka)
    {
        $this->corrigerenGemeenteBelastingOntvangenGka = $corrigerenGemeenteBelastingOntvangenGka;
    }

    public function setCorrigerenGemeenteBelastingNvt($corrigerenGemeenteBelastingNvt)
    {
        $this->corrigerenGemeenteBelastingNvt = $corrigerenGemeenteBelastingNvt;
    }

    public function setAutoNvt($autoNvt)
    {
        $this->autoNvt = $autoNvt;
    }

    public function setAutoTaxatieOntvangenMadi($autoTaxatieOntvangenMadi)
    {
        $this->autoTaxatieOntvangenMadi = $autoTaxatieOntvangenMadi;
    }

    public function setAutoTaxatieOntvangenGka($autoTaxatieOntvangenGka)
    {
        $this->autoTaxatieOntvangenGka = $autoTaxatieOntvangenGka;
    }

    public function setAutoTaxatieNvt($autoTaxatieNvt)
    {
        $this->autoTaxatieNvt = $autoTaxatieNvt;
    }

    public function setAutolastenKmWoonwerkverkeerOntvangenMadi($autolastenKmWoonwerkverkeerOntvangenMadi)
    {
        $this->autolastenKmWoonwerkverkeerOntvangenMadi = $autolastenKmWoonwerkverkeerOntvangenMadi;
    }

    public function setAutolastenKmWoonwerkverkeerOntvangenGka($autolastenKmWoonwerkverkeerOntvangenGka)
    {
        $this->autolastenKmWoonwerkverkeerOntvangenGka = $autolastenKmWoonwerkverkeerOntvangenGka;
    }

    public function setAutolastenKmWoonwerkverkeerNvt($autolastenKmWoonwerkverkeerNvt)
    {
        $this->autolastenKmWoonwerkverkeerNvt = $autolastenKmWoonwerkverkeerNvt;
    }

    public function setVerklaringWerkgeverOntvangenMadi($verklaringWerkgeverOntvangenMadi)
    {
        $this->verklaringWerkgeverOntvangenMadi = $verklaringWerkgeverOntvangenMadi;
    }

    public function setVerklaringWerkgeverOntvangenGka($verklaringWerkgeverOntvangenGka)
    {
        $this->verklaringWerkgeverOntvangenGka = $verklaringWerkgeverOntvangenGka;
    }

    public function setVerklaringWerkgeverNvt($verklaringWerkgeverNvt)
    {
        $this->verklaringWerkgeverNvt = $verklaringWerkgeverNvt;
    }

    public function setVrijwaringsbewijsOntvangenMadi($vrijwaringsbewijsOntvangenMadi)
    {
        $this->vrijwaringsbewijsOntvangenMadi = $vrijwaringsbewijsOntvangenMadi;
    }

    public function setVrijwaringsbewijsOntvangenGka($vrijwaringsbewijsOntvangenGka)
    {
        $this->vrijwaringsbewijsOntvangenGka = $vrijwaringsbewijsOntvangenGka;
    }

    public function setVrijwaringsbewijsNvt($vrijwaringsbewijsNvt)
    {
        $this->vrijwaringsbewijsNvt = $vrijwaringsbewijsNvt;
    }

    public function setSchuldenoverzichtOntvangenMadi($schuldenoverzichtOntvangenMadi)
    {
        $this->schuldenoverzichtOntvangenMadi = $schuldenoverzichtOntvangenMadi;
    }

    public function setSchuldenoverzichtOntvangenGka($schuldenoverzichtOntvangenGka)
    {
        $this->schuldenoverzichtOntvangenGka = $schuldenoverzichtOntvangenGka;
    }

    public function setVorderingenOntvangenMadi($vorderingenOntvangenMadi)
    {
        $this->vorderingenOntvangenMadi = $vorderingenOntvangenMadi;
    }

    public function setVorderingenOntvangenGka($vorderingenOntvangenGka)
    {
        $this->vorderingenOntvangenGka = $vorderingenOntvangenGka;
    }

    public function setInzageToetsingBkrOntvangenMadi($inzageToetsingBkrOntvangenMadi)
    {
        $this->inzageToetsingBkrOntvangenMadi = $inzageToetsingBkrOntvangenMadi;
    }

    public function setInzageToetsingBkrOntvangenGka($inzageToetsingBkrOntvangenGka)
    {
        $this->inzageToetsingBkrOntvangenGka = $inzageToetsingBkrOntvangenGka;
    }

    public function setStabilisatieovereenkomstOntvangenMadi($stabilisatieovereenkomstOntvangenMadi)
    {
        $this->stabilisatieovereenkomstOntvangenMadi = $stabilisatieovereenkomstOntvangenMadi;
    }

    public function setStabilisatieovereenkomstOntvangenGka($stabilisatieovereenkomstOntvangenGka)
    {
        $this->stabilisatieovereenkomstOntvangenGka = $stabilisatieovereenkomstOntvangenGka;
    }

    public function setStabilisatieovereenkomstNvt($stabilisatieovereenkomstNvt)
    {
        $this->stabilisatieovereenkomstNvt = $stabilisatieovereenkomstNvt;
    }

    public function setCjib($cjib)
    {
        $this->cjib = $cjib;
    }

    public function setCjibNvt($cjibNvt)
    {
        $this->cjibNvt = $cjibNvt;
    }

    public function setMeterstandenEnergieOntvangenMadi($meterstandenEnergieOntvangenMadi)
    {
        $this->meterstandenEnergieOntvangenMadi = $meterstandenEnergieOntvangenMadi;
    }

    public function setMeterstandenEnergieOntvangenGka($meterstandenEnergieOntvangenGka)
    {
        $this->meterstandenEnergieOntvangenGka = $meterstandenEnergieOntvangenGka;
    }

    public function setMeterstandenEnergieNvt($meterstandenEnergieNvt)
    {
        $this->meterstandenEnergieNvt = $meterstandenEnergieNvt;
    }

    public function setWaternetOntvangenMadi($waternetOntvangenMadi)
    {
        $this->waternetOntvangenMadi = $waternetOntvangenMadi;
    }

    public function setWaternetOntvangenGka($waternetOntvangenGka)
    {
        $this->waternetOntvangenGka = $waternetOntvangenGka;
    }

    public function setWaternetNvt($waternetNvt)
    {
        $this->waternetNvt = $waternetNvt;
    }

    public function setRetourbewijsModemOntvangenMadi($retourbewijsModemOntvangenMadi)
    {
        $this->retourbewijsModemOntvangenMadi = $retourbewijsModemOntvangenMadi;
    }

    public function setRetourbewijsModemOntvangenGka($retourbewijsModemOntvangenGka)
    {
        $this->retourbewijsModemOntvangenGka = $retourbewijsModemOntvangenGka;
    }

    public function setRetourbewijsModemNvt($retourbewijsModemNvt)
    {
        $this->retourbewijsModemNvt = $retourbewijsModemNvt;
    }

    public function setToelichtingAanvraagSchuldsaneringClientOntvangenMadi($toelichtingAanvraagSchuldsaneringClientOntvangenMadi)
    {
        $this->toelichtingAanvraagSchuldsaneringClientOntvangenMadi = $toelichtingAanvraagSchuldsaneringClientOntvangenMadi;
    }

    public function setToelichtingAanvraagSchuldsaneringClientOntvangenGka($toelichtingAanvraagSchuldsaneringClientOntvangenGka)
    {
        $this->toelichtingAanvraagSchuldsaneringClientOntvangenGka = $toelichtingAanvraagSchuldsaneringClientOntvangenGka;
    }

    public function setToelichtingAanvraagSchuldsaneringMadiOntvangenMadi($toelichtingAanvraagSchuldsaneringMadiOntvangenMadi)
    {
        $this->toelichtingAanvraagSchuldsaneringMadiOntvangenMadi = $toelichtingAanvraagSchuldsaneringMadiOntvangenMadi;
    }

    public function setToelichtingAanvraagSchuldsaneringMadiOntvangenGka($toelichtingAanvraagSchuldsaneringMadiOntvangenGka)
    {
        $this->toelichtingAanvraagSchuldsaneringMadiOntvangenGka = $toelichtingAanvraagSchuldsaneringMadiOntvangenGka;
    }

    public function setBewindstellingOfBudgetbeheerNvt($bewindstellingOfBudgetbeheerNvt)
    {
        $this->bewindstellingOfBudgetbeheerNvt = $bewindstellingOfBudgetbeheerNvt;
    }

    public function setBeschikkingOnderBewindstellingOntvangenMadi($beschikkingOnderBewindstellingOntvangenMadi)
    {
        $this->beschikkingOnderBewindstellingOntvangenMadi = $beschikkingOnderBewindstellingOntvangenMadi;
    }

    public function setBeschikkingOnderBewindstellingOntvangenGka($beschikkingOnderBewindstellingOntvangenGka)
    {
        $this->beschikkingOnderBewindstellingOntvangenGka = $beschikkingOnderBewindstellingOntvangenGka;
    }

    public function setBeschikkingOnderBewindstellingNvt($beschikkingOnderBewindstellingNvt)
    {
        $this->beschikkingOnderBewindstellingNvt = $beschikkingOnderBewindstellingNvt;
    }

    public function setBudgetbeheerNvt($budgetbeheerNvt)
    {
        $this->budgetbeheerNvt = $budgetbeheerNvt;
    }

    public function setBudgetbeheerPlangroep($budgetbeheerPlangroep)
    {
        $this->budgetbeheerPlangroep = $budgetbeheerPlangroep;
    }

    public function setBudgetbeheerCav($budgetbeheerCav)
    {
        $this->budgetbeheerCav = $budgetbeheerCav;
    }

    public function setBudgetbeheerFibu($budgetbeheerFibu)
    {
        $this->budgetbeheerFibu = $budgetbeheerFibu;
    }

    public function setBudgetbeheerOverig($budgetbeheerOverig)
    {
        $this->budgetbeheerOverig = $budgetbeheerOverig;
    }

    public function setGereserveerdeGeldenOntvangenMadi($gereserveerdeGeldenOntvangenMadi)
    {
        $this->gereserveerdeGeldenOntvangenMadi = $gereserveerdeGeldenOntvangenMadi;
    }

    public function setGereserveerdeGeldenOntvangenGka($gereserveerdeGeldenOntvangenGka)
    {
        $this->gereserveerdeGeldenOntvangenGka = $gereserveerdeGeldenOntvangenGka;
    }

    public function setGereserveerdeGeldenNvt($gereserveerdeGeldenNvt)
    {
        $this->gereserveerdeGeldenNvt = $gereserveerdeGeldenNvt;
    }

    public function setOndertekendAanvraagFormulierMadi($ondertekendAanvraagFormulierMadi)
    {
        $this->ondertekendAanvraagFormulierMadi = $ondertekendAanvraagFormulierMadi;
    }

    public function setOndertekendAanvraagFormulierGka($ondertekendAanvraagFormulierGka)
    {
        $this->ondertekendAanvraagFormulierGka = $ondertekendAanvraagFormulierGka;
    }

    public function setAanvullendeInformatie($aanvullendeInformatie)
    {
        $this->aanvullendeInformatie = $aanvullendeInformatie;
    }

    public function setEnergieBedrijf($energieBedrijf)
    {
        $this->energieBedrijf = $energieBedrijf;
    }

    public function setEnergieBedrijfKlantnummer($energieBedrijfKlantnummer)
    {
        $this->energieBedrijfKlantnummer = $energieBedrijfKlantnummer;
    }

    /**
     * @param \DateTime $energieBedrijfDatumOpname
     */
    public function setEnergieBedrijfDatumOpname(\DateTime $energieBedrijfDatumOpname = null)
    {
        $this->energieBedrijfDatumOpname = $energieBedrijfDatumOpname;
    }

    public function setEnergieBedrijfT1($energieBedrijfT1)
    {
        $this->energieBedrijfT1 = $energieBedrijfT1;
    }

    public function setEnergieBedrijfT2($energieBedrijfT2)
    {
        $this->energieBedrijfT2 = $energieBedrijfT2;
    }

    public function setEnergieBedrijfGas($energieBedrijfGas)
    {
        $this->energieBedrijfGas = $energieBedrijfGas;
    }

    public function setWarmteBedrijf($warmteBedrijf)
    {
        $this->warmteBedrijf = $warmteBedrijf;
    }

    public function setWarmteBedrijfKlantnummer($warmteBedrijfKlantnummer)
    {
        $this->warmteBedrijfKlantnummer = $warmteBedrijfKlantnummer;
    }

    /**
     * @param \DateTime $warmteBedrijfDatumOpname
     */
    public function setWarmteBedrijfDatumOpname(\DateTime $warmteBedrijfDatumOpname = null)
    {
        $this->warmteBedrijfDatumOpname = $warmteBedrijfDatumOpname;
    }

    public function setWarmteBedrijfOpname($warmteBedrijfOpname)
    {
        $this->warmteBedrijfOpname = $warmteBedrijfOpname;
    }

    public function setDrinkwaterKlantnummer($drinkwaterKlantnummer)
    {
        $this->drinkwaterKlantnummer = $drinkwaterKlantnummer;
    }

    /**
     * @param \DateTime $drinkwaterDatumOpname
     */
    public function setDrinkwaterDatumOpname(\DateTime $drinkwaterDatumOpname = null)
    {
        $this->drinkwaterDatumOpname = $drinkwaterDatumOpname;
    }

    public function setDrinkwaterOpname($drinkwaterOpname)
    {
        $this->drinkwaterOpname = $drinkwaterOpname;
    }

}

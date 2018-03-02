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
    private $beschikkingUwvOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingUwvOntvangenGka;

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
    private $kwijtscheldingGemeenteBelastingOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kwijtscheldingGemeenteBelastingOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kwijtscheldingGemeenteBelastingNvt;

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
    private $kentekenOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kentekenOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kentekenNvt;

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
    private $cjibOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $cjibOntvangenGka;

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
    private $klantnummerZiggoOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $klantnummerZiggoOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $klantnummerZiggoNvt;

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
    private $toelichtingAanvraagSchuldsaneringOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringOntvangenGka;

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
    private $budgetbeheerOntvangenMadi;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $budgetbeheerOntvangenGka;

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
    private $budgetbeheerFibi;

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
        $this->beschikkingUwvOntvangenMadi = false;
        $this->beschikkingUwvOntvangenGka = false;
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
        $this->kwijtscheldingGemeenteBelastingOntvangenMadi = false;
        $this->kwijtscheldingGemeenteBelastingOntvangenGka = false;
        $this->kwijtscheldingGemeenteBelastingNvt = false;
        $this->corrigerenGemeenteBelastingOntvangenGka = false;
        $this->corrigerenGemeenteBelastingNvt = false;
        $this->autolastenKmWoonwerkverkeerOntvangenMadi = false;
        $this->autolastenKmWoonwerkverkeerOntvangenGka = false;
        $this->autolastenKmWoonwerkverkeerNvt = false;
        $this->kentekenOntvangenMadi = false;
        $this->kentekenOntvangenGka = false;
        $this->kentekenNvt = false;
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
        $this->cjibOntvangenMadi = false;
        $this->cjibOntvangenGka = false;
        $this->cjibNvt = false;
        $this->meterstandenEnergieOntvangenMadi = false;
        $this->meterstandenEnergieOntvangenGka = false;
        $this->meterstandenEnergieNvt = false;
        $this->waternetOntvangenMadi = false;
        $this->waternetOntvangenGka = false;
        $this->waternetNvt = false;
        $this->klantnummerZiggoOntvangenMadi = false;
        $this->klantnummerZiggoOntvangenGka = false;
        $this->klantnummerZiggoNvt = false;
        $this->retourbewijsModemOntvangenMadi = false;
        $this->retourbewijsModemOntvangenGka = false;
        $this->retourbewijsModemNvt = false;
        $this->toelichtingAanvraagSchuldsaneringOntvangenMadi = false;
        $this->toelichtingAanvraagSchuldsaneringOntvangenGka = false;
        $this->bewindstellingOfBudgetbeheerNvt = false;
        $this->beschikkingOnderBewindstellingOntvangenMadi = false;
        $this->beschikkingOnderBewindstellingOntvangenGka = false;
        $this->beschikkingOnderBewindstellingNvt = false;
        $this->budgetbeheerOntvangenMadi = false;
        $this->budgetbeheerOntvangenGka = false;
        $this->budgetbeheerNvt = false;
        $this->budgetbeheerPlangroep = false;
        $this->budgetbeheerCav = false;
        $this->budgetbeheerFibi = false;
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

    public function isBeschikkingUwvOntvangenMadi()
    {
        return $this->beschikkingUwvOntvangenMadi;
    }

    public function isBeschikkingUwvOntvangenGka()
    {
        return $this->beschikkingUwvOntvangenGka;
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

    public function isKwijtscheldingGemeenteBelastingOntvangenMadi()
    {
        return $this->kwijtscheldingGemeenteBelastingOntvangenMadi;
    }

    public function isKwijtscheldingGemeenteBelastingOntvangenGka()
    {
        return $this->kwijtscheldingGemeenteBelastingOntvangenGka;
    }

    public function isKwijtscheldingGemeenteBelastingNvt()
    {
        return $this->kwijtscheldingGemeenteBelastingNvt;
    }

    public function isCorrigerenGemeenteBelastingOntvangenGka()
    {
        return $this->corrigerenGemeenteBelastingOntvangenGka;
    }

    public function isCorrigerenGemeenteBelastingNvt()
    {
        return $this->corrigerenGemeenteBelastingNvt;
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

    public function isKentekenOntvangenMadi()
    {
        return $this->kentekenOntvangenMadi;
    }

    public function isKentekenOntvangenGka()
    {
        return $this->kentekenOntvangenGka;
    }

    public function isKentekenNvt()
    {
        return $this->kentekenNvt;
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

    public function isCjibOntvangenMadi()
    {
        return $this->cjibOntvangenMadi;
    }

    public function isCjibOntvangenGka()
    {
        return $this->cjibOntvangenGka;
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

    public function isKlantnummerZiggoOntvangenMadi()
    {
        return $this->klantnummerZiggoOntvangenMadi;
    }

    public function isKlantnummerZiggoOntvangenGka()
    {
        return $this->klantnummerZiggoOntvangenGka;
    }

    public function isKlantnummerZiggoNvt()
    {
        return $this->klantnummerZiggoNvt;
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

    public function isToelichtingAanvraagSchuldsaneringOntvangenMadi()
    {
        return $this->toelichtingAanvraagSchuldsaneringOntvangenMadi;
    }

    public function isToelichtingAanvraagSchuldsaneringOntvangenGka()
    {
        return $this->toelichtingAanvraagSchuldsaneringOntvangenGka;
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

    public function isBudgetbeheerOntvangenMadi()
    {
        return $this->budgetbeheerOntvangenMadi;
    }

    public function isBudgetbeheerOntvangenGka()
    {
        return $this->budgetbeheerOntvangenGka;
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

    public function isBudgetbeheerFibi()
    {
        return $this->budgetbeheerFibi;
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

    /**
     * @param Dossier $dossier
     */
    public function setDossier(Dossier $dossier = null)
    {
        $oldDossier = $this->dossier;
        $this->dossier = $dossier;
        if ($oldDossier->getVoorlegger() === $this) {
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

    public function setBeschikkingUwvOntvangenMadi($beschikkingUwvOntvangenMadi)
    {
        $this->beschikkingUwvOntvangenMadi = $beschikkingUwvOntvangenMadi;
    }

    public function setBeschikkingUwvOntvangenGka($beschikkingUwvOntvangenGka)
    {
        $this->beschikkingUwvOntvangenGka = $beschikkingUwvOntvangenGka;
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

    public function setKwijtscheldingGemeenteBelastingOntvangenMadi($kwijtscheldingGemeenteBelastingOntvangenMadi)
    {
        $this->kwijtscheldingGemeenteBelastingOntvangenMadi = $kwijtscheldingGemeenteBelastingOntvangenMadi;
    }

    public function setKwijtscheldingGemeenteBelastingOntvangenGka($kwijtscheldingGemeenteBelastingOntvangenGka)
    {
        $this->kwijtscheldingGemeenteBelastingOntvangenGka = $kwijtscheldingGemeenteBelastingOntvangenGka;
    }

    public function setKwijtscheldingGemeenteBelastingNvt($kwijtscheldingGemeenteBelastingNvt)
    {
        $this->kwijtscheldingGemeenteBelastingNvt = $kwijtscheldingGemeenteBelastingNvt;
    }

    public function setCorrigerenGemeenteBelastingOntvangenGka($corrigerenGemeenteBelastingOntvangenGka)
    {
        $this->corrigerenGemeenteBelastingOntvangenGka = $corrigerenGemeenteBelastingOntvangenGka;
    }

    public function setCorrigerenGemeenteBelastingNvt($corrigerenGemeenteBelastingNvt)
    {
        $this->corrigerenGemeenteBelastingNvt = $corrigerenGemeenteBelastingNvt;
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

    public function setKentekenOntvangenMadi($kentekenOntvangenMadi)
    {
        $this->kentekenOntvangenMadi = $kentekenOntvangenMadi;
    }

    public function setKentekenOntvangenGka($kentekenOntvangenGka)
    {
        $this->kentekenOntvangenGka = $kentekenOntvangenGka;
    }

    public function setKentekenNvt($kentekenNvt)
    {
        $this->kentekenNvt = $kentekenNvt;
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

    public function setCjibOntvangenMadi($cjibOntvangenMadi)
    {
        $this->cjibOntvangenMadi = $cjibOntvangenMadi;
    }

    public function setCjibOntvangenGka($cjibOntvangenGka)
    {
        $this->cjibOntvangenGka = $cjibOntvangenGka;
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

    public function setKlantnummerZiggoOntvangenMadi($klantnummerZiggoOntvangenMadi)
    {
        $this->klantnummerZiggoOntvangenMadi = $klantnummerZiggoOntvangenMadi;
    }

    public function setKlantnummerZiggoOntvangenGka($klantnummerZiggoOntvangenGka)
    {
        $this->klantnummerZiggoOntvangenGka = $klantnummerZiggoOntvangenGka;
    }

    public function setKlantnummerZiggoNvt($klantnummerZiggoNvt)
    {
        $this->klantnummerZiggoNvt = $klantnummerZiggoNvt;
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

    public function setToelichtingAanvraagSchuldsaneringOntvangenMadi($toelichtingAanvraagSchuldsaneringOntvangenMadi)
    {
        $this->toelichtingAanvraagSchuldsaneringOntvangenMadi = $toelichtingAanvraagSchuldsaneringOntvangenMadi;
    }

    public function setToelichtingAanvraagSchuldsaneringOntvangenGka($toelichtingAanvraagSchuldsaneringOntvangenGka)
    {
        $this->toelichtingAanvraagSchuldsaneringOntvangenGka = $toelichtingAanvraagSchuldsaneringOntvangenGka;
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

    public function setBudgetbeheerOntvangenMadi($budgetbeheerOntvangenMadi)
    {
        $this->budgetbeheerOntvangenMadi = $budgetbeheerOntvangenMadi;
    }

    public function setBudgetbeheerOntvangenGka($budgetbeheerOntvangenGka)
    {
        $this->budgetbeheerOntvangenGka = $budgetbeheerOntvangenGka;
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

    public function setBudgetbeheerFibi($budgetbeheerFibi)
    {
        $this->budgetbeheerFibi = $budgetbeheerFibi;
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

}

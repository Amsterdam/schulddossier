<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Entity;

use Doctrine\ORM\Mapping as ORM;
use GemeenteAmsterdam\FixxxSchuldhulp\Traits\ExportAble;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table
 */
class Voorlegger
{
    use ExportAble;

    const STATUS_MADI_OPEN = 0;
    const STATUS_MADI_BEZIG = 1;
    const STATUS_MADI_OPGEVOERD = 2;
    const STATUS_MADI_GECONTROLEERD = 3;

    const STATUS_GKA_OPEN = 0;
    const STATUS_GKA_OPGEVOERD = 2;
    const STATUS_GKA_GECONTROLEERD = 3;

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
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $legitimatieOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $legitimatieOntvangenGka;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $vtlbOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $vtlbOntvangenGka;

    /**
     * @var float
     * @ORM\Column(type="decimal", precision=8, scale=2, nullable=true)
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
     */
    private $vtlbBedrag;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $inkomstenspecificatieOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $inkomstenspecificatieOntvangenGka;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $arbeidsovereenkomstOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $arbeidsovereenkomstOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $arbeidsovereenkomstNvt;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $arbeidsovereenkomstWerkgever = null;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $arbeidsovereenkomstEinddatum;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @Assert\Choice(callback="getContractOpties")
     */
    private $arbeidsovereenkomstContract;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $arbeidsovereenkomstPartnerWerkgever = null;

    /**
     * @var \DateTime|null
     * @ORM\Column(type="date", nullable=true)
     * @Assert\Date
     */
    private $arbeidsovereenkomstPartnerEinddatum;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     * @Assert\Choice(callback="getContractOpties")
     */
    private $arbeidsovereenkomstPartnerContract;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $beschikkingUwvOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
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
    private $beschikkingInkomenUitWerk;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingUwvZw;

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
    private $beschikkingUwvWajong;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingGemeenteAmsterdamWPI;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingSVBAOW;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingSVBANW;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingGemeenteAmsterdamIOAW;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(min=0, max=255)
     */
    private $beschikkingUwvOverig;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $voorlopigeTeruggaafBelastingdienstOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $voorlopigeTeruggaafBelastingdienstOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $voorlopigeTeruggaafBelastingdienstNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $alimentatieOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $alimentatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $kostgeldOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $kostgeldOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $kostgeldNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $toeslagenOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $toeslagenOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toeslagenNvt;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toeslagenHuur;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toeslagenZorg;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toeslagenKinderopvang;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $toeslagenKindgebondenBudget;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $huurspecificatieOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $huurspecificatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $huurspecificatieNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $polisbladZorgverzekeringOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $polisbladZorgverzekeringOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $polisbladZorgverzekeringNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $alimentatieEchtscheidingsconvenantOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $alimentatieEchtscheidingsconvenantOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $alimentatieEchtscheidingsconvenantNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $overeenkomstKinderopvangOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $overeenkomstKinderopvangOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $overeenkomstKinderopvangNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $kwijtscheldingGemeenteBelastingOntvangenMadi;

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

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $corrigerenGemeenteBelastingOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $corrigerenGemeenteBelasting;

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
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $autoTaxatieOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $autoTaxatieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autoTaxatieNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $autolastenKmWoonwerkverkeerOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $autolastenKmWoonwerkverkeerOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $autolastenKmWoonwerkverkeerNvt;

    /**
     * @var integer
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Type("numeric")
     */
    private $autolastenKmWoonwerkverkeer;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $verklaringWerkgeverOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $verklaringWerkgeverOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $verklaringWerkgeverNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $vrijwaringsbewijsOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $vrijwaringsbewijsOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $vrijwaringsbewijsNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $schuldenoverzichtOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $schuldenoverzichtOntvangenGka;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $vorderingenOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $vorderingenOntvangenGka;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $inzageToetsingBkrOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $inzageToetsingBkrOntvangenGka;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $stabilisatieovereenkomstOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $stabilisatieovereenkomstOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $stabilisatieovereenkomstNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $cjibOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $cjibOntvangenGka;

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
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $meterstandenEnergieOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $meterstandenEnergieOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $meterstandenEnergieNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $waternetOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $waternetOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $waternetNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $retourbewijsModemOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $retourbewijsModemOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $retourbewijsModemNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringClientOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringClientOntvangenGka;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringMadiOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $toelichtingAanvraagSchuldsaneringMadiOntvangenGka;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $beschikkingOnderBewindstellingOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $beschikkingOnderBewindstellingOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $beschikkingOnderBewindstellingNvt;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $budgetbeheerOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
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
    private $budgetbeheerFibu;

    /**
     * @var string
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $budgetbeheerOverig;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $gereserveerdeGeldenOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $gereserveerdeGeldenOntvangenGka;

    /**
     * @var boolean
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $gereserveerdeGeldenNvt;

    /**
     * @var float
     * @ORM\Column(type="decimal", nullable=true, precision=8, scale=2)
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
     */
    private $gereserveerdeGelden;

    // ---

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $ondertekendAanvraagFormulierOntvangenMadi;

    /**
     * @var integer
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $ondertekendAanvraagFormulierOntvangenGka;

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
     * @var int
     * @ORM\Column(type="bigint", nullable=true)
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
     */
    private $energieBedrijfT1;

    /**
     * @var int
     * @ORM\Column(type="bigint", nullable=true)
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
     */
    private $energieBedrijfT2;

    /**
     * @var float
     * @ORM\Column(type="float", nullable=true)
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
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
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
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
     * @Assert\Type("numeric")
     * @Assert\Range(min=-100000, max=100000)
     */
    private $drinkwaterOpname;

    /**
     * @var boolean|null
     * @ORM\Column(type="boolean", nullable=true, options={"default" : false})
     */
    private $aangifteBelastingdienst;

    /**
     * @var integer|null
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $aangifteBelastingdienstMadi;

    /**
     * @var integer|null
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $aangifteBelastingdienstGka;

    /**
     * @var boolean|null
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $aangifteBelastingdienstNvt;

    /**
     * @var boolean|null
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $jongerenSchuldenvrijeStart;

    /**
     * @var boolean|null
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $schuldenrustLening;

    /**
     * @var boolean|null
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $saneringsKrediet;

    // ---

    public function __construct()
    {
        $this->legitimatieOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->legitimatieOntvangenGka = false;
        $this->vtlbOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->vtlbOntvangenGka = false;
        $this->vtlbBedrag = 0.00;
        $this->inkomstenspecificatieOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->inkomstenspecificatieOntvangenGka = false;
        $this->arbeidsovereenkomstOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->arbeidsovereenkomstOntvangenGka = false;
        $this->arbeidsovereenkomstNvt = false;
        $this->beschikkingUwvOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->beschikkingUwvOntvangenGka = false;
        $this->beschikkingUwvNvt = false;
        $this->beschikkingInkomenUitWerk = false;
        $this->beschikkingUwvWw = false;
        $this->beschikkingUwvWia = false;
        $this->beschikkingUwvZw = false;
        $this->beschikkingUwvWajong = false;
        $this->beschikkingGemeenteAmsterdamIOAW = false;
        $this->beschikkingGemeenteAmsterdamWPI = false;
        $this->beschikkingSVBANW = false;
        $this->beschikkingSVBAOW = false;
        $this->voorlopigeTeruggaafBelastingdienstOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->voorlopigeTeruggaafBelastingdienstOntvangenGka = false;
        $this->voorlopigeTeruggaafBelastingdienstNvt = false;
        $this->alimentatieOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->alimentatieOntvangenGka = false;
        $this->alimentatieNvt = false;
        $this->kostgeldOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->kostgeldOntvangenGka = false;
        $this->kostgeldNvt = false;
        $this->huurspecificatieOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->huurspecificatieOntvangenGka = false;
        $this->huurspecificatieNvt = false;
        $this->polisbladZorgverzekeringOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->polisbladZorgverzekeringOntvangenGka = false;
        $this->polisbladZorgverzekeringNvt = false;
        $this->alimentatieEchtscheidingsconvenantOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->alimentatieEchtscheidingsconvenantOntvangenGka = false;
        $this->alimentatieEchtscheidingsconvenantNvt = false;
        $this->overeenkomstKinderopvangOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->overeenkomstKinderopvangOntvangenGka = false;
        $this->overeenkomstKinderopvangNvt = false;
        $this->kwijtscheldingGemeenteBelastingOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->kwijtscheldingGemeenteBelastingNvt = false;
        $this->kwijtscheldingGemeenteBelasting = false;
        $this->corrigerenGemeenteBelastingOntvangenGka = false;
        $this->corrigerenGemeenteBelastingNvt = false;
        $this->corrigerenGemeenteBelasting = false;
        $this->autoNvt = false;
        $this->autoTaxatieOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->autoTaxatieOntvangenGka = false;
        $this->autoTaxatieNvt = false;
        $this->autolastenKmWoonwerkverkeerOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->autolastenKmWoonwerkverkeerOntvangenGka = false;
        $this->autolastenKmWoonwerkverkeerNvt = false;
        $this->autolastenKmWoonwerkverkeer = 0;
        $this->verklaringWerkgeverOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->verklaringWerkgeverOntvangenGka = false;
        $this->verklaringWerkgeverNvt = false;
        $this->vrijwaringsbewijsOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->vrijwaringsbewijsOntvangenGka = false;
        $this->vrijwaringsbewijsNvt = false;
        $this->schuldenoverzichtOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->schuldenoverzichtOntvangenGka = false;
        $this->vorderingenOntvangenMadi = false;
        $this->vorderingenOntvangenGka = false;
        $this->inzageToetsingBkrOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->inzageToetsingBkrOntvangenGka = false;
        $this->stabilisatieovereenkomstOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->stabilisatieovereenkomstOntvangenGka = false;
        $this->stabilisatieovereenkomstNvt = false;
        $this->cjibOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->cjibOntvangenGka = false;
        $this->cjib = false;
        $this->cjibNvt = false;
        $this->meterstandenEnergieOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->meterstandenEnergieOntvangenGka = false;
        $this->meterstandenEnergieNvt = false;
        $this->waternetOntvangenMadi = false;
        $this->waternetOntvangenGka = false;
        $this->waternetNvt = false;
        $this->retourbewijsModemOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->retourbewijsModemOntvangenGka = false;
        $this->retourbewijsModemNvt = false;
        $this->toelichtingAanvraagSchuldsaneringClientOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->toelichtingAanvraagSchuldsaneringClientOntvangenGka = false;
        $this->toelichtingAanvraagSchuldsaneringMadiOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->toelichtingAanvraagSchuldsaneringMadiOntvangenGka = false;
        $this->beschikkingOnderBewindstellingOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->beschikkingOnderBewindstellingOntvangenGka = false;
        $this->beschikkingOnderBewindstellingNvt = false;
        $this->budgetbeheerOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->budgetbeheerOntvangenGka = false;
        $this->budgetbeheerNvt = false;
        $this->budgetbeheerPlangroep = false;
        $this->budgetbeheerCav = false;
        $this->budgetbeheerFibu = false;
        $this->gereserveerdeGeldenOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->gereserveerdeGeldenOntvangenGka = false;
        $this->gereserveerdeGeldenNvt = false;
        $this->gereserveerdeGelden = 0.00;
        $this->ondertekendAanvraagFormulierOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->ondertekendAanvraagFormulierOntvangenGka = false;
        $this->toeslagenOntvangenMadi = self::STATUS_MADI_OPEN;
        $this->toeslagenOntvangenGka = false;
        $this->toeslagenNvt = false;
        $this->toeslagenHuur = false;
        $this->toeslagenZorg = false;
        $this->toeslagenKinderopvang = false;
        $this->toeslagenKindgebondenBudget = false;
        $this->aangifteBelastingdienst = false;
        $this->aangifteBelastingdienstMadi = self::STATUS_MADI_OPEN;
        $this->aangifteBelastingdienstGka = false;
        $this->aangifteBelastingdienstNvt = false;
        $this->jongerenSchuldenvrijeStart = false;
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

    public function getLegitimatieOntvangenGka()
    {
        return $this->legitimatieOntvangenGka;
    }

    public function getLegitimatieOntvangenMadi()
    {
        return $this->legitimatieOntvangenMadi;
    }

    public function getVtlbOntvangenMadi()
    {
        return $this->vtlbOntvangenMadi;
    }

    public function getVtlbOntvangenGka()
    {
        return $this->vtlbOntvangenGka;
    }

    public function getVtlbBedrag()
    {
        return $this->vtlbBedrag;
    }

    public function getInkomstenspecificatieOntvangenMadi()
    {
        return $this->inkomstenspecificatieOntvangenMadi;
    }

    public function getInkomstenspecificatieOntvangenGka()
    {
        return $this->inkomstenspecificatieOntvangenGka;
    }

    public function getArbeidsovereenkomstOntvangenMadi()
    {
        return $this->arbeidsovereenkomstOntvangenMadi;
    }

    public function getArbeidsovereenkomstOntvangenGka()
    {
        return $this->arbeidsovereenkomstOntvangenGka;
    }

    public function getBeschikkingUwvOntvangenMadi()
    {
        return $this->beschikkingUwvOntvangenMadi;
    }

    public function getBeschikkingUwvOntvangenGka()
    {
        return $this->beschikkingUwvOntvangenGka;
    }

    public function isArbeidsovereenkomstNvt()
    {
        return $this->arbeidsovereenkomstNvt;
    }

    public function getArbeidsovereenkomstWerkgever()
    {
        return $this->arbeidsovereenkomstWerkgever;
    }

    public function getArbeidsovereenkomstContract()
    {
        return $this->arbeidsovereenkomstContract;
    }

    public function getArbeidsovereenkomstPartnerWerkgever()
    {
        return $this->arbeidsovereenkomstPartnerWerkgever;
    }

    public function getArbeidsovereenkomstPartnerContract()
    {
        return $this->arbeidsovereenkomstPartnerContract;
    }

    public function isBeschikkingUwvNvt()
    {
        return $this->beschikkingUwvNvt;
    }

    public function isBeschikkingInkomenUitWerk()
    {
        return $this->beschikkingInkomenUitWerk;
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

    public function isBeschikkingUwvWajong()
    {
        return $this->beschikkingUwvWajong;
    }

    public function isBeschikkingGemeenteAmsterdamWPI()
    {
        return $this->beschikkingGemeenteAmsterdamWPI;
    }

    public function isBeschikkingSVBANW()
    {
        return $this->beschikkingSVBANW;
    }

    public function isBeschikkingSVBAOW()
    {
        return $this->beschikkingSVBAOW;
    }

    public function isBeschikkingGemeenteAmsterdamIOAW()
    {
        return $this->beschikkingGemeenteAmsterdamIOAW;
    }

    public function getBeschikkingUwvOverig()
    {
        return $this->beschikkingUwvOverig;
    }

    public function getVoorlopigeTeruggaafBelastingdienstOntvangenMadi()
    {
        return $this->voorlopigeTeruggaafBelastingdienstOntvangenMadi;
    }

    public function getVoorlopigeTeruggaafBelastingdienstOntvangenGka()
    {
        return $this->voorlopigeTeruggaafBelastingdienstOntvangenGka;
    }

    public function isVoorlopigeTeruggaafBelastingdienstNvt()
    {
        return $this->voorlopigeTeruggaafBelastingdienstNvt;
    }

    public function getAlimentatieOntvangenMadi()
    {
        return $this->alimentatieOntvangenMadi;
    }

    public function getAlimentatieOntvangenGka()
    {
        return $this->alimentatieOntvangenGka;
    }

    public function isAlimentatieNvt()
    {
        return $this->alimentatieNvt;
    }

    public function getKostgeldOntvangenMadi()
    {
        return $this->kostgeldOntvangenMadi;
    }

    public function getKostgeldOntvangenGka()
    {
        return $this->kostgeldOntvangenGka;
    }

    public function isKostgeldNvt()
    {
        return $this->kostgeldNvt;
    }


    public function getHuurspecificatieOntvangenMadi()
    {
        return $this->huurspecificatieOntvangenMadi;
    }

    public function getHuurspecificatieOntvangenGka()
    {
        return $this->huurspecificatieOntvangenGka;
    }

    public function isHuurspecificatieNvt()
    {
        return $this->huurspecificatieNvt;
    }

    public function getPolisbladZorgverzekeringOntvangenMadi()
    {
        return $this->polisbladZorgverzekeringOntvangenMadi;
    }

    public function getPolisbladZorgverzekeringOntvangenGka()
    {
        return $this->polisbladZorgverzekeringOntvangenGka;
    }

    public function isPolisbladZorgverzekeringNvt()
    {
        return $this->polisbladZorgverzekeringNvt;
    }

    public function getAlimentatieEchtscheidingsconvenantOntvangenMadi()
    {
        return $this->alimentatieEchtscheidingsconvenantOntvangenMadi;
    }

    public function getAlimentatieEchtscheidingsconvenantOntvangenGka()
    {
        return $this->alimentatieEchtscheidingsconvenantOntvangenGka;
    }

    public function isAlimentatieEchtscheidingsconvenantNvt()
    {
        return $this->alimentatieEchtscheidingsconvenantNvt;
    }

    public function getOvereenkomstKinderopvangOntvangenMadi()
    {
        return $this->overeenkomstKinderopvangOntvangenMadi;
    }

    public function getOvereenkomstKinderopvangOntvangenGka()
    {
        return $this->overeenkomstKinderopvangOntvangenGka;
    }

    public function isOvereenkomstKinderopvangNvt()
    {
        return $this->overeenkomstKinderopvangNvt;
    }

    public function getKwijtscheldingGemeenteBelastingOntvangenMadi()
    {
        return $this->kwijtscheldingGemeenteBelastingOntvangenMadi;
    }

    public function isKwijtscheldingGemeenteBelastingNvt()
    {
        return $this->kwijtscheldingGemeenteBelastingNvt;
    }

    public function isKwijtscheldingGemeenteBelasting()
    {
        return $this->kwijtscheldingGemeenteBelasting;
    }

    public function getCorrigerenGemeenteBelastingOntvangenGka()
    {
        return $this->corrigerenGemeenteBelastingOntvangenGka;
    }

    public function isCorrigerenGemeenteBelastingNvt()
    {
        return $this->corrigerenGemeenteBelastingNvt;
    }

    public function isCorrigerenGemeenteBelasting()
    {
        return $this->corrigerenGemeenteBelasting;
    }

    public function isAutoNvt()
    {
        return $this->autoNvt;
    }

    public function getAutoTaxatieOntvangenMadi()
    {
        return $this->autoTaxatieOntvangenMadi;
    }

    public function getAutoTaxatieOntvangenGka()
    {
        return $this->autoTaxatieOntvangenGka;
    }

    public function isAutoTaxatieNvt()
    {
        return $this->autoTaxatieNvt;
    }

    public function getAutolastenKmWoonwerkverkeerOntvangenMadi()
    {
        return $this->autolastenKmWoonwerkverkeerOntvangenMadi;
    }

    public function getAutolastenKmWoonwerkverkeerOntvangenGka()
    {
        return $this->autolastenKmWoonwerkverkeerOntvangenGka;
    }

    public function isAutolastenKmWoonwerkverkeerNvt()
    {
        return $this->autolastenKmWoonwerkverkeerNvt;
    }

    public function getAutolastenKmWoonwerkverkeer()
    {
        return $this->autolastenKmWoonwerkverkeer;
    }

    public function getVerklaringWerkgeverOntvangenMadi()
    {
        return $this->verklaringWerkgeverOntvangenMadi;
    }

    public function getVerklaringWerkgeverOntvangenGka()
    {
        return $this->verklaringWerkgeverOntvangenGka;
    }

    public function isVerklaringWerkgeverNvt()
    {
        return $this->verklaringWerkgeverNvt;
    }

    public function getVrijwaringsbewijsOntvangenMadi()
    {
        return $this->vrijwaringsbewijsOntvangenMadi;
    }

    public function getVrijwaringsbewijsOntvangenGka()
    {
        return $this->vrijwaringsbewijsOntvangenGka;
    }

    public function isVrijwaringsbewijsNvt()
    {
        return $this->vrijwaringsbewijsNvt;
    }

    public function getSchuldenoverzichtOntvangenMadi()
    {
        return $this->schuldenoverzichtOntvangenMadi;
    }

    public function getSchuldenoverzichtOntvangenGka()
    {
        return $this->schuldenoverzichtOntvangenGka;
    }

    public function getVorderingenOntvangenMadi()
    {
        return $this->vorderingenOntvangenMadi;
    }

    public function getVorderingenOntvangenGka()
    {
        return $this->vorderingenOntvangenGka;
    }

    public function getInzageToetsingBkrOntvangenMadi()
    {
        return $this->inzageToetsingBkrOntvangenMadi;
    }

    public function getInzageToetsingBkrOntvangenGka()
    {
        return $this->inzageToetsingBkrOntvangenGka;
    }

    public function getStabilisatieovereenkomstOntvangenMadi()
    {
        return $this->stabilisatieovereenkomstOntvangenMadi;
    }

    public function getStabilisatieovereenkomstOntvangenGka()
    {
        return $this->stabilisatieovereenkomstOntvangenGka;
    }

    public function isStabilisatieovereenkomstNvt()
    {
        return $this->stabilisatieovereenkomstNvt;
    }

    public function getCjibOntvangenMadi()
    {
        return $this->cjibOntvangenMadi;
    }

    public function getCjibOntvangenGka()
    {
        return $this->cjibOntvangenGka;
    }

    public function isCjib()
    {
        return $this->cjib;
    }

    public function isCjibNvt()
    {
        return $this->cjibNvt;
    }

    public function getMeterstandenEnergieOntvangenMadi()
    {
        return $this->meterstandenEnergieOntvangenMadi;
    }

    public function getMeterstandenEnergieOntvangenGka()
    {
        return $this->meterstandenEnergieOntvangenGka;
    }

    public function isMeterstandenEnergieNvt()
    {
        return $this->meterstandenEnergieNvt;
    }

    public function getWaternetOntvangenMadi()
    {
        return $this->waternetOntvangenMadi;
    }

    public function getWaternetOntvangenGka()
    {
        return $this->waternetOntvangenGka;
    }

    public function isWaternetNvt()
    {
        return $this->waternetNvt;
    }

    public function getRetourbewijsModemOntvangenMadi()
    {
        return $this->retourbewijsModemOntvangenMadi;
    }

    public function getRetourbewijsModemOntvangenGka()
    {
        return $this->retourbewijsModemOntvangenGka;
    }

    public function isRetourbewijsModemNvt()
    {
        return $this->retourbewijsModemNvt;
    }

    public function getToelichtingAanvraagSchuldsaneringClientOntvangenMadi()
    {
        return $this->toelichtingAanvraagSchuldsaneringClientOntvangenMadi;
    }

    public function getToelichtingAanvraagSchuldsaneringClientOntvangenGka()
    {
        return $this->toelichtingAanvraagSchuldsaneringClientOntvangenGka;
    }

    public function getToelichtingAanvraagSchuldsaneringMadiOntvangenMadi()
    {
        return $this->toelichtingAanvraagSchuldsaneringMadiOntvangenMadi;
    }

    public function getToelichtingAanvraagSchuldsaneringMadiOntvangenGka()
    {
        return $this->toelichtingAanvraagSchuldsaneringMadiOntvangenGka;
    }

    public function getBeschikkingOnderBewindstellingOntvangenMadi()
    {
        return $this->beschikkingOnderBewindstellingOntvangenMadi;
    }

    public function getBeschikkingOnderBewindstellingOntvangenGka()
    {
        return $this->beschikkingOnderBewindstellingOntvangenGka;
    }

    public function isBeschikkingOnderBewindstellingNvt()
    {
        return $this->beschikkingOnderBewindstellingNvt;
    }

    public function getBudgetbeheerOntvangenMadi()
    {
        return $this->budgetbeheerOntvangenMadi;
    }

    public function getBudgetbeheerOntvangenGka()
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

    public function isBudgetbeheerFibu()
    {
        return $this->budgetbeheerFibu;
    }

    public function getBudgetbeheerOverig()
    {
        return $this->budgetbeheerOverig;
    }

    public function getGereserveerdeGeldenOntvangenMadi()
    {
        return $this->gereserveerdeGeldenOntvangenMadi;
    }

    public function getGereserveerdeGeldenOntvangenGka()
    {
        return $this->gereserveerdeGeldenOntvangenGka;
    }

    public function isGereserveerdeGeldenNvt()
    {
        return $this->gereserveerdeGeldenNvt;
    }

    public function getGereserveerdeGelden()
    {
        return $this->gereserveerdeGelden;
    }

    public function getOndertekendAanvraagFormulierOntvangenMadi()
    {
        return $this->ondertekendAanvraagFormulierOntvangenMadi;
    }

    public function getOndertekendAanvraagFormulierOntvangenGka()
    {
        return $this->ondertekendAanvraagFormulierOntvangenGka;
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
     * @return string[]
     */
    public static function getContractOpties()
    {
        return [
            'Tijdelijk contract' => 'Tijdelijk contract',
            'Vast contract' => 'Vast contract',
        ];
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

    public function setVtlbOntvangenMadi($vtlbOntvangenMadi)
    {
        $this->vtlbOntvangenMadi = $vtlbOntvangenMadi;
    }

    public function setVtlbOntvangenGka($vtlbOntvangenGka)
    {
        $this->vtlbOntvangenGka = $vtlbOntvangenGka;
    }

    public function setVtlbBedrag($vtlbBedrag)
    {
        $this->vtlbBedrag = $vtlbBedrag;
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

    public function setArbeidsovereenkomstWerkgever($arbeidsovereenkomstWerkgever)
    {
        $this->arbeidsovereenkomstWerkgever = $arbeidsovereenkomstWerkgever;
    }

    public function setArbeidsovereenkomstContract($arbeidsovereenkomstContract)
    {
        $this->arbeidsovereenkomstContract = $arbeidsovereenkomstContract;
    }

    public function setArbeidsovereenkomstPartnerWerkgever($arbeidsovereenkomstPartnerWerkgever)
    {
        $this->arbeidsovereenkomstPartnerWerkgever = $arbeidsovereenkomstPartnerWerkgever;
    }

    public function setArbeidsovereenkomstPartnerContract($arbeidsovereenkomstPartnerContract)
    {
        $this->arbeidsovereenkomstPartnerContract = $arbeidsovereenkomstPartnerContract;
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

    public function setBeschikkingInkomenUitWerk($beschikkingInkomenUitWerk)
    {
        $this->beschikkingInkomenUitWerk = $beschikkingInkomenUitWerk;
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

    public function setBeschikkingUwvWajong($beschikkingUwvWajong)
    {
        $this->beschikkingUwvWajong = $beschikkingUwvWajong;
    }

    public function setBeschikkingGemeenteAmsterdamWPI($beschikkingGemeenteAmsterdamWPI)
    {
        $this->beschikkingGemeenteAmsterdamWPI = $beschikkingGemeenteAmsterdamWPI;
    }

    public function setBeschikkingSVBAOW($beschikkingSVBAOW)
    {
        $this->beschikkingSVBAOW = $beschikkingSVBAOW;
    }

    public function setBeschikkingSVBANW($beschikkingSVBANW)
    {
        $this->beschikkingSVBANW = $beschikkingSVBANW;
    }

    public function setBeschikkingGemeenteAmsterdamIOAW($beschikkingGemeenteAmsterdamIOAW)
    {
        $this->beschikkingGemeenteAmsterdamIOAW = $beschikkingGemeenteAmsterdamIOAW;
    }

    public function setBeschikkingUwvOverig($beschikkingUwvOverig)
    {
        $this->beschikkingUwvOverig = $beschikkingUwvOverig;
    }

    public function setVoorlopigeTeruggaafBelastingdienstOntvangenMadi($voorlopigeTeruggaafBelastingdienstOntvangenMadi)
    {
        $this->voorlopigeTeruggaafBelastingdienstOntvangenMadi = $voorlopigeTeruggaafBelastingdienstOntvangenMadi;
    }

    public function setVoorlopigeTeruggaafBelastingdienstOntvangenGka($voorlopigeTeruggaafBelastingdienstOntvangenGka)
    {
        $this->voorlopigeTeruggaafBelastingdienstOntvangenGka = $voorlopigeTeruggaafBelastingdienstOntvangenGka;
    }

    public function setVoorlopigeTeruggaafBelastingdienstNvt($voorlopigeTeruggaafBelastingdienstNvt)
    {
        $this->voorlopigeTeruggaafBelastingdienstNvt = $voorlopigeTeruggaafBelastingdienstNvt;
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

    public function setCorrigerenGemeenteBelasting($corrigerenGemeenteBelasting)
    {
        $this->corrigerenGemeenteBelasting = $corrigerenGemeenteBelasting;
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

    public function setAutolastenKmWoonwerkverkeer($autolastenKmWoonwerkverkeer)
    {
        $this->autolastenKmWoonwerkverkeer = $autolastenKmWoonwerkverkeer;
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

    public function setGereserveerdeGelden($gereserveerdeGelden)
    {
        $this->gereserveerdeGelden = $gereserveerdeGelden;
    }

    public function setOndertekendAanvraagFormulierOntvangenMadi($ondertekendAanvraagFormulierOntvangenMadi)
    {
        $this->ondertekendAanvraagFormulierOntvangenMadi = $ondertekendAanvraagFormulierOntvangenMadi;
    }

    public function setOndertekendAanvraagFormulierOntvangenGka($ondertekendAanvraagFormulierOntvangenGka)
    {
        $this->ondertekendAanvraagFormulierOntvangenGka = $ondertekendAanvraagFormulierOntvangenGka;
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

    public function getToeslagenOntvangenMadi()
    {
        return $this->toeslagenOntvangenMadi;
    }

    public function setToeslagenOntvangenMadi($toeslagenOntvangenMadi)
    {
        $this->toeslagenOntvangenMadi = $toeslagenOntvangenMadi;
    }

    public function getToeslagenOntvangenGka()
    {
        return $this->toeslagenOntvangenGka;
    }

    public function setToeslagenOntvangenGka($toeslagenOntvangenGka)
    {
        $this->toeslagenOntvangenGka = $toeslagenOntvangenGka;
    }

    public function isToeslagenNvt()
    {
        return $this->toeslagenNvt;
    }

    public function setToeslagenNvt($toeslagenNvt)
    {
        $this->toeslagenNvt = $toeslagenNvt;
    }

    public function isToeslagenHuur()
    {
        return $this->toeslagenHuur;
    }

    public function setToeslagenHuur($toeslagenHuur)
    {
        $this->toeslagenHuur = $toeslagenHuur;
    }

    public function isToeslagenZorg()
    {
        return $this->toeslagenZorg;
    }

    public function setToeslagenZorg($toeslagenZorg)
    {
        $this->toeslagenZorg = $toeslagenZorg;
    }

    public function isToeslagenKinderopvang()
    {
        return $this->toeslagenKinderopvang;
    }

    public function setToeslagenKinderopvang($toeslagenKinderopvang)
    {
        $this->toeslagenKinderopvang = $toeslagenKinderopvang;
    }

    public function isToeslagenKindgebondenBudget()
    {
        return $this->toeslagenKindgebondenBudget;
    }

    public function setToeslagenKindgebondenBudget($toeslagenKindgebondenBudget)
    {
        $this->toeslagenKindgebondenBudget = $toeslagenKindgebondenBudget;
    }

    /**
     * @return \DateTime|null
     */
    public function getArbeidsovereenkomstEinddatum(): ?\DateTime
    {
        return $this->arbeidsovereenkomstEinddatum;
    }

    /**
     * @param \DateTime|null $arbeidsovereenkomstEinddatum
     * @return Voorlegger
     */
    public function setArbeidsovereenkomstEinddatum(?\DateTime $arbeidsovereenkomstEinddatum): Voorlegger
    {
        $this->arbeidsovereenkomstEinddatum = $arbeidsovereenkomstEinddatum;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getArbeidsovereenkomstPartnerEinddatum(): ?\DateTime
    {
        return $this->arbeidsovereenkomstPartnerEinddatum;
    }

    /**
     * @param \DateTime|null $arbeidsovereenkomstPartnerEinddatum
     * @return Voorlegger
     */
    public function setArbeidsovereenkomstPartnerEinddatum(?\DateTime $arbeidsovereenkomstPartnerEinddatum): Voorlegger
    {
        $this->arbeidsovereenkomstPartnerEinddatum = $arbeidsovereenkomstPartnerEinddatum;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAangifteBelastingdienst(): ?bool
    {
        return $this->aangifteBelastingdienst;
    }

    /**
     * @param bool|null $aangifteBelastingdienst
     * @return Voorlegger
     */
    public function setAangifteBelastingdienst(?bool $aangifteBelastingdienst): Voorlegger
    {
        $this->aangifteBelastingdienst = $aangifteBelastingdienst;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAangifteBelastingdienstMadi(): ?int
    {
        return $this->aangifteBelastingdienstMadi;
    }

    /**
     * @param int|null $aangifteBelastingdienstMadi
     * @return Voorlegger
     */
    public function setAangifteBelastingdienstMadi(?int $aangifteBelastingdienstMadi): Voorlegger
    {
        $this->aangifteBelastingdienstMadi = $aangifteBelastingdienstMadi;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getAangifteBelastingdienstGka(): ?int
    {
        return $this->aangifteBelastingdienstGka;
    }

    /**
     * @param int|null $aangifteBelastingdienstGka
     * @return Voorlegger
     */
    public function setAangifteBelastingdienstGka(?int $aangifteBelastingdienstGka): Voorlegger
    {
        $this->aangifteBelastingdienstGka = $aangifteBelastingdienstGka;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getAangifteBelastingdienstNvt(): ?bool
    {
        return $this->aangifteBelastingdienstNvt;
    }

    /**
     * @param bool|null $aangifteBelastingdienstNvt
     * @return Voorlegger
     */
    public function setAangifteBelastingdienstNvt(?bool $aangifteBelastingdienstNvt): Voorlegger
    {
        $this->aangifteBelastingdienstNvt = $aangifteBelastingdienstNvt;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getJongerenSchuldenvrijeStart(): ?bool
    {
        return $this->jongerenSchuldenvrijeStart;
    }

    /**
     * @param bool|null $jongerenSchuldenvrijeStart
     * @return Voorlegger
     */
    public function setJongerenSchuldenvrijeStart(?bool $jongerenSchuldenvrijeStart): Voorlegger
    {
        $this->jongerenSchuldenvrijeStart = $jongerenSchuldenvrijeStart;

        return $this;
    }

    /**
     * @return bool|null
     */
    public function getSchuldenrustLening(): ?bool
    {
        return $this->schuldenrustLening;
    }

    /**
     * @param bool|null $schuldenrustLening
     */
    public function setSchuldenrustLening(?bool $schuldenrustLening): void
    {
        $this->schuldenrustLening = $schuldenrustLening;
    }

    /**
     * @return bool|null
     */
    public function getSaneringsKrediet(): ?bool
    {
        return $this->saneringsKrediet;
    }

    /**
     * @param bool|null $saneringsKrediet
     */
    public function setSaneringsKrediet(?bool $saneringsKrediet): void
    {
        $this->saneringsKrediet = $saneringsKrediet;
    }

}

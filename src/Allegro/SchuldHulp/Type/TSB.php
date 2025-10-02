<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSB implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $InfoHeader;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var int
     */
    private int $Opdrachtgever;

    /**
     * @var int
     */
    private int $OpdrachtgeverContact;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $StartdatumEersteBetaling;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $TheoEinddatum;

    /**
     * @var int
     */
    private int $TotaalAantalMaanden;

    /**
     * @var int
     */
    private int $TotaalAantalMaandenVerstreken;

    /**
     * @var int
     */
    private int $TotaalAantalMaandenResterend;

    /**
     * @var float
     */
    private float $VTLB;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumBerekening;

    /**
     * @var float
     */
    private float $BrutoAflosCapaciteitMaand;

    /**
     * @var float
     */
    private float $KostenFinancieelBeheerMaand;

    /**
     * @var float
     */
    private float $KostenSchuldhulpverleningMaand;

    /**
     * @var float
     */
    private float $NettoAflosCapaciteitMaand;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumOverzicht;

    /**
     * @var int
     */
    private int $PartnerCode;

    /**
     * @var float
     */
    private float $TotaalSchuldbedrag;

    /**
     * @var float
     */
    private float $MaximumKosten;

    /**
     * @var float
     */
    private float $BetaaldeKosten;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumLaatsteBetaling;

    /**
     * @var float
     */
    private float $BedragLaatsteBetaling;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $InfoHeader
     * @param string $Medewerker
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param \DateTimeInterface $Startdatum
     * @param \DateTimeInterface $StartdatumEersteBetaling
     * @param \DateTimeInterface $TheoEinddatum
     * @param int $TotaalAantalMaanden
     * @param int $TotaalAantalMaandenVerstreken
     * @param int $TotaalAantalMaandenResterend
     * @param float $VTLB
     * @param \DateTimeInterface $DatumBerekening
     * @param float $BrutoAflosCapaciteitMaand
     * @param float $KostenFinancieelBeheerMaand
     * @param float $KostenSchuldhulpverleningMaand
     * @param float $NettoAflosCapaciteitMaand
     * @param \DateTimeInterface $DatumOverzicht
     * @param int $PartnerCode
     * @param float $TotaalSchuldbedrag
     * @param float $MaximumKosten
     * @param float $BetaaldeKosten
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @param float $BedragLaatsteBetaling
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $InfoHeader, string $Medewerker, int $Opdrachtgever, int $OpdrachtgeverContact, \DateTimeInterface $Startdatum, \DateTimeInterface $StartdatumEersteBetaling, \DateTimeInterface $TheoEinddatum, int $TotaalAantalMaanden, int $TotaalAantalMaandenVerstreken, int $TotaalAantalMaandenResterend, float $VTLB, \DateTimeInterface $DatumBerekening, float $BrutoAflosCapaciteitMaand, float $KostenFinancieelBeheerMaand, float $KostenSchuldhulpverleningMaand, float $NettoAflosCapaciteitMaand, \DateTimeInterface $DatumOverzicht, int $PartnerCode, float $TotaalSchuldbedrag, float $MaximumKosten, float $BetaaldeKosten, \DateTimeInterface $DatumLaatsteBetaling, float $BedragLaatsteBetaling)
    {
        $this->InfoHeader = $InfoHeader;
        $this->Medewerker = $Medewerker;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
        $this->Startdatum = $Startdatum;
        $this->StartdatumEersteBetaling = $StartdatumEersteBetaling;
        $this->TheoEinddatum = $TheoEinddatum;
        $this->TotaalAantalMaanden = $TotaalAantalMaanden;
        $this->TotaalAantalMaandenVerstreken = $TotaalAantalMaandenVerstreken;
        $this->TotaalAantalMaandenResterend = $TotaalAantalMaandenResterend;
        $this->VTLB = $VTLB;
        $this->DatumBerekening = $DatumBerekening;
        $this->BrutoAflosCapaciteitMaand = $BrutoAflosCapaciteitMaand;
        $this->KostenFinancieelBeheerMaand = $KostenFinancieelBeheerMaand;
        $this->KostenSchuldhulpverleningMaand = $KostenSchuldhulpverleningMaand;
        $this->NettoAflosCapaciteitMaand = $NettoAflosCapaciteitMaand;
        $this->DatumOverzicht = $DatumOverzicht;
        $this->PartnerCode = $PartnerCode;
        $this->TotaalSchuldbedrag = $TotaalSchuldbedrag;
        $this->MaximumKosten = $MaximumKosten;
        $this->BetaaldeKosten = $BetaaldeKosten;
        $this->DatumLaatsteBetaling = $DatumLaatsteBetaling;
        $this->BedragLaatsteBetaling = $BedragLaatsteBetaling;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader
     */
    public function getInfoHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $InfoHeader
     * @return static
     */
    public function withInfoHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSBHeader $InfoHeader) : static
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker() : string
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return static
     */
    public function withMedewerker(string $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever() : int
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return static
     */
    public function withOpdrachtgever(int $Opdrachtgever) : static
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact() : int
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return static
     */
    public function withOpdrachtgeverContact(int $OpdrachtgeverContact) : static
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum() : \DateTimeInterface
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return static
     */
    public function withStartdatum(\DateTimeInterface $Startdatum) : static
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatumEersteBetaling() : \DateTimeInterface
    {
        return $this->StartdatumEersteBetaling;
    }

    /**
     * @param \DateTimeInterface $StartdatumEersteBetaling
     * @return static
     */
    public function withStartdatumEersteBetaling(\DateTimeInterface $StartdatumEersteBetaling) : static
    {
        $new = clone $this;
        $new->StartdatumEersteBetaling = $StartdatumEersteBetaling;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTheoEinddatum() : \DateTimeInterface
    {
        return $this->TheoEinddatum;
    }

    /**
     * @param \DateTimeInterface $TheoEinddatum
     * @return static
     */
    public function withTheoEinddatum(\DateTimeInterface $TheoEinddatum) : static
    {
        $new = clone $this;
        $new->TheoEinddatum = $TheoEinddatum;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaanden() : int
    {
        return $this->TotaalAantalMaanden;
    }

    /**
     * @param int $TotaalAantalMaanden
     * @return static
     */
    public function withTotaalAantalMaanden(int $TotaalAantalMaanden) : static
    {
        $new = clone $this;
        $new->TotaalAantalMaanden = $TotaalAantalMaanden;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaandenVerstreken() : int
    {
        return $this->TotaalAantalMaandenVerstreken;
    }

    /**
     * @param int $TotaalAantalMaandenVerstreken
     * @return static
     */
    public function withTotaalAantalMaandenVerstreken(int $TotaalAantalMaandenVerstreken) : static
    {
        $new = clone $this;
        $new->TotaalAantalMaandenVerstreken = $TotaalAantalMaandenVerstreken;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaandenResterend() : int
    {
        return $this->TotaalAantalMaandenResterend;
    }

    /**
     * @param int $TotaalAantalMaandenResterend
     * @return static
     */
    public function withTotaalAantalMaandenResterend(int $TotaalAantalMaandenResterend) : static
    {
        $new = clone $this;
        $new->TotaalAantalMaandenResterend = $TotaalAantalMaandenResterend;

        return $new;
    }

    /**
     * @return float
     */
    public function getVTLB() : float
    {
        return $this->VTLB;
    }

    /**
     * @param float $VTLB
     * @return static
     */
    public function withVTLB(float $VTLB) : static
    {
        $new = clone $this;
        $new->VTLB = $VTLB;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumBerekening() : \DateTimeInterface
    {
        return $this->DatumBerekening;
    }

    /**
     * @param \DateTimeInterface $DatumBerekening
     * @return static
     */
    public function withDatumBerekening(\DateTimeInterface $DatumBerekening) : static
    {
        $new = clone $this;
        $new->DatumBerekening = $DatumBerekening;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrutoAflosCapaciteitMaand() : float
    {
        return $this->BrutoAflosCapaciteitMaand;
    }

    /**
     * @param float $BrutoAflosCapaciteitMaand
     * @return static
     */
    public function withBrutoAflosCapaciteitMaand(float $BrutoAflosCapaciteitMaand) : static
    {
        $new = clone $this;
        $new->BrutoAflosCapaciteitMaand = $BrutoAflosCapaciteitMaand;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenFinancieelBeheerMaand() : float
    {
        return $this->KostenFinancieelBeheerMaand;
    }

    /**
     * @param float $KostenFinancieelBeheerMaand
     * @return static
     */
    public function withKostenFinancieelBeheerMaand(float $KostenFinancieelBeheerMaand) : static
    {
        $new = clone $this;
        $new->KostenFinancieelBeheerMaand = $KostenFinancieelBeheerMaand;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenSchuldhulpverleningMaand() : float
    {
        return $this->KostenSchuldhulpverleningMaand;
    }

    /**
     * @param float $KostenSchuldhulpverleningMaand
     * @return static
     */
    public function withKostenSchuldhulpverleningMaand(float $KostenSchuldhulpverleningMaand) : static
    {
        $new = clone $this;
        $new->KostenSchuldhulpverleningMaand = $KostenSchuldhulpverleningMaand;

        return $new;
    }

    /**
     * @return float
     */
    public function getNettoAflosCapaciteitMaand() : float
    {
        return $this->NettoAflosCapaciteitMaand;
    }

    /**
     * @param float $NettoAflosCapaciteitMaand
     * @return static
     */
    public function withNettoAflosCapaciteitMaand(float $NettoAflosCapaciteitMaand) : static
    {
        $new = clone $this;
        $new->NettoAflosCapaciteitMaand = $NettoAflosCapaciteitMaand;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumOverzicht() : \DateTimeInterface
    {
        return $this->DatumOverzicht;
    }

    /**
     * @param \DateTimeInterface $DatumOverzicht
     * @return static
     */
    public function withDatumOverzicht(\DateTimeInterface $DatumOverzicht) : static
    {
        $new = clone $this;
        $new->DatumOverzicht = $DatumOverzicht;

        return $new;
    }

    /**
     * @return int
     */
    public function getPartnerCode() : int
    {
        return $this->PartnerCode;
    }

    /**
     * @param int $PartnerCode
     * @return static
     */
    public function withPartnerCode(int $PartnerCode) : static
    {
        $new = clone $this;
        $new->PartnerCode = $PartnerCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalSchuldbedrag() : float
    {
        return $this->TotaalSchuldbedrag;
    }

    /**
     * @param float $TotaalSchuldbedrag
     * @return static
     */
    public function withTotaalSchuldbedrag(float $TotaalSchuldbedrag) : static
    {
        $new = clone $this;
        $new->TotaalSchuldbedrag = $TotaalSchuldbedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaximumKosten() : float
    {
        return $this->MaximumKosten;
    }

    /**
     * @param float $MaximumKosten
     * @return static
     */
    public function withMaximumKosten(float $MaximumKosten) : static
    {
        $new = clone $this;
        $new->MaximumKosten = $MaximumKosten;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeKosten() : float
    {
        return $this->BetaaldeKosten;
    }

    /**
     * @param float $BetaaldeKosten
     * @return static
     */
    public function withBetaaldeKosten(float $BetaaldeKosten) : static
    {
        $new = clone $this;
        $new->BetaaldeKosten = $BetaaldeKosten;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumLaatsteBetaling() : \DateTimeInterface
    {
        return $this->DatumLaatsteBetaling;
    }

    /**
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @return static
     */
    public function withDatumLaatsteBetaling(\DateTimeInterface $DatumLaatsteBetaling) : static
    {
        $new = clone $this;
        $new->DatumLaatsteBetaling = $DatumLaatsteBetaling;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragLaatsteBetaling() : float
    {
        return $this->BedragLaatsteBetaling;
    }

    /**
     * @param float $BedragLaatsteBetaling
     * @return static
     */
    public function withBedragLaatsteBetaling(float $BedragLaatsteBetaling) : static
    {
        $new = clone $this;
        $new->BedragLaatsteBetaling = $BedragLaatsteBetaling;

        return $new;
    }
}


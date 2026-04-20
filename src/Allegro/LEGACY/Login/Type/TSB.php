<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSB implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader
     */
    private $InfoHeader;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var int
     */
    private $Opdrachtgever;

    /**
     * @var int
     */
    private $OpdrachtgeverContact;

    /**
     * @var \DateTimeInterface
     */
    private $Startdatum;

    /**
     * @var \DateTimeInterface
     */
    private $StartdatumEersteBetaling;

    /**
     * @var \DateTimeInterface
     */
    private $TheoEinddatum;

    /**
     * @var int
     */
    private $TotaalAantalMaanden;

    /**
     * @var int
     */
    private $TotaalAantalMaandenVerstreken;

    /**
     * @var int
     */
    private $TotaalAantalMaandenResterend;

    /**
     * @var float
     */
    private $VTLB;

    /**
     * @var \DateTimeInterface
     */
    private $DatumBerekening;

    /**
     * @var float
     */
    private $BrutoAflosCapaciteitMaand;

    /**
     * @var float
     */
    private $KostenFinancieelBeheerMaand;

    /**
     * @var float
     */
    private $KostenSchuldhulpverleningMaand;

    /**
     * @var float
     */
    private $NettoAflosCapaciteitMaand;

    /**
     * @var \DateTimeInterface
     */
    private $DatumOverzicht;

    /**
     * @var int
     */
    private $PartnerCode;

    /**
     * @var float
     */
    private $TotaalSchuldbedrag;

    /**
     * @var float
     */
    private $MaximumKosten;

    /**
     * @var float
     */
    private $BetaaldeKosten;

    /**
     * @var \DateTimeInterface
     */
    private $DatumLaatsteBetaling;

    /**
     * @var float
     */
    private $BedragLaatsteBetaling;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $InfoHeader
     * @var string $Medewerker
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     * @var \DateTimeInterface $Startdatum
     * @var \DateTimeInterface $StartdatumEersteBetaling
     * @var \DateTimeInterface $TheoEinddatum
     * @var int $TotaalAantalMaanden
     * @var int $TotaalAantalMaandenVerstreken
     * @var int $TotaalAantalMaandenResterend
     * @var float $VTLB
     * @var \DateTimeInterface $DatumBerekening
     * @var float $BrutoAflosCapaciteitMaand
     * @var float $KostenFinancieelBeheerMaand
     * @var float $KostenSchuldhulpverleningMaand
     * @var float $NettoAflosCapaciteitMaand
     * @var \DateTimeInterface $DatumOverzicht
     * @var int $PartnerCode
     * @var float $TotaalSchuldbedrag
     * @var float $MaximumKosten
     * @var float $BetaaldeKosten
     * @var \DateTimeInterface $DatumLaatsteBetaling
     * @var float $BedragLaatsteBetaling
     */
    public function __construct($InfoHeader, $Medewerker, $Opdrachtgever, $OpdrachtgeverContact, $Startdatum, $StartdatumEersteBetaling, $TheoEinddatum, $TotaalAantalMaanden, $TotaalAantalMaandenVerstreken, $TotaalAantalMaandenResterend, $VTLB, $DatumBerekening, $BrutoAflosCapaciteitMaand, $KostenFinancieelBeheerMaand, $KostenSchuldhulpverleningMaand, $NettoAflosCapaciteitMaand, $DatumOverzicht, $PartnerCode, $TotaalSchuldbedrag, $MaximumKosten, $BetaaldeKosten, $DatumLaatsteBetaling, $BedragLaatsteBetaling)
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader
     */
    public function getInfoHeader()
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSBHeader $InfoHeader
     * @return TSB
     */
    public function withInfoHeader($InfoHeader)
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return TSB
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever()
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return TSB
     */
    public function withOpdrachtgever($Opdrachtgever)
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact()
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return TSB
     */
    public function withOpdrachtgeverContact($OpdrachtgeverContact)
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatum()
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return TSB
     */
    public function withStartdatum($Startdatum)
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartdatumEersteBetaling()
    {
        return $this->StartdatumEersteBetaling;
    }

    /**
     * @param \DateTimeInterface $StartdatumEersteBetaling
     * @return TSB
     */
    public function withStartdatumEersteBetaling($StartdatumEersteBetaling)
    {
        $new = clone $this;
        $new->StartdatumEersteBetaling = $StartdatumEersteBetaling;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getTheoEinddatum()
    {
        return $this->TheoEinddatum;
    }

    /**
     * @param \DateTimeInterface $TheoEinddatum
     * @return TSB
     */
    public function withTheoEinddatum($TheoEinddatum)
    {
        $new = clone $this;
        $new->TheoEinddatum = $TheoEinddatum;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaanden()
    {
        return $this->TotaalAantalMaanden;
    }

    /**
     * @param int $TotaalAantalMaanden
     * @return TSB
     */
    public function withTotaalAantalMaanden($TotaalAantalMaanden)
    {
        $new = clone $this;
        $new->TotaalAantalMaanden = $TotaalAantalMaanden;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaandenVerstreken()
    {
        return $this->TotaalAantalMaandenVerstreken;
    }

    /**
     * @param int $TotaalAantalMaandenVerstreken
     * @return TSB
     */
    public function withTotaalAantalMaandenVerstreken($TotaalAantalMaandenVerstreken)
    {
        $new = clone $this;
        $new->TotaalAantalMaandenVerstreken = $TotaalAantalMaandenVerstreken;

        return $new;
    }

    /**
     * @return int
     */
    public function getTotaalAantalMaandenResterend()
    {
        return $this->TotaalAantalMaandenResterend;
    }

    /**
     * @param int $TotaalAantalMaandenResterend
     * @return TSB
     */
    public function withTotaalAantalMaandenResterend($TotaalAantalMaandenResterend)
    {
        $new = clone $this;
        $new->TotaalAantalMaandenResterend = $TotaalAantalMaandenResterend;

        return $new;
    }

    /**
     * @return float
     */
    public function getVTLB()
    {
        return $this->VTLB;
    }

    /**
     * @param float $VTLB
     * @return TSB
     */
    public function withVTLB($VTLB)
    {
        $new = clone $this;
        $new->VTLB = $VTLB;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumBerekening()
    {
        return $this->DatumBerekening;
    }

    /**
     * @param \DateTimeInterface $DatumBerekening
     * @return TSB
     */
    public function withDatumBerekening($DatumBerekening)
    {
        $new = clone $this;
        $new->DatumBerekening = $DatumBerekening;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrutoAflosCapaciteitMaand()
    {
        return $this->BrutoAflosCapaciteitMaand;
    }

    /**
     * @param float $BrutoAflosCapaciteitMaand
     * @return TSB
     */
    public function withBrutoAflosCapaciteitMaand($BrutoAflosCapaciteitMaand)
    {
        $new = clone $this;
        $new->BrutoAflosCapaciteitMaand = $BrutoAflosCapaciteitMaand;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenFinancieelBeheerMaand()
    {
        return $this->KostenFinancieelBeheerMaand;
    }

    /**
     * @param float $KostenFinancieelBeheerMaand
     * @return TSB
     */
    public function withKostenFinancieelBeheerMaand($KostenFinancieelBeheerMaand)
    {
        $new = clone $this;
        $new->KostenFinancieelBeheerMaand = $KostenFinancieelBeheerMaand;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenSchuldhulpverleningMaand()
    {
        return $this->KostenSchuldhulpverleningMaand;
    }

    /**
     * @param float $KostenSchuldhulpverleningMaand
     * @return TSB
     */
    public function withKostenSchuldhulpverleningMaand($KostenSchuldhulpverleningMaand)
    {
        $new = clone $this;
        $new->KostenSchuldhulpverleningMaand = $KostenSchuldhulpverleningMaand;

        return $new;
    }

    /**
     * @return float
     */
    public function getNettoAflosCapaciteitMaand()
    {
        return $this->NettoAflosCapaciteitMaand;
    }

    /**
     * @param float $NettoAflosCapaciteitMaand
     * @return TSB
     */
    public function withNettoAflosCapaciteitMaand($NettoAflosCapaciteitMaand)
    {
        $new = clone $this;
        $new->NettoAflosCapaciteitMaand = $NettoAflosCapaciteitMaand;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumOverzicht()
    {
        return $this->DatumOverzicht;
    }

    /**
     * @param \DateTimeInterface $DatumOverzicht
     * @return TSB
     */
    public function withDatumOverzicht($DatumOverzicht)
    {
        $new = clone $this;
        $new->DatumOverzicht = $DatumOverzicht;

        return $new;
    }

    /**
     * @return int
     */
    public function getPartnerCode()
    {
        return $this->PartnerCode;
    }

    /**
     * @param int $PartnerCode
     * @return TSB
     */
    public function withPartnerCode($PartnerCode)
    {
        $new = clone $this;
        $new->PartnerCode = $PartnerCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaalSchuldbedrag()
    {
        return $this->TotaalSchuldbedrag;
    }

    /**
     * @param float $TotaalSchuldbedrag
     * @return TSB
     */
    public function withTotaalSchuldbedrag($TotaalSchuldbedrag)
    {
        $new = clone $this;
        $new->TotaalSchuldbedrag = $TotaalSchuldbedrag;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaximumKosten()
    {
        return $this->MaximumKosten;
    }

    /**
     * @param float $MaximumKosten
     * @return TSB
     */
    public function withMaximumKosten($MaximumKosten)
    {
        $new = clone $this;
        $new->MaximumKosten = $MaximumKosten;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeKosten()
    {
        return $this->BetaaldeKosten;
    }

    /**
     * @param float $BetaaldeKosten
     * @return TSB
     */
    public function withBetaaldeKosten($BetaaldeKosten)
    {
        $new = clone $this;
        $new->BetaaldeKosten = $BetaaldeKosten;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumLaatsteBetaling()
    {
        return $this->DatumLaatsteBetaling;
    }

    /**
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @return TSB
     */
    public function withDatumLaatsteBetaling($DatumLaatsteBetaling)
    {
        $new = clone $this;
        $new->DatumLaatsteBetaling = $DatumLaatsteBetaling;

        return $new;
    }

    /**
     * @return float
     */
    public function getBedragLaatsteBetaling()
    {
        return $this->BedragLaatsteBetaling;
    }

    /**
     * @param float $BedragLaatsteBetaling
     * @return TSB
     */
    public function withBedragLaatsteBetaling($BedragLaatsteBetaling)
    {
        $new = clone $this;
        $new->BedragLaatsteBetaling = $BedragLaatsteBetaling;

        return $new;
    }
}

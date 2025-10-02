<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPL implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $InfoHeader;

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
    private \DateTimeInterface $TheoEinddatum;

    /**
     * @var float
     */
    private float $NettoKredietsom;

    /**
     * @var float
     */
    private float $BrutoKredietsom;

    /**
     * @var float
     */
    private float $Kredietvergoeding;

    /**
     * @var float
     */
    private float $MaandTermijn;

    /**
     * @var float
     */
    private float $KwartaalTermijn;

    /**
     * @var int
     */
    private int $AantalMaanden;

    /**
     * @var int
     */
    private int $AantalKwartalen;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumEersteAflossing;

    /**
     * @var float
     */
    private float $Betaald;

    /**
     * @var float
     */
    private float $SaldoLening;

    /**
     * @var float
     */
    private float $Achterstand;

    /**
     * @var int
     */
    private int $ResterendeLooptijd;

    /**
     * @var float
     */
    private float $EffectiefJaarpercentage;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumLaatsteBetaling;

    /**
     * @var float
     */
    private float $BedragLaatsteBetaling;

    /**
     * @var float
     */
    private float $VolledigVervroegdeAflossing;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var int
     */
    private int $MedelenerCode;

    /**
     * @var float
     */
    private float $OpenstaandeVertragingsrente;

    /**
     * @var float
     */
    private float $OpenstaandeKredietvergoeding;

    /**
     * @var float
     */
    private float $BetaaldeVertragingsrente;

    /**
     * @var float
     */
    private float $BetaaldeBoeterente;

    /**
     * @var float
     */
    private float $KostenVVA;

    /**
     * @var float
     */
    private float $Voorstand;

    /**
     * @var string
     */
    private string $LeningSoort;

    /**
     * @var float
     */
    private float $MaandPercentage;

    /**
     * @var float
     */
    private float $BetaaldeKredietvergoeding;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $InfoHeader
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param \DateTimeInterface $TheoEinddatum
     * @param float $NettoKredietsom
     * @param float $BrutoKredietsom
     * @param float $Kredietvergoeding
     * @param float $MaandTermijn
     * @param float $KwartaalTermijn
     * @param int $AantalMaanden
     * @param int $AantalKwartalen
     * @param \DateTimeInterface $DatumEersteAflossing
     * @param float $Betaald
     * @param float $SaldoLening
     * @param float $Achterstand
     * @param int $ResterendeLooptijd
     * @param float $EffectiefJaarpercentage
     * @param \DateTimeInterface $DatumLaatsteBetaling
     * @param float $BedragLaatsteBetaling
     * @param float $VolledigVervroegdeAflossing
     * @param string $Medewerker
     * @param int $MedelenerCode
     * @param float $OpenstaandeVertragingsrente
     * @param float $OpenstaandeKredietvergoeding
     * @param float $BetaaldeVertragingsrente
     * @param float $BetaaldeBoeterente
     * @param float $KostenVVA
     * @param float $Voorstand
     * @param string $LeningSoort
     * @param float $MaandPercentage
     * @param float $BetaaldeKredietvergoeding
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $InfoHeader, int $Opdrachtgever, int $OpdrachtgeverContact, \DateTimeInterface $TheoEinddatum, float $NettoKredietsom, float $BrutoKredietsom, float $Kredietvergoeding, float $MaandTermijn, float $KwartaalTermijn, int $AantalMaanden, int $AantalKwartalen, \DateTimeInterface $DatumEersteAflossing, float $Betaald, float $SaldoLening, float $Achterstand, int $ResterendeLooptijd, float $EffectiefJaarpercentage, \DateTimeInterface $DatumLaatsteBetaling, float $BedragLaatsteBetaling, float $VolledigVervroegdeAflossing, string $Medewerker, int $MedelenerCode, float $OpenstaandeVertragingsrente, float $OpenstaandeKredietvergoeding, float $BetaaldeVertragingsrente, float $BetaaldeBoeterente, float $KostenVVA, float $Voorstand, string $LeningSoort, float $MaandPercentage, float $BetaaldeKredietvergoeding)
    {
        $this->InfoHeader = $InfoHeader;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
        $this->TheoEinddatum = $TheoEinddatum;
        $this->NettoKredietsom = $NettoKredietsom;
        $this->BrutoKredietsom = $BrutoKredietsom;
        $this->Kredietvergoeding = $Kredietvergoeding;
        $this->MaandTermijn = $MaandTermijn;
        $this->KwartaalTermijn = $KwartaalTermijn;
        $this->AantalMaanden = $AantalMaanden;
        $this->AantalKwartalen = $AantalKwartalen;
        $this->DatumEersteAflossing = $DatumEersteAflossing;
        $this->Betaald = $Betaald;
        $this->SaldoLening = $SaldoLening;
        $this->Achterstand = $Achterstand;
        $this->ResterendeLooptijd = $ResterendeLooptijd;
        $this->EffectiefJaarpercentage = $EffectiefJaarpercentage;
        $this->DatumLaatsteBetaling = $DatumLaatsteBetaling;
        $this->BedragLaatsteBetaling = $BedragLaatsteBetaling;
        $this->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;
        $this->Medewerker = $Medewerker;
        $this->MedelenerCode = $MedelenerCode;
        $this->OpenstaandeVertragingsrente = $OpenstaandeVertragingsrente;
        $this->OpenstaandeKredietvergoeding = $OpenstaandeKredietvergoeding;
        $this->BetaaldeVertragingsrente = $BetaaldeVertragingsrente;
        $this->BetaaldeBoeterente = $BetaaldeBoeterente;
        $this->KostenVVA = $KostenVVA;
        $this->Voorstand = $Voorstand;
        $this->LeningSoort = $LeningSoort;
        $this->MaandPercentage = $MaandPercentage;
        $this->BetaaldeKredietvergoeding = $BetaaldeKredietvergoeding;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader
     */
    public function getInfoHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $InfoHeader
     * @return static
     */
    public function withInfoHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLHeader $InfoHeader) : static
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

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
     * @return float
     */
    public function getNettoKredietsom() : float
    {
        return $this->NettoKredietsom;
    }

    /**
     * @param float $NettoKredietsom
     * @return static
     */
    public function withNettoKredietsom(float $NettoKredietsom) : static
    {
        $new = clone $this;
        $new->NettoKredietsom = $NettoKredietsom;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrutoKredietsom() : float
    {
        return $this->BrutoKredietsom;
    }

    /**
     * @param float $BrutoKredietsom
     * @return static
     */
    public function withBrutoKredietsom(float $BrutoKredietsom) : static
    {
        $new = clone $this;
        $new->BrutoKredietsom = $BrutoKredietsom;

        return $new;
    }

    /**
     * @return float
     */
    public function getKredietvergoeding() : float
    {
        return $this->Kredietvergoeding;
    }

    /**
     * @param float $Kredietvergoeding
     * @return static
     */
    public function withKredietvergoeding(float $Kredietvergoeding) : static
    {
        $new = clone $this;
        $new->Kredietvergoeding = $Kredietvergoeding;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandTermijn() : float
    {
        return $this->MaandTermijn;
    }

    /**
     * @param float $MaandTermijn
     * @return static
     */
    public function withMaandTermijn(float $MaandTermijn) : static
    {
        $new = clone $this;
        $new->MaandTermijn = $MaandTermijn;

        return $new;
    }

    /**
     * @return float
     */
    public function getKwartaalTermijn() : float
    {
        return $this->KwartaalTermijn;
    }

    /**
     * @param float $KwartaalTermijn
     * @return static
     */
    public function withKwartaalTermijn(float $KwartaalTermijn) : static
    {
        $new = clone $this;
        $new->KwartaalTermijn = $KwartaalTermijn;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalMaanden() : int
    {
        return $this->AantalMaanden;
    }

    /**
     * @param int $AantalMaanden
     * @return static
     */
    public function withAantalMaanden(int $AantalMaanden) : static
    {
        $new = clone $this;
        $new->AantalMaanden = $AantalMaanden;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalKwartalen() : int
    {
        return $this->AantalKwartalen;
    }

    /**
     * @param int $AantalKwartalen
     * @return static
     */
    public function withAantalKwartalen(int $AantalKwartalen) : static
    {
        $new = clone $this;
        $new->AantalKwartalen = $AantalKwartalen;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumEersteAflossing() : \DateTimeInterface
    {
        return $this->DatumEersteAflossing;
    }

    /**
     * @param \DateTimeInterface $DatumEersteAflossing
     * @return static
     */
    public function withDatumEersteAflossing(\DateTimeInterface $DatumEersteAflossing) : static
    {
        $new = clone $this;
        $new->DatumEersteAflossing = $DatumEersteAflossing;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaald() : float
    {
        return $this->Betaald;
    }

    /**
     * @param float $Betaald
     * @return static
     */
    public function withBetaald(float $Betaald) : static
    {
        $new = clone $this;
        $new->Betaald = $Betaald;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoLening() : float
    {
        return $this->SaldoLening;
    }

    /**
     * @param float $SaldoLening
     * @return static
     */
    public function withSaldoLening(float $SaldoLening) : static
    {
        $new = clone $this;
        $new->SaldoLening = $SaldoLening;

        return $new;
    }

    /**
     * @return float
     */
    public function getAchterstand() : float
    {
        return $this->Achterstand;
    }

    /**
     * @param float $Achterstand
     * @return static
     */
    public function withAchterstand(float $Achterstand) : static
    {
        $new = clone $this;
        $new->Achterstand = $Achterstand;

        return $new;
    }

    /**
     * @return int
     */
    public function getResterendeLooptijd() : int
    {
        return $this->ResterendeLooptijd;
    }

    /**
     * @param int $ResterendeLooptijd
     * @return static
     */
    public function withResterendeLooptijd(int $ResterendeLooptijd) : static
    {
        $new = clone $this;
        $new->ResterendeLooptijd = $ResterendeLooptijd;

        return $new;
    }

    /**
     * @return float
     */
    public function getEffectiefJaarpercentage() : float
    {
        return $this->EffectiefJaarpercentage;
    }

    /**
     * @param float $EffectiefJaarpercentage
     * @return static
     */
    public function withEffectiefJaarpercentage(float $EffectiefJaarpercentage) : static
    {
        $new = clone $this;
        $new->EffectiefJaarpercentage = $EffectiefJaarpercentage;

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

    /**
     * @return float
     */
    public function getVolledigVervroegdeAflossing() : float
    {
        return $this->VolledigVervroegdeAflossing;
    }

    /**
     * @param float $VolledigVervroegdeAflossing
     * @return static
     */
    public function withVolledigVervroegdeAflossing(float $VolledigVervroegdeAflossing) : static
    {
        $new = clone $this;
        $new->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;

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
    public function getMedelenerCode() : int
    {
        return $this->MedelenerCode;
    }

    /**
     * @param int $MedelenerCode
     * @return static
     */
    public function withMedelenerCode(int $MedelenerCode) : static
    {
        $new = clone $this;
        $new->MedelenerCode = $MedelenerCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getOpenstaandeVertragingsrente() : float
    {
        return $this->OpenstaandeVertragingsrente;
    }

    /**
     * @param float $OpenstaandeVertragingsrente
     * @return static
     */
    public function withOpenstaandeVertragingsrente(float $OpenstaandeVertragingsrente) : static
    {
        $new = clone $this;
        $new->OpenstaandeVertragingsrente = $OpenstaandeVertragingsrente;

        return $new;
    }

    /**
     * @return float
     */
    public function getOpenstaandeKredietvergoeding() : float
    {
        return $this->OpenstaandeKredietvergoeding;
    }

    /**
     * @param float $OpenstaandeKredietvergoeding
     * @return static
     */
    public function withOpenstaandeKredietvergoeding(float $OpenstaandeKredietvergoeding) : static
    {
        $new = clone $this;
        $new->OpenstaandeKredietvergoeding = $OpenstaandeKredietvergoeding;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeVertragingsrente() : float
    {
        return $this->BetaaldeVertragingsrente;
    }

    /**
     * @param float $BetaaldeVertragingsrente
     * @return static
     */
    public function withBetaaldeVertragingsrente(float $BetaaldeVertragingsrente) : static
    {
        $new = clone $this;
        $new->BetaaldeVertragingsrente = $BetaaldeVertragingsrente;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeBoeterente() : float
    {
        return $this->BetaaldeBoeterente;
    }

    /**
     * @param float $BetaaldeBoeterente
     * @return static
     */
    public function withBetaaldeBoeterente(float $BetaaldeBoeterente) : static
    {
        $new = clone $this;
        $new->BetaaldeBoeterente = $BetaaldeBoeterente;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenVVA() : float
    {
        return $this->KostenVVA;
    }

    /**
     * @param float $KostenVVA
     * @return static
     */
    public function withKostenVVA(float $KostenVVA) : static
    {
        $new = clone $this;
        $new->KostenVVA = $KostenVVA;

        return $new;
    }

    /**
     * @return float
     */
    public function getVoorstand() : float
    {
        return $this->Voorstand;
    }

    /**
     * @param float $Voorstand
     * @return static
     */
    public function withVoorstand(float $Voorstand) : static
    {
        $new = clone $this;
        $new->Voorstand = $Voorstand;

        return $new;
    }

    /**
     * @return string
     */
    public function getLeningSoort() : string
    {
        return $this->LeningSoort;
    }

    /**
     * @param string $LeningSoort
     * @return static
     */
    public function withLeningSoort(string $LeningSoort) : static
    {
        $new = clone $this;
        $new->LeningSoort = $LeningSoort;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandPercentage() : float
    {
        return $this->MaandPercentage;
    }

    /**
     * @param float $MaandPercentage
     * @return static
     */
    public function withMaandPercentage(float $MaandPercentage) : static
    {
        $new = clone $this;
        $new->MaandPercentage = $MaandPercentage;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeKredietvergoeding() : float
    {
        return $this->BetaaldeKredietvergoeding;
    }

    /**
     * @param float $BetaaldeKredietvergoeding
     * @return static
     */
    public function withBetaaldeKredietvergoeding(float $BetaaldeKredietvergoeding) : static
    {
        $new = clone $this;
        $new->BetaaldeKredietvergoeding = $BetaaldeKredietvergoeding;

        return $new;
    }
}


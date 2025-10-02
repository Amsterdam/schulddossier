<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TPL implements RequestInterface
{

    /**
     * @var TPLHeader
     */
    private $InfoHeader;

    /**
     * @var int
     */
    private $Opdrachtgever;

    /**
     * @var int
     */
    private $OpdrachtgeverContact;

    /**
     * @var DateTimeInterface
     */
    private $TheoEinddatum;

    /**
     * @var float
     */
    private $NettoKredietsom;

    /**
     * @var float
     */
    private $BrutoKredietsom;

    /**
     * @var float
     */
    private $Kredietvergoeding;

    /**
     * @var float
     */
    private $MaandTermijn;

    /**
     * @var float
     */
    private $KwartaalTermijn;

    /**
     * @var int
     */
    private $AantalMaanden;

    /**
     * @var int
     */
    private $AantalKwartalen;

    /**
     * @var DateTimeInterface
     */
    private $DatumEersteAflossing;

    /**
     * @var float
     */
    private $Betaald;

    /**
     * @var float
     */
    private $SaldoLening;

    /**
     * @var float
     */
    private $Achterstand;

    /**
     * @var int
     */
    private $ResterendeLooptijd;

    /**
     * @var float
     */
    private $EffectiefJaarpercentage;

    /**
     * @var DateTimeInterface
     */
    private $DatumLaatsteBetaling;

    /**
     * @var float
     */
    private $BedragLaatsteBetaling;

    /**
     * @var float
     */
    private $VolledigVervroegdeAflossing;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var int
     */
    private $MedelenerCode;

    /**
     * @var float
     */
    private $OpenstaandeVertragingsrente;

    /**
     * @var float
     */
    private $OpenstaandeKredietvergoeding;

    /**
     * @var float
     */
    private $BetaaldeVertragingsrente;

    /**
     * @var float
     */
    private $BetaaldeBoeterente;

    /**
     * @var float
     */
    private $KostenVVA;

    /**
     * @var float
     */
    private $Voorstand;

    /**
     * @var string
     */
    private $LeningSoort;

    /**
     * @var float
     */
    private $MaandPercentage;

    /**
     * @var float
     */
    private $BetaaldeKredietvergoeding;

    /**
     * Constructor
     *
     * @var TPLHeader $InfoHeader
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     * @var DateTimeInterface $TheoEinddatum
     * @var float $NettoKredietsom
     * @var float $BrutoKredietsom
     * @var float $Kredietvergoeding
     * @var float $MaandTermijn
     * @var float $KwartaalTermijn
     * @var int $AantalMaanden
     * @var int $AantalKwartalen
     * @var DateTimeInterface $DatumEersteAflossing
     * @var float $Betaald
     * @var float $SaldoLening
     * @var float $Achterstand
     * @var int $ResterendeLooptijd
     * @var float $EffectiefJaarpercentage
     * @var DateTimeInterface $DatumLaatsteBetaling
     * @var float $BedragLaatsteBetaling
     * @var float $VolledigVervroegdeAflossing
     * @var string $Medewerker
     * @var int $MedelenerCode
     * @var float $OpenstaandeVertragingsrente
     * @var float $OpenstaandeKredietvergoeding
     * @var float $BetaaldeVertragingsrente
     * @var float $BetaaldeBoeterente
     * @var float $KostenVVA
     * @var float $Voorstand
     * @var string $LeningSoort
     * @var float $MaandPercentage
     * @var float $BetaaldeKredietvergoeding
     */
    public function __construct($InfoHeader, $Opdrachtgever, $OpdrachtgeverContact, $TheoEinddatum, $NettoKredietsom, $BrutoKredietsom, $Kredietvergoeding, $MaandTermijn, $KwartaalTermijn, $AantalMaanden, $AantalKwartalen, $DatumEersteAflossing, $Betaald, $SaldoLening, $Achterstand, $ResterendeLooptijd, $EffectiefJaarpercentage, $DatumLaatsteBetaling, $BedragLaatsteBetaling, $VolledigVervroegdeAflossing, $Medewerker, $MedelenerCode, $OpenstaandeVertragingsrente, $OpenstaandeKredietvergoeding, $BetaaldeVertragingsrente, $BetaaldeBoeterente, $KostenVVA, $Voorstand, $LeningSoort, $MaandPercentage, $BetaaldeKredietvergoeding)
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
     * @return TPLHeader
     */
    public function getInfoHeader()
    {
        return $this->InfoHeader;
    }

    /**
     * @param TPLHeader $InfoHeader
     * @return TPL
     */
    public function withInfoHeader($InfoHeader)
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

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
     * @return TPL
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
     * @return TPL
     */
    public function withOpdrachtgeverContact($OpdrachtgeverContact)
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getTheoEinddatum()
    {
        return $this->TheoEinddatum;
    }

    /**
     * @param DateTimeInterface $TheoEinddatum
     * @return TPL
     */
    public function withTheoEinddatum($TheoEinddatum)
    {
        $new = clone $this;
        $new->TheoEinddatum = $TheoEinddatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getNettoKredietsom()
    {
        return $this->NettoKredietsom;
    }

    /**
     * @param float $NettoKredietsom
     * @return TPL
     */
    public function withNettoKredietsom($NettoKredietsom)
    {
        $new = clone $this;
        $new->NettoKredietsom = $NettoKredietsom;

        return $new;
    }

    /**
     * @return float
     */
    public function getBrutoKredietsom()
    {
        return $this->BrutoKredietsom;
    }

    /**
     * @param float $BrutoKredietsom
     * @return TPL
     */
    public function withBrutoKredietsom($BrutoKredietsom)
    {
        $new = clone $this;
        $new->BrutoKredietsom = $BrutoKredietsom;

        return $new;
    }

    /**
     * @return float
     */
    public function getKredietvergoeding()
    {
        return $this->Kredietvergoeding;
    }

    /**
     * @param float $Kredietvergoeding
     * @return TPL
     */
    public function withKredietvergoeding($Kredietvergoeding)
    {
        $new = clone $this;
        $new->Kredietvergoeding = $Kredietvergoeding;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandTermijn()
    {
        return $this->MaandTermijn;
    }

    /**
     * @param float $MaandTermijn
     * @return TPL
     */
    public function withMaandTermijn($MaandTermijn)
    {
        $new = clone $this;
        $new->MaandTermijn = $MaandTermijn;

        return $new;
    }

    /**
     * @return float
     */
    public function getKwartaalTermijn()
    {
        return $this->KwartaalTermijn;
    }

    /**
     * @param float $KwartaalTermijn
     * @return TPL
     */
    public function withKwartaalTermijn($KwartaalTermijn)
    {
        $new = clone $this;
        $new->KwartaalTermijn = $KwartaalTermijn;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalMaanden()
    {
        return $this->AantalMaanden;
    }

    /**
     * @param int $AantalMaanden
     * @return TPL
     */
    public function withAantalMaanden($AantalMaanden)
    {
        $new = clone $this;
        $new->AantalMaanden = $AantalMaanden;

        return $new;
    }

    /**
     * @return int
     */
    public function getAantalKwartalen()
    {
        return $this->AantalKwartalen;
    }

    /**
     * @param int $AantalKwartalen
     * @return TPL
     */
    public function withAantalKwartalen($AantalKwartalen)
    {
        $new = clone $this;
        $new->AantalKwartalen = $AantalKwartalen;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDatumEersteAflossing()
    {
        return $this->DatumEersteAflossing;
    }

    /**
     * @param DateTimeInterface $DatumEersteAflossing
     * @return TPL
     */
    public function withDatumEersteAflossing($DatumEersteAflossing)
    {
        $new = clone $this;
        $new->DatumEersteAflossing = $DatumEersteAflossing;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaald()
    {
        return $this->Betaald;
    }

    /**
     * @param float $Betaald
     * @return TPL
     */
    public function withBetaald($Betaald)
    {
        $new = clone $this;
        $new->Betaald = $Betaald;

        return $new;
    }

    /**
     * @return float
     */
    public function getSaldoLening()
    {
        return $this->SaldoLening;
    }

    /**
     * @param float $SaldoLening
     * @return TPL
     */
    public function withSaldoLening($SaldoLening)
    {
        $new = clone $this;
        $new->SaldoLening = $SaldoLening;

        return $new;
    }

    /**
     * @return float
     */
    public function getAchterstand()
    {
        return $this->Achterstand;
    }

    /**
     * @param float $Achterstand
     * @return TPL
     */
    public function withAchterstand($Achterstand)
    {
        $new = clone $this;
        $new->Achterstand = $Achterstand;

        return $new;
    }

    /**
     * @return int
     */
    public function getResterendeLooptijd()
    {
        return $this->ResterendeLooptijd;
    }

    /**
     * @param int $ResterendeLooptijd
     * @return TPL
     */
    public function withResterendeLooptijd($ResterendeLooptijd)
    {
        $new = clone $this;
        $new->ResterendeLooptijd = $ResterendeLooptijd;

        return $new;
    }

    /**
     * @return float
     */
    public function getEffectiefJaarpercentage()
    {
        return $this->EffectiefJaarpercentage;
    }

    /**
     * @param float $EffectiefJaarpercentage
     * @return TPL
     */
    public function withEffectiefJaarpercentage($EffectiefJaarpercentage)
    {
        $new = clone $this;
        $new->EffectiefJaarpercentage = $EffectiefJaarpercentage;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getDatumLaatsteBetaling()
    {
        return $this->DatumLaatsteBetaling;
    }

    /**
     * @param DateTimeInterface $DatumLaatsteBetaling
     * @return TPL
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
     * @return TPL
     */
    public function withBedragLaatsteBetaling($BedragLaatsteBetaling)
    {
        $new = clone $this;
        $new->BedragLaatsteBetaling = $BedragLaatsteBetaling;

        return $new;
    }

    /**
     * @return float
     */
    public function getVolledigVervroegdeAflossing()
    {
        return $this->VolledigVervroegdeAflossing;
    }

    /**
     * @param float $VolledigVervroegdeAflossing
     * @return TPL
     */
    public function withVolledigVervroegdeAflossing($VolledigVervroegdeAflossing)
    {
        $new = clone $this;
        $new->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;

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
     * @return TPL
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
    public function getMedelenerCode()
    {
        return $this->MedelenerCode;
    }

    /**
     * @param int $MedelenerCode
     * @return TPL
     */
    public function withMedelenerCode($MedelenerCode)
    {
        $new = clone $this;
        $new->MedelenerCode = $MedelenerCode;

        return $new;
    }

    /**
     * @return float
     */
    public function getOpenstaandeVertragingsrente()
    {
        return $this->OpenstaandeVertragingsrente;
    }

    /**
     * @param float $OpenstaandeVertragingsrente
     * @return TPL
     */
    public function withOpenstaandeVertragingsrente($OpenstaandeVertragingsrente)
    {
        $new = clone $this;
        $new->OpenstaandeVertragingsrente = $OpenstaandeVertragingsrente;

        return $new;
    }

    /**
     * @return float
     */
    public function getOpenstaandeKredietvergoeding()
    {
        return $this->OpenstaandeKredietvergoeding;
    }

    /**
     * @param float $OpenstaandeKredietvergoeding
     * @return TPL
     */
    public function withOpenstaandeKredietvergoeding($OpenstaandeKredietvergoeding)
    {
        $new = clone $this;
        $new->OpenstaandeKredietvergoeding = $OpenstaandeKredietvergoeding;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeVertragingsrente()
    {
        return $this->BetaaldeVertragingsrente;
    }

    /**
     * @param float $BetaaldeVertragingsrente
     * @return TPL
     */
    public function withBetaaldeVertragingsrente($BetaaldeVertragingsrente)
    {
        $new = clone $this;
        $new->BetaaldeVertragingsrente = $BetaaldeVertragingsrente;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeBoeterente()
    {
        return $this->BetaaldeBoeterente;
    }

    /**
     * @param float $BetaaldeBoeterente
     * @return TPL
     */
    public function withBetaaldeBoeterente($BetaaldeBoeterente)
    {
        $new = clone $this;
        $new->BetaaldeBoeterente = $BetaaldeBoeterente;

        return $new;
    }

    /**
     * @return float
     */
    public function getKostenVVA()
    {
        return $this->KostenVVA;
    }

    /**
     * @param float $KostenVVA
     * @return TPL
     */
    public function withKostenVVA($KostenVVA)
    {
        $new = clone $this;
        $new->KostenVVA = $KostenVVA;

        return $new;
    }

    /**
     * @return float
     */
    public function getVoorstand()
    {
        return $this->Voorstand;
    }

    /**
     * @param float $Voorstand
     * @return TPL
     */
    public function withVoorstand($Voorstand)
    {
        $new = clone $this;
        $new->Voorstand = $Voorstand;

        return $new;
    }

    /**
     * @return string
     */
    public function getLeningSoort()
    {
        return $this->LeningSoort;
    }

    /**
     * @param string $LeningSoort
     * @return TPL
     */
    public function withLeningSoort($LeningSoort)
    {
        $new = clone $this;
        $new->LeningSoort = $LeningSoort;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaandPercentage()
    {
        return $this->MaandPercentage;
    }

    /**
     * @param float $MaandPercentage
     * @return TPL
     */
    public function withMaandPercentage($MaandPercentage)
    {
        $new = clone $this;
        $new->MaandPercentage = $MaandPercentage;

        return $new;
    }

    /**
     * @return float
     */
    public function getBetaaldeKredietvergoeding()
    {
        return $this->BetaaldeKredietvergoeding;
    }

    /**
     * @param float $BetaaldeKredietvergoeding
     * @return TPL
     */
    public function withBetaaldeKredietvergoeding($BetaaldeKredietvergoeding)
    {
        $new = clone $this;
        $new->BetaaldeKredietvergoeding = $BetaaldeKredietvergoeding;

        return $new;
    }


}


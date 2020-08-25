<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPL
{

    /**
     * @var TPLHeader $InfoHeader
     */
    protected $InfoHeader = null;

    /**
     * @var int $Opdrachtgever
     */
    protected $Opdrachtgever = null;

    /**
     * @var int $OpdrachtgeverContact
     */
    protected $OpdrachtgeverContact = null;

    /**
     * @var \DateTime $TheoEinddatum
     */
    protected $TheoEinddatum = null;

    /**
     * @var float $NettoKredietsom
     */
    protected $NettoKredietsom = null;

    /**
     * @var float $BrutoKredietsom
     */
    protected $BrutoKredietsom = null;

    /**
     * @var float $Kredietvergoeding
     */
    protected $Kredietvergoeding = null;

    /**
     * @var float $MaandTermijn
     */
    protected $MaandTermijn = null;

    /**
     * @var float $KwartaalTermijn
     */
    protected $KwartaalTermijn = null;

    /**
     * @var int $AantalMaanden
     */
    protected $AantalMaanden = null;

    /**
     * @var int $AantalKwartalen
     */
    protected $AantalKwartalen = null;

    /**
     * @var \DateTime $DatumEersteAflossing
     */
    protected $DatumEersteAflossing = null;

    /**
     * @var float $Betaald
     */
    protected $Betaald = null;

    /**
     * @var float $SaldoLening
     */
    protected $SaldoLening = null;

    /**
     * @var float $Achterstand
     */
    protected $Achterstand = null;

    /**
     * @var int $ResterendeLooptijd
     */
    protected $ResterendeLooptijd = null;

    /**
     * @var float $EffectiefJaarpercentage
     */
    protected $EffectiefJaarpercentage = null;

    /**
     * @var \DateTime $DatumLaatsteBetaling
     */
    protected $DatumLaatsteBetaling = null;

    /**
     * @var float $BedragLaatsteBetaling
     */
    protected $BedragLaatsteBetaling = null;

    /**
     * @var float $VolledigVervroegdeAflossing
     */
    protected $VolledigVervroegdeAflossing = null;

    /**
     * @var string $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var int $MedelenerCode
     */
    protected $MedelenerCode = null;

    /**
     * @var float $OpenstaandeVertragingsrente
     */
    protected $OpenstaandeVertragingsrente = null;

    /**
     * @var float $OpenstaandeKredietvergoeding
     */
    protected $OpenstaandeKredietvergoeding = null;

    /**
     * @var float $BetaaldeVertragingsrente
     */
    protected $BetaaldeVertragingsrente = null;

    /**
     * @var float $BetaaldeBoeterente
     */
    protected $BetaaldeBoeterente = null;

    /**
     * @var float $KostenVVA
     */
    protected $KostenVVA = null;

    /**
     * @var float $Voorstand
     */
    protected $Voorstand = null;

    /**
     * @var string $LeningSoort
     */
    protected $LeningSoort = null;

    /**
     * @var float $MaandPercentage
     */
    protected $MaandPercentage = null;

    /**
     * @var float $BetaaldeKredietvergoeding
     */
    protected $BetaaldeKredietvergoeding = null;

    /**
     * @param TPLHeader $InfoHeader
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param \DateTime $TheoEinddatum
     * @param float $NettoKredietsom
     * @param float $BrutoKredietsom
     * @param float $Kredietvergoeding
     * @param float $MaandTermijn
     * @param float $KwartaalTermijn
     * @param int $AantalMaanden
     * @param int $AantalKwartalen
     * @param \DateTime $DatumEersteAflossing
     * @param float $Betaald
     * @param float $SaldoLening
     * @param float $Achterstand
     * @param int $ResterendeLooptijd
     * @param float $EffectiefJaarpercentage
     * @param \DateTime $DatumLaatsteBetaling
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
    public function __construct($InfoHeader, $Opdrachtgever, $OpdrachtgeverContact, \DateTime $TheoEinddatum, $NettoKredietsom, $BrutoKredietsom, $Kredietvergoeding, $MaandTermijn, $KwartaalTermijn, $AantalMaanden, $AantalKwartalen, \DateTime $DatumEersteAflossing, $Betaald, $SaldoLening, $Achterstand, $ResterendeLooptijd, $EffectiefJaarpercentage, \DateTime $DatumLaatsteBetaling, $BedragLaatsteBetaling, $VolledigVervroegdeAflossing, $Medewerker, $MedelenerCode, $OpenstaandeVertragingsrente, $OpenstaandeKredietvergoeding, $BetaaldeVertragingsrente, $BetaaldeBoeterente, $KostenVVA, $Voorstand, $LeningSoort, $MaandPercentage, $BetaaldeKredietvergoeding)
    {
      $this->InfoHeader = $InfoHeader;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      $this->TheoEinddatum = $TheoEinddatum->format(\DateTime::ATOM);
      $this->NettoKredietsom = $NettoKredietsom;
      $this->BrutoKredietsom = $BrutoKredietsom;
      $this->Kredietvergoeding = $Kredietvergoeding;
      $this->MaandTermijn = $MaandTermijn;
      $this->KwartaalTermijn = $KwartaalTermijn;
      $this->AantalMaanden = $AantalMaanden;
      $this->AantalKwartalen = $AantalKwartalen;
      $this->DatumEersteAflossing = $DatumEersteAflossing->format(\DateTime::ATOM);
      $this->Betaald = $Betaald;
      $this->SaldoLening = $SaldoLening;
      $this->Achterstand = $Achterstand;
      $this->ResterendeLooptijd = $ResterendeLooptijd;
      $this->EffectiefJaarpercentage = $EffectiefJaarpercentage;
      $this->DatumLaatsteBetaling = $DatumLaatsteBetaling->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setInfoHeader($InfoHeader)
    {
      $this->InfoHeader = $InfoHeader;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setOpdrachtgever($Opdrachtgever)
    {
      $this->Opdrachtgever = $Opdrachtgever;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setOpdrachtgeverContact($OpdrachtgeverContact)
    {
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTheoEinddatum()
    {
      if ($this->TheoEinddatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->TheoEinddatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $TheoEinddatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setTheoEinddatum(\DateTime $TheoEinddatum)
    {
      $this->TheoEinddatum = $TheoEinddatum->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setNettoKredietsom($NettoKredietsom)
    {
      $this->NettoKredietsom = $NettoKredietsom;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setBrutoKredietsom($BrutoKredietsom)
    {
      $this->BrutoKredietsom = $BrutoKredietsom;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setKredietvergoeding($Kredietvergoeding)
    {
      $this->Kredietvergoeding = $Kredietvergoeding;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setMaandTermijn($MaandTermijn)
    {
      $this->MaandTermijn = $MaandTermijn;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setKwartaalTermijn($KwartaalTermijn)
    {
      $this->KwartaalTermijn = $KwartaalTermijn;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setAantalMaanden($AantalMaanden)
    {
      $this->AantalMaanden = $AantalMaanden;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setAantalKwartalen($AantalKwartalen)
    {
      $this->AantalKwartalen = $AantalKwartalen;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumEersteAflossing()
    {
      if ($this->DatumEersteAflossing == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumEersteAflossing);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumEersteAflossing
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setDatumEersteAflossing(\DateTime $DatumEersteAflossing)
    {
      $this->DatumEersteAflossing = $DatumEersteAflossing->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setBetaald($Betaald)
    {
      $this->Betaald = $Betaald;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setSaldoLening($SaldoLening)
    {
      $this->SaldoLening = $SaldoLening;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setAchterstand($Achterstand)
    {
      $this->Achterstand = $Achterstand;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setResterendeLooptijd($ResterendeLooptijd)
    {
      $this->ResterendeLooptijd = $ResterendeLooptijd;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setEffectiefJaarpercentage($EffectiefJaarpercentage)
    {
      $this->EffectiefJaarpercentage = $EffectiefJaarpercentage;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumLaatsteBetaling()
    {
      if ($this->DatumLaatsteBetaling == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumLaatsteBetaling);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumLaatsteBetaling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setDatumLaatsteBetaling(\DateTime $DatumLaatsteBetaling)
    {
      $this->DatumLaatsteBetaling = $DatumLaatsteBetaling->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setBedragLaatsteBetaling($BedragLaatsteBetaling)
    {
      $this->BedragLaatsteBetaling = $BedragLaatsteBetaling;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setVolledigVervroegdeAflossing($VolledigVervroegdeAflossing)
    {
      $this->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setMedelenerCode($MedelenerCode)
    {
      $this->MedelenerCode = $MedelenerCode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setOpenstaandeVertragingsrente($OpenstaandeVertragingsrente)
    {
      $this->OpenstaandeVertragingsrente = $OpenstaandeVertragingsrente;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setOpenstaandeKredietvergoeding($OpenstaandeKredietvergoeding)
    {
      $this->OpenstaandeKredietvergoeding = $OpenstaandeKredietvergoeding;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setBetaaldeVertragingsrente($BetaaldeVertragingsrente)
    {
      $this->BetaaldeVertragingsrente = $BetaaldeVertragingsrente;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setBetaaldeBoeterente($BetaaldeBoeterente)
    {
      $this->BetaaldeBoeterente = $BetaaldeBoeterente;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setKostenVVA($KostenVVA)
    {
      $this->KostenVVA = $KostenVVA;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setVoorstand($Voorstand)
    {
      $this->Voorstand = $Voorstand;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setLeningSoort($LeningSoort)
    {
      $this->LeningSoort = $LeningSoort;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setMaandPercentage($MaandPercentage)
    {
      $this->MaandPercentage = $MaandPercentage;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPL
     */
    public function setBetaaldeKredietvergoeding($BetaaldeKredietvergoeding)
    {
      $this->BetaaldeKredietvergoeding = $BetaaldeKredietvergoeding;
      return $this;
    }

}

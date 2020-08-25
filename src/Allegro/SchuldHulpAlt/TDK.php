<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TDK
{

    /**
     * @var TDKHeader $InfoHeader
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
     * @var float $Contractlimiet
     */
    protected $Contractlimiet = null;

    /**
     * @var float $MaandTermijn
     */
    protected $MaandTermijn = null;

    /**
     * @var int $TheoretischeLooptijd
     */
    protected $TheoretischeLooptijd = null;

    /**
     * @var \DateTime $DatumEersteAflossing
     */
    protected $DatumEersteAflossing = null;

    /**
     * @var float $Saldo
     */
    protected $Saldo = null;

    /**
     * @var float $Achterstand
     */
    protected $Achterstand = null;

    /**
     * @var float $VrijOpneembaar
     */
    protected $VrijOpneembaar = null;

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
     * @var float $Maandpercentage
     */
    protected $Maandpercentage = null;

    /**
     * @param TDKHeader $InfoHeader
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param float $Contractlimiet
     * @param float $MaandTermijn
     * @param int $TheoretischeLooptijd
     * @param \DateTime $DatumEersteAflossing
     * @param float $Saldo
     * @param float $Achterstand
     * @param float $VrijOpneembaar
     * @param float $EffectiefJaarpercentage
     * @param \DateTime $DatumLaatsteBetaling
     * @param float $BedragLaatsteBetaling
     * @param float $VolledigVervroegdeAflossing
     * @param string $Medewerker
     * @param int $MedelenerCode
     * @param float $Maandpercentage
     */
    public function __construct($InfoHeader, $Opdrachtgever, $OpdrachtgeverContact, $Contractlimiet, $MaandTermijn, $TheoretischeLooptijd, \DateTime $DatumEersteAflossing, $Saldo, $Achterstand, $VrijOpneembaar, $EffectiefJaarpercentage, \DateTime $DatumLaatsteBetaling, $BedragLaatsteBetaling, $VolledigVervroegdeAflossing, $Medewerker, $MedelenerCode, $Maandpercentage)
    {
      $this->InfoHeader = $InfoHeader;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      $this->Contractlimiet = $Contractlimiet;
      $this->MaandTermijn = $MaandTermijn;
      $this->TheoretischeLooptijd = $TheoretischeLooptijd;
      $this->DatumEersteAflossing = $DatumEersteAflossing->format(\DateTime::ATOM);
      $this->Saldo = $Saldo;
      $this->Achterstand = $Achterstand;
      $this->VrijOpneembaar = $VrijOpneembaar;
      $this->EffectiefJaarpercentage = $EffectiefJaarpercentage;
      $this->DatumLaatsteBetaling = $DatumLaatsteBetaling->format(\DateTime::ATOM);
      $this->BedragLaatsteBetaling = $BedragLaatsteBetaling;
      $this->VolledigVervroegdeAflossing = $VolledigVervroegdeAflossing;
      $this->Medewerker = $Medewerker;
      $this->MedelenerCode = $MedelenerCode;
      $this->Maandpercentage = $Maandpercentage;
    }

    /**
     * @return TDKHeader
     */
    public function getInfoHeader()
    {
      return $this->InfoHeader;
    }

    /**
     * @param TDKHeader $InfoHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setOpdrachtgeverContact($OpdrachtgeverContact)
    {
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      return $this;
    }

    /**
     * @return float
     */
    public function getContractlimiet()
    {
      return $this->Contractlimiet;
    }

    /**
     * @param float $Contractlimiet
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setContractlimiet($Contractlimiet)
    {
      $this->Contractlimiet = $Contractlimiet;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setMaandTermijn($MaandTermijn)
    {
      $this->MaandTermijn = $MaandTermijn;
      return $this;
    }

    /**
     * @return int
     */
    public function getTheoretischeLooptijd()
    {
      return $this->TheoretischeLooptijd;
    }

    /**
     * @param int $TheoretischeLooptijd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setTheoretischeLooptijd($TheoretischeLooptijd)
    {
      $this->TheoretischeLooptijd = $TheoretischeLooptijd;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setDatumEersteAflossing(\DateTime $DatumEersteAflossing)
    {
      $this->DatumEersteAflossing = $DatumEersteAflossing->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return float
     */
    public function getSaldo()
    {
      return $this->Saldo;
    }

    /**
     * @param float $Saldo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setSaldo($Saldo)
    {
      $this->Saldo = $Saldo;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setAchterstand($Achterstand)
    {
      $this->Achterstand = $Achterstand;
      return $this;
    }

    /**
     * @return float
     */
    public function getVrijOpneembaar()
    {
      return $this->VrijOpneembaar;
    }

    /**
     * @param float $VrijOpneembaar
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setVrijOpneembaar($VrijOpneembaar)
    {
      $this->VrijOpneembaar = $VrijOpneembaar;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setMedelenerCode($MedelenerCode)
    {
      $this->MedelenerCode = $MedelenerCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getMaandpercentage()
    {
      return $this->Maandpercentage;
    }

    /**
     * @param float $Maandpercentage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDK
     */
    public function setMaandpercentage($Maandpercentage)
    {
      $this->Maandpercentage = $Maandpercentage;
      return $this;
    }

}

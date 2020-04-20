<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TCasusPVA
{

    /**
     * @var int $VolgnummerPVA
     */
    protected $VolgnummerPVA = null;

    /**
     * @var string $MedewerkerPVA
     */
    protected $MedewerkerPVA = null;

    /**
     * @var string $TeamPVA
     */
    protected $TeamPVA = null;

    /**
     * @var \DateTime $DatumPVA
     */
    protected $DatumPVA = null;

    /**
     * @var \DateTime $DatumPVAEinde
     */
    protected $DatumPVAEinde = null;

    /**
     * @var \DateTime $DatumFiattering
     */
    protected $DatumFiattering = null;

    /**
     * @var \DateTime $DatumFiatteringEinde
     */
    protected $DatumFiatteringEinde = null;

    /**
     * @var boolean $Gefiatteerd
     */
    protected $Gefiatteerd = null;

    /**
     * @var CasusPVAProductArray $Producten
     */
    protected $Producten = null;

    /**
     * @param int $VolgnummerPVA
     * @param string $MedewerkerPVA
     * @param string $TeamPVA
     * @param \DateTime $DatumPVA
     * @param \DateTime $DatumPVAEinde
     * @param \DateTime $DatumFiattering
     * @param \DateTime $DatumFiatteringEinde
     * @param boolean $Gefiatteerd
     * @param CasusPVAProductArray $Producten
     */
    public function __construct($VolgnummerPVA, $MedewerkerPVA, $TeamPVA, \DateTime $DatumPVA, \DateTime $DatumPVAEinde, \DateTime $DatumFiattering, \DateTime $DatumFiatteringEinde, $Gefiatteerd, $Producten)
    {
      $this->VolgnummerPVA = $VolgnummerPVA;
      $this->MedewerkerPVA = $MedewerkerPVA;
      $this->TeamPVA = $TeamPVA;
      $this->DatumPVA = $DatumPVA->format(\DateTime::ATOM);
      $this->DatumPVAEinde = $DatumPVAEinde->format(\DateTime::ATOM);
      $this->DatumFiattering = $DatumFiattering->format(\DateTime::ATOM);
      $this->DatumFiatteringEinde = $DatumFiatteringEinde->format(\DateTime::ATOM);
      $this->Gefiatteerd = $Gefiatteerd;
      $this->Producten = $Producten;
    }

    /**
     * @return int
     */
    public function getVolgnummerPVA()
    {
      return $this->VolgnummerPVA;
    }

    /**
     * @param int $VolgnummerPVA
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setVolgnummerPVA($VolgnummerPVA)
    {
      $this->VolgnummerPVA = $VolgnummerPVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getMedewerkerPVA()
    {
      return $this->MedewerkerPVA;
    }

    /**
     * @param string $MedewerkerPVA
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setMedewerkerPVA($MedewerkerPVA)
    {
      $this->MedewerkerPVA = $MedewerkerPVA;
      return $this;
    }

    /**
     * @return string
     */
    public function getTeamPVA()
    {
      return $this->TeamPVA;
    }

    /**
     * @param string $TeamPVA
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setTeamPVA($TeamPVA)
    {
      $this->TeamPVA = $TeamPVA;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumPVA()
    {
      if ($this->DatumPVA == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumPVA);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumPVA
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setDatumPVA(\DateTime $DatumPVA)
    {
      $this->DatumPVA = $DatumPVA->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumPVAEinde()
    {
      if ($this->DatumPVAEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumPVAEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumPVAEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setDatumPVAEinde(\DateTime $DatumPVAEinde)
    {
      $this->DatumPVAEinde = $DatumPVAEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumFiattering()
    {
      if ($this->DatumFiattering == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumFiattering);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumFiattering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setDatumFiattering(\DateTime $DatumFiattering)
    {
      $this->DatumFiattering = $DatumFiattering->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumFiatteringEinde()
    {
      if ($this->DatumFiatteringEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumFiatteringEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumFiatteringEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setDatumFiatteringEinde(\DateTime $DatumFiatteringEinde)
    {
      $this->DatumFiatteringEinde = $DatumFiatteringEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGefiatteerd()
    {
      return $this->Gefiatteerd;
    }

    /**
     * @param boolean $Gefiatteerd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setGefiatteerd($Gefiatteerd)
    {
      $this->Gefiatteerd = $Gefiatteerd;
      return $this;
    }

    /**
     * @return CasusPVAProductArray
     */
    public function getProducten()
    {
      return $this->Producten;
    }

    /**
     * @param CasusPVAProductArray $Producten
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVA
     */
    public function setProducten($Producten)
    {
      $this->Producten = $Producten;
      return $this;
    }

}

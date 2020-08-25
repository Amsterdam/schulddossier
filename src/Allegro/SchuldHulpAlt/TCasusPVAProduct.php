<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TCasusPVAProduct
{

    /**
     * @var string $Naam
     */
    protected $Naam = null;

    /**
     * @var int $IDAanvraag
     */
    protected $IDAanvraag = null;

    /**
     * @var boolean $Geactiveerd
     */
    protected $Geactiveerd = null;

    /**
     * @var \DateTime $DatumActivering
     */
    protected $DatumActivering = null;

    /**
     * @param string $Naam
     * @param int $IDAanvraag
     * @param boolean $Geactiveerd
     * @param \DateTime $DatumActivering
     */
    public function __construct($Naam, $IDAanvraag, $Geactiveerd, \DateTime $DatumActivering)
    {
      $this->Naam = $Naam;
      $this->IDAanvraag = $IDAanvraag;
      $this->Geactiveerd = $Geactiveerd;
      $this->DatumActivering = $DatumActivering->format(\DateTime::ATOM);
    }

    /**
     * @return string
     */
    public function getNaam()
    {
      return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVAProduct
     */
    public function setNaam($Naam)
    {
      $this->Naam = $Naam;
      return $this;
    }

    /**
     * @return int
     */
    public function getIDAanvraag()
    {
      return $this->IDAanvraag;
    }

    /**
     * @param int $IDAanvraag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVAProduct
     */
    public function setIDAanvraag($IDAanvraag)
    {
      $this->IDAanvraag = $IDAanvraag;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getGeactiveerd()
    {
      return $this->Geactiveerd;
    }

    /**
     * @param boolean $Geactiveerd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVAProduct
     */
    public function setGeactiveerd($Geactiveerd)
    {
      $this->Geactiveerd = $Geactiveerd;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumActivering()
    {
      if ($this->DatumActivering == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumActivering);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumActivering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusPVAProduct
     */
    public function setDatumActivering(\DateTime $DatumActivering)
    {
      $this->DatumActivering = $DatumActivering->format(\DateTime::ATOM);
      return $this;
    }

}

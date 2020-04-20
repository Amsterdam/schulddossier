<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBRBegunstigde
{

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Voorvoegsels
     */
    protected $Voorvoegsels = null;

    /**
     * @var string $Voorletters
     */
    protected $Voorletters = null;

    /**
     * @var string $PlaatsnaamBezoekadres
     */
    protected $PlaatsnaamBezoekadres = null;

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var eSoortOpdracht $OpdrachtSoortKeuze
     */
    protected $OpdrachtSoortKeuze = null;

    /**
     * @var boolean $KeuzeReservering
     */
    protected $KeuzeReservering = null;

    /**
     * @var string $Betaalwijze
     */
    protected $Betaalwijze = null;

    /**
     * @var RekeningnummerArray $Rekeningnummers
     */
    protected $Rekeningnummers = null;

    /**
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Voorletters
     * @param string $PlaatsnaamBezoekadres
     * @param int $Relatiecode
     * @param eSoortOpdracht $OpdrachtSoortKeuze
     * @param boolean $KeuzeReservering
     * @param string $Betaalwijze
     * @param RekeningnummerArray $Rekeningnummers
     */
    public function __construct($Achternaam, $Voorvoegsels, $Voorletters, $PlaatsnaamBezoekadres, $Relatiecode, $OpdrachtSoortKeuze, $KeuzeReservering, $Betaalwijze, $Rekeningnummers)
    {
      $this->Achternaam = $Achternaam;
      $this->Voorvoegsels = $Voorvoegsels;
      $this->Voorletters = $Voorletters;
      $this->PlaatsnaamBezoekadres = $PlaatsnaamBezoekadres;
      $this->Relatiecode = $Relatiecode;
      $this->OpdrachtSoortKeuze = $OpdrachtSoortKeuze;
      $this->KeuzeReservering = $KeuzeReservering;
      $this->Betaalwijze = $Betaalwijze;
      $this->Rekeningnummers = $Rekeningnummers;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
      return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setAchternaam($Achternaam)
    {
      $this->Achternaam = $Achternaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels()
    {
      return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setVoorvoegsels($Voorvoegsels)
    {
      $this->Voorvoegsels = $Voorvoegsels;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoorletters()
    {
      return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setVoorletters($Voorletters)
    {
      $this->Voorletters = $Voorletters;
      return $this;
    }

    /**
     * @return string
     */
    public function getPlaatsnaamBezoekadres()
    {
      return $this->PlaatsnaamBezoekadres;
    }

    /**
     * @param string $PlaatsnaamBezoekadres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setPlaatsnaamBezoekadres($PlaatsnaamBezoekadres)
    {
      $this->PlaatsnaamBezoekadres = $PlaatsnaamBezoekadres;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
      return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
    }

    /**
     * @return eSoortOpdracht
     */
    public function getOpdrachtSoortKeuze()
    {
      return $this->OpdrachtSoortKeuze;
    }

    /**
     * @param eSoortOpdracht $OpdrachtSoortKeuze
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setOpdrachtSoortKeuze($OpdrachtSoortKeuze)
    {
      $this->OpdrachtSoortKeuze = $OpdrachtSoortKeuze;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getKeuzeReservering()
    {
      return $this->KeuzeReservering;
    }

    /**
     * @param boolean $KeuzeReservering
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setKeuzeReservering($KeuzeReservering)
    {
      $this->KeuzeReservering = $KeuzeReservering;
      return $this;
    }

    /**
     * @return string
     */
    public function getBetaalwijze()
    {
      return $this->Betaalwijze;
    }

    /**
     * @param string $Betaalwijze
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setBetaalwijze($Betaalwijze)
    {
      $this->Betaalwijze = $Betaalwijze;
      return $this;
    }

    /**
     * @return RekeningnummerArray
     */
    public function getRekeningnummers()
    {
      return $this->Rekeningnummers;
    }

    /**
     * @param RekeningnummerArray $Rekeningnummers
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBRBegunstigde
     */
    public function setRekeningnummers($Rekeningnummers)
    {
      $this->Rekeningnummers = $Rekeningnummers;
      return $this;
    }

}

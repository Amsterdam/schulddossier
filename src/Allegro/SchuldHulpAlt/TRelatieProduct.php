<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TRelatieProduct
{

    /**
     * @var string $Contractnummer
     */
    protected $Contractnummer = null;

    /**
     * @var string $Product
     */
    protected $Product = null;

    /**
     * @var string $NaamProduct
     */
    protected $NaamProduct = null;

    /**
     * @var string $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $Startdatum
     */
    protected $Startdatum = null;

    /**
     * @var \DateTime $Einddatum
     */
    protected $Einddatum = null;

    /**
     * @var string $Eindstatus
     */
    protected $Eindstatus = null;

    /**
     * @var TMedewerker $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var string $Team
     */
    protected $Team = null;

    /**
     * @param string $Contractnummer
     * @param string $Product
     * @param string $NaamProduct
     * @param string $Status
     * @param \DateTime $Startdatum
     * @param \DateTime $Einddatum
     * @param string $Eindstatus
     * @param TMedewerker $Medewerker
     * @param string $Team
     */
    public function __construct($Contractnummer, $Product, $NaamProduct, $Status, \DateTime $Startdatum, \DateTime $Einddatum, $Eindstatus, $Medewerker, $Team)
    {
      $this->Contractnummer = $Contractnummer;
      $this->Product = $Product;
      $this->NaamProduct = $NaamProduct;
      $this->Status = $Status;
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      $this->Einddatum = $Einddatum->format(\DateTime::ATOM);
      $this->Eindstatus = $Eindstatus;
      $this->Medewerker = $Medewerker;
      $this->Team = $Team;
    }

    /**
     * @return string
     */
    public function getContractnummer()
    {
      return $this->Contractnummer;
    }

    /**
     * @param string $Contractnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setContractnummer($Contractnummer)
    {
      $this->Contractnummer = $Contractnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
      return $this->Product;
    }

    /**
     * @param string $Product
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setProduct($Product)
    {
      $this->Product = $Product;
      return $this;
    }

    /**
     * @return string
     */
    public function getNaamProduct()
    {
      return $this->NaamProduct;
    }

    /**
     * @param string $NaamProduct
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setNaamProduct($NaamProduct)
    {
      $this->NaamProduct = $NaamProduct;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param string $Status
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartdatum()
    {
      if ($this->Startdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Startdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Startdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setStartdatum(\DateTime $Startdatum)
    {
      $this->Startdatum = $Startdatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEinddatum()
    {
      if ($this->Einddatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Einddatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Einddatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setEinddatum(\DateTime $Einddatum)
    {
      $this->Einddatum = $Einddatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getEindstatus()
    {
      return $this->Eindstatus;
    }

    /**
     * @param string $Eindstatus
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setEindstatus($Eindstatus)
    {
      $this->Eindstatus = $Eindstatus;
      return $this;
    }

    /**
     * @return TMedewerker
     */
    public function getMedewerker()
    {
      return $this->Medewerker;
    }

    /**
     * @param TMedewerker $Medewerker
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
    }

    /**
     * @return string
     */
    public function getTeam()
    {
      return $this->Team;
    }

    /**
     * @param string $Team
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatieProduct
     */
    public function setTeam($Team)
    {
      $this->Team = $Team;
      return $this;
    }

}

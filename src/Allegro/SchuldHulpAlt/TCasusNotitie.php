<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TCasusNotitie
{

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var \DateTime $Datum
     */
    protected $Datum = null;

    /**
     * @var string $Beschrijving
     */
    protected $Beschrijving = null;

    /**
     * @var TMedewerker $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var boolean $PDF
     */
    protected $PDF = null;

    /**
     * @param int $Volgnummer
     * @param \DateTime $Datum
     * @param string $Beschrijving
     * @param TMedewerker $Medewerker
     * @param boolean $PDF
     */
    public function __construct($Volgnummer, \DateTime $Datum, $Beschrijving, $Medewerker, $PDF)
    {
      $this->Volgnummer = $Volgnummer;
      $this->Datum = $Datum->format(\DateTime::ATOM);
      $this->Beschrijving = $Beschrijving;
      $this->Medewerker = $Medewerker;
      $this->PDF = $PDF;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
      return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusNotitie
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatum()
    {
      if ($this->Datum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Datum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Datum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusNotitie
     */
    public function setDatum(\DateTime $Datum)
    {
      $this->Datum = $Datum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getBeschrijving()
    {
      return $this->Beschrijving;
    }

    /**
     * @param string $Beschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusNotitie
     */
    public function setBeschrijving($Beschrijving)
    {
      $this->Beschrijving = $Beschrijving;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusNotitie
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPDF()
    {
      return $this->PDF;
    }

    /**
     * @param boolean $PDF
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusNotitie
     */
    public function setPDF($PDF)
    {
      $this->PDF = $PDF;
      return $this;
    }

}

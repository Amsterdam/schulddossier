<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TCasusToelichting
{

    /**
     * @var int $VolgnummerCasus
     */
    protected $VolgnummerCasus = null;

    /**
     * @var int $Titel
     */
    protected $Titel = null;

    /**
     * @var string $TitelTitel
     */
    protected $TitelTitel = null;

    /**
     * @var string $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var \DateTime $Datum
     */
    protected $Datum = null;

    /**
     * @var int $SubTitel
     */
    protected $SubTitel = null;

    /**
     * @var string $SubTitelTitel
     */
    protected $SubTitelTitel = null;

    /**
     * @var string $Tekst
     */
    protected $Tekst = null;

    /**
     * @param int $VolgnummerCasus
     * @param int $Titel
     * @param string $TitelTitel
     * @param string $Medewerker
     * @param \DateTime $Datum
     * @param int $SubTitel
     * @param string $SubTitelTitel
     * @param string $Tekst
     */
    public function __construct($VolgnummerCasus, $Titel, $TitelTitel, $Medewerker, \DateTime $Datum, $SubTitel, $SubTitelTitel, $Tekst)
    {
      $this->VolgnummerCasus = $VolgnummerCasus;
      $this->Titel = $Titel;
      $this->TitelTitel = $TitelTitel;
      $this->Medewerker = $Medewerker;
      $this->Datum = $Datum->format(\DateTime::ATOM);
      $this->SubTitel = $SubTitel;
      $this->SubTitelTitel = $SubTitelTitel;
      $this->Tekst = $Tekst;
    }

    /**
     * @return int
     */
    public function getVolgnummerCasus()
    {
      return $this->VolgnummerCasus;
    }

    /**
     * @param int $VolgnummerCasus
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setVolgnummerCasus($VolgnummerCasus)
    {
      $this->VolgnummerCasus = $VolgnummerCasus;
      return $this;
    }

    /**
     * @return int
     */
    public function getTitel()
    {
      return $this->Titel;
    }

    /**
     * @param int $Titel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setTitel($Titel)
    {
      $this->Titel = $Titel;
      return $this;
    }

    /**
     * @return string
     */
    public function getTitelTitel()
    {
      return $this->TitelTitel;
    }

    /**
     * @param string $TitelTitel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setTitelTitel($TitelTitel)
    {
      $this->TitelTitel = $TitelTitel;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setDatum(\DateTime $Datum)
    {
      $this->Datum = $Datum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return int
     */
    public function getSubTitel()
    {
      return $this->SubTitel;
    }

    /**
     * @param int $SubTitel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setSubTitel($SubTitel)
    {
      $this->SubTitel = $SubTitel;
      return $this;
    }

    /**
     * @return string
     */
    public function getSubTitelTitel()
    {
      return $this->SubTitelTitel;
    }

    /**
     * @param string $SubTitelTitel
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setSubTitelTitel($SubTitelTitel)
    {
      $this->SubTitelTitel = $SubTitelTitel;
      return $this;
    }

    /**
     * @return string
     */
    public function getTekst()
    {
      return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusToelichting
     */
    public function setTekst($Tekst)
    {
      $this->Tekst = $Tekst;
      return $this;
    }

}

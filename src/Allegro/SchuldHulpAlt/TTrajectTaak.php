<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TTrajectTaak
{

    /**
     * @var \DateTime $StartDatum
     */
    protected $StartDatum = null;

    /**
     * @var string $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var string $Actie
     */
    protected $Actie = null;

    /**
     * @var string $ActieOmschrijving
     */
    protected $ActieOmschrijving = null;

    /**
     * @var string $MedewerkerUitgevoerd
     */
    protected $MedewerkerUitgevoerd = null;

    /**
     * @var \DateTime $DatumUitgevoerd
     */
    protected $DatumUitgevoerd = null;

    /**
     * @var string $AfmeldCategorie
     */
    protected $AfmeldCategorie = null;

    /**
     * @var int $StapnummerTraject
     */
    protected $StapnummerTraject = null;

    /**
     * @var string $TrajectCode
     */
    protected $TrajectCode = null;

    /**
     * @var string $TrajectOmschrijving
     */
    protected $TrajectOmschrijving = null;

    /**
     * @param \DateTime $StartDatum
     * @param string $Medewerker
     * @param string $Actie
     * @param string $ActieOmschrijving
     * @param string $MedewerkerUitgevoerd
     * @param \DateTime $DatumUitgevoerd
     * @param string $AfmeldCategorie
     * @param int $StapnummerTraject
     * @param string $TrajectCode
     * @param string $TrajectOmschrijving
     */
    public function __construct(\DateTime $StartDatum, $Medewerker, $Actie, $ActieOmschrijving, $MedewerkerUitgevoerd, \DateTime $DatumUitgevoerd, $AfmeldCategorie, $StapnummerTraject, $TrajectCode, $TrajectOmschrijving)
    {
      $this->StartDatum = $StartDatum->format(\DateTime::ATOM);
      $this->Medewerker = $Medewerker;
      $this->Actie = $Actie;
      $this->ActieOmschrijving = $ActieOmschrijving;
      $this->MedewerkerUitgevoerd = $MedewerkerUitgevoerd;
      $this->DatumUitgevoerd = $DatumUitgevoerd->format(\DateTime::ATOM);
      $this->AfmeldCategorie = $AfmeldCategorie;
      $this->StapnummerTraject = $StapnummerTraject;
      $this->TrajectCode = $TrajectCode;
      $this->TrajectOmschrijving = $TrajectOmschrijving;
    }

    /**
     * @return \DateTime
     */
    public function getStartDatum()
    {
      if ($this->StartDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->StartDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $StartDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setStartDatum(\DateTime $StartDatum)
    {
      $this->StartDatum = $StartDatum->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
    }

    /**
     * @return string
     */
    public function getActie()
    {
      return $this->Actie;
    }

    /**
     * @param string $Actie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setActie($Actie)
    {
      $this->Actie = $Actie;
      return $this;
    }

    /**
     * @return string
     */
    public function getActieOmschrijving()
    {
      return $this->ActieOmschrijving;
    }

    /**
     * @param string $ActieOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setActieOmschrijving($ActieOmschrijving)
    {
      $this->ActieOmschrijving = $ActieOmschrijving;
      return $this;
    }

    /**
     * @return string
     */
    public function getMedewerkerUitgevoerd()
    {
      return $this->MedewerkerUitgevoerd;
    }

    /**
     * @param string $MedewerkerUitgevoerd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setMedewerkerUitgevoerd($MedewerkerUitgevoerd)
    {
      $this->MedewerkerUitgevoerd = $MedewerkerUitgevoerd;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumUitgevoerd()
    {
      if ($this->DatumUitgevoerd == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumUitgevoerd);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumUitgevoerd
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setDatumUitgevoerd(\DateTime $DatumUitgevoerd)
    {
      $this->DatumUitgevoerd = $DatumUitgevoerd->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getAfmeldCategorie()
    {
      return $this->AfmeldCategorie;
    }

    /**
     * @param string $AfmeldCategorie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setAfmeldCategorie($AfmeldCategorie)
    {
      $this->AfmeldCategorie = $AfmeldCategorie;
      return $this;
    }

    /**
     * @return int
     */
    public function getStapnummerTraject()
    {
      return $this->StapnummerTraject;
    }

    /**
     * @param int $StapnummerTraject
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setStapnummerTraject($StapnummerTraject)
    {
      $this->StapnummerTraject = $StapnummerTraject;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrajectCode()
    {
      return $this->TrajectCode;
    }

    /**
     * @param string $TrajectCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setTrajectCode($TrajectCode)
    {
      $this->TrajectCode = $TrajectCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrajectOmschrijving()
    {
      return $this->TrajectOmschrijving;
    }

    /**
     * @param string $TrajectOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TTrajectTaak
     */
    public function setTrajectOmschrijving($TrajectOmschrijving)
    {
      $this->TrajectOmschrijving = $TrajectOmschrijving;
      return $this;
    }

}

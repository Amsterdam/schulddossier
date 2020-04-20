<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TExtraProductHeader
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var string $Omschrijving
     */
    protected $Omschrijving = null;

    /**
     * @var \DateTime $AanvraagDatum
     */
    protected $AanvraagDatum = null;

    /**
     * @param int $Relatiecode
     * @param int $Volgnummer
     * @param string $Omschrijving
     * @param \DateTime $AanvraagDatum
     */
    public function __construct($Relatiecode, $Volgnummer, $Omschrijving, \DateTime $AanvraagDatum)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Volgnummer = $Volgnummer;
      $this->Omschrijving = $Omschrijving;
      $this->AanvraagDatum = $AanvraagDatum->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProductHeader
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProductHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
      return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProductHeader
     */
    public function setOmschrijving($Omschrijving)
    {
      $this->Omschrijving = $Omschrijving;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAanvraagDatum()
    {
      if ($this->AanvraagDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AanvraagDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AanvraagDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TExtraProductHeader
     */
    public function setAanvraagDatum(\DateTime $AanvraagDatum)
    {
      $this->AanvraagDatum = $AanvraagDatum->format(\DateTime::ATOM);
      return $this;
    }

}

<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TDocumentSleutel
{

    /**
     * @var string $ComponentCode
     */
    protected $ComponentCode = null;

    /**
     * @var \DateTime $ArchiefDatum
     */
    protected $ArchiefDatum = null;

    /**
     * @var string $Kenmerk
     */
    protected $Kenmerk = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @param string $ComponentCode
     * @param \DateTime $ArchiefDatum
     * @param string $Kenmerk
     * @param int $Volgnummer
     */
    public function __construct($ComponentCode, \DateTime $ArchiefDatum, $Kenmerk, $Volgnummer)
    {
      $this->ComponentCode = $ComponentCode;
      $this->ArchiefDatum = $ArchiefDatum->format(\DateTime::ATOM);
      $this->Kenmerk = $Kenmerk;
      $this->Volgnummer = $Volgnummer;
    }

    /**
     * @return string
     */
    public function getComponentCode()
    {
      return $this->ComponentCode;
    }

    /**
     * @param string $ComponentCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocumentSleutel
     */
    public function setComponentCode($ComponentCode)
    {
      $this->ComponentCode = $ComponentCode;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArchiefDatum()
    {
      if ($this->ArchiefDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArchiefDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArchiefDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocumentSleutel
     */
    public function setArchiefDatum(\DateTime $ArchiefDatum)
    {
      $this->ArchiefDatum = $ArchiefDatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getKenmerk()
    {
      return $this->Kenmerk;
    }

    /**
     * @param string $Kenmerk
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocumentSleutel
     */
    public function setKenmerk($Kenmerk)
    {
      $this->Kenmerk = $Kenmerk;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDocumentSleutel
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

}

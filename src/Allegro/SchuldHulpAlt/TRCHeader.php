<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TRCHeader
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
     * @var \DateTime $Ingangsdatum
     */
    protected $Ingangsdatum = null;

    /**
     * @param int $Relatiecode
     * @param int $Volgnummer
     * @param \DateTime $Ingangsdatum
     */
    public function __construct($Relatiecode, $Volgnummer, \DateTime $Ingangsdatum)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Volgnummer = $Volgnummer;
      $this->Ingangsdatum = $Ingangsdatum->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRCHeader
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRCHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIngangsdatum()
    {
      if ($this->Ingangsdatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Ingangsdatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Ingangsdatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRCHeader
     */
    public function setIngangsdatum(\DateTime $Ingangsdatum)
    {
      $this->Ingangsdatum = $Ingangsdatum->format(\DateTime::ATOM);
      return $this;
    }

}

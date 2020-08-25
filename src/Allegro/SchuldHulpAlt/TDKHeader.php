<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TDKHeader
{

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var \DateTime $DatumUitbetaling
     */
    protected $DatumUitbetaling = null;

    /**
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param \DateTime $DatumUitbetaling
     */
    public function __construct($RelatieCode, $Volgnummer, \DateTime $DatumUitbetaling)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Volgnummer = $Volgnummer;
      $this->DatumUitbetaling = $DatumUitbetaling->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
      return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDKHeader
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDKHeader
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumUitbetaling()
    {
      if ($this->DatumUitbetaling == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumUitbetaling);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumUitbetaling
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TDKHeader
     */
    public function setDatumUitbetaling(\DateTime $DatumUitbetaling)
    {
      $this->DatumUitbetaling = $DatumUitbetaling->format(\DateTime::ATOM);
      return $this;
    }

}

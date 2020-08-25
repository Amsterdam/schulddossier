<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxHeader
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var string $AfzenderOntvanger
     */
    protected $AfzenderOntvanger = null;

    /**
     * @var string $Onderwerp
     */
    protected $Onderwerp = null;

    /**
     * @var \DateTime $Tijdstip
     */
    protected $Tijdstip = null;

    /**
     * @var boolean $IndicatieOntvangen
     */
    protected $IndicatieOntvangen = null;

    /**
     * @var boolean $IndicatieGelezen
     */
    protected $IndicatieGelezen = null;

    /**
     * @var boolean $IndicatieArchief
     */
    protected $IndicatieArchief = null;

    /**
     * @var boolean $IndicatieBijlage
     */
    protected $IndicatieBijlage = null;

    /**
     * @param int $Code
     * @param string $AfzenderOntvanger
     * @param string $Onderwerp
     * @param \DateTime $Tijdstip
     * @param boolean $IndicatieOntvangen
     * @param boolean $IndicatieGelezen
     * @param boolean $IndicatieArchief
     * @param boolean $IndicatieBijlage
     */
    public function __construct($Code, $AfzenderOntvanger, $Onderwerp, \DateTime $Tijdstip, $IndicatieOntvangen, $IndicatieGelezen, $IndicatieArchief, $IndicatieBijlage)
    {
      $this->Code = $Code;
      $this->AfzenderOntvanger = $AfzenderOntvanger;
      $this->Onderwerp = $Onderwerp;
      $this->Tijdstip = $Tijdstip->format(\DateTime::ATOM);
      $this->IndicatieOntvangen = $IndicatieOntvangen;
      $this->IndicatieGelezen = $IndicatieGelezen;
      $this->IndicatieArchief = $IndicatieArchief;
      $this->IndicatieBijlage = $IndicatieBijlage;
    }

    /**
     * @return int
     */
    public function getCode()
    {
      return $this->Code;
    }

    /**
     * @param int $Code
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
    }

    /**
     * @return string
     */
    public function getAfzenderOntvanger()
    {
      return $this->AfzenderOntvanger;
    }

    /**
     * @param string $AfzenderOntvanger
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setAfzenderOntvanger($AfzenderOntvanger)
    {
      $this->AfzenderOntvanger = $AfzenderOntvanger;
      return $this;
    }

    /**
     * @return string
     */
    public function getOnderwerp()
    {
      return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setOnderwerp($Onderwerp)
    {
      $this->Onderwerp = $Onderwerp;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getTijdstip()
    {
      if ($this->Tijdstip == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Tijdstip);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Tijdstip
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setTijdstip(\DateTime $Tijdstip)
    {
      $this->Tijdstip = $Tijdstip->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatieOntvangen()
    {
      return $this->IndicatieOntvangen;
    }

    /**
     * @param boolean $IndicatieOntvangen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setIndicatieOntvangen($IndicatieOntvangen)
    {
      $this->IndicatieOntvangen = $IndicatieOntvangen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatieGelezen()
    {
      return $this->IndicatieGelezen;
    }

    /**
     * @param boolean $IndicatieGelezen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setIndicatieGelezen($IndicatieGelezen)
    {
      $this->IndicatieGelezen = $IndicatieGelezen;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatieArchief()
    {
      return $this->IndicatieArchief;
    }

    /**
     * @param boolean $IndicatieArchief
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setIndicatieArchief($IndicatieArchief)
    {
      $this->IndicatieArchief = $IndicatieArchief;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIndicatieBijlage()
    {
      return $this->IndicatieBijlage;
    }

    /**
     * @param boolean $IndicatieBijlage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxHeader
     */
    public function setIndicatieBijlage($IndicatieBijlage)
    {
      $this->IndicatieBijlage = $IndicatieBijlage;
      return $this;
    }

}

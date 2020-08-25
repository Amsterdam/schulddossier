<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TRCJaarrente
{

    /**
     * @var int $Jaar
     */
    protected $Jaar = null;

    /**
     * @var float $RentePositief
     */
    protected $RentePositief = null;

    /**
     * @var float $RenteNegatief
     */
    protected $RenteNegatief = null;

    /**
     * @param int $Jaar
     * @param float $RentePositief
     * @param float $RenteNegatief
     */
    public function __construct($Jaar, $RentePositief, $RenteNegatief)
    {
      $this->Jaar = $Jaar;
      $this->RentePositief = $RentePositief;
      $this->RenteNegatief = $RenteNegatief;
    }

    /**
     * @return int
     */
    public function getJaar()
    {
      return $this->Jaar;
    }

    /**
     * @param int $Jaar
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRCJaarrente
     */
    public function setJaar($Jaar)
    {
      $this->Jaar = $Jaar;
      return $this;
    }

    /**
     * @return float
     */
    public function getRentePositief()
    {
      return $this->RentePositief;
    }

    /**
     * @param float $RentePositief
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRCJaarrente
     */
    public function setRentePositief($RentePositief)
    {
      $this->RentePositief = $RentePositief;
      return $this;
    }

    /**
     * @return float
     */
    public function getRenteNegatief()
    {
      return $this->RenteNegatief;
    }

    /**
     * @param float $RenteNegatief
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRCJaarrente
     */
    public function setRenteNegatief($RenteNegatief)
    {
      $this->RenteNegatief = $RenteNegatief;
      return $this;
    }

}

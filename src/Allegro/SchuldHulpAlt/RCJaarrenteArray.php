<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class RCJaarrenteArray
{

    /**
     * @var TRCJaarrente[] $TRCJaarrente
     */
    protected $TRCJaarrente = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TRCJaarrente[]
     */
    public function getTRCJaarrente()
    {
      return $this->TRCJaarrente;
    }

    /**
     * @param TRCJaarrente[] $TRCJaarrente
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\RCJaarrenteArray
     */
    public function setTRCJaarrente(array $TRCJaarrente = null)
    {
      $this->TRCJaarrente = $TRCJaarrente;
      return $this;
    }

}

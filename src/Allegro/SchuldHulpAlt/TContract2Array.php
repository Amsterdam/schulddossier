<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TContract2Array
{

    /**
     * @var TContract2[] $TContract2
     */
    protected $TContract2 = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TContract2[]
     */
    public function getTContract2()
    {
      return $this->TContract2;
    }

    /**
     * @param TContract2[] $TContract2
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TContract2Array
     */
    public function setTContract2(array $TContract2 = null)
    {
      $this->TContract2 = $TContract2;
      return $this;
    }

}

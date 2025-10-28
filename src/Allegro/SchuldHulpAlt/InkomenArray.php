<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class InkomenArray
{

    /**
     * @var TInkomen[] $TInkomen
     */
    protected $TInkomen = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TInkomen[]
     */
    public function getTInkomen()
    {
      return $this->TInkomen;
    }

    /**
     * @param TInkomen[] $TInkomen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\InkomenArray
     */
    public function setTInkomen(array $TInkomen = null)
    {
      $this->TInkomen = $TInkomen;
      return $this;
    }

}

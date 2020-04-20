<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class BooleanArray
{

    /**
     * @var boolean[] $boolean
     */
    protected $boolean = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean[]
     */
    public function getBoolean()
    {
      return $this->boolean;
    }

    /**
     * @param boolean[] $boolean
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\BooleanArray
     */
    public function setBoolean(array $boolean = null)
    {
      $this->boolean = $boolean;
      return $this;
    }

}

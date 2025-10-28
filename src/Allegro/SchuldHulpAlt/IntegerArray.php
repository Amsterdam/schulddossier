<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class IntegerArray
{

    /**
     * @var int[] $int
     */
    protected $int = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return int[]
     */
    public function getInt()
    {
      return $this->int;
    }

    /**
     * @param int[] $int
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\IntegerArray
     */
    public function setInt(array $int = null)
    {
      $this->int = $int;
      return $this;
    }

}

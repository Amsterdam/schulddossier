<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class Int64Array
{

    /**
     * @var long[] $long
     */
    protected $long = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return long[]
     */
    public function getLong()
    {
      return $this->long;
    }

    /**
     * @param long[] $long
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\Int64Array
     */
    public function setLong(array $long = null)
    {
      $this->long = $long;
      return $this;
    }

}

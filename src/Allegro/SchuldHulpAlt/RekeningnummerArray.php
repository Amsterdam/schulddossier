<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class RekeningnummerArray
{

    /**
     * @var string[] $string
     */
    protected $string = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string[]
     */
    public function getString()
    {
      return $this->string;
    }

    /**
     * @param string[] $string
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\RekeningnummerArray
     */
    public function setString(array $string = null)
    {
      $this->string = $string;
      return $this;
    }

}

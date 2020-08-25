<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class StringArrayArray
{

    /**
     * @var StringArray[] $StringArray
     */
    protected $StringArray = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return StringArray[]
     */
    public function getStringArray()
    {
      return $this->StringArray;
    }

    /**
     * @param StringArray[] $StringArray
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\StringArrayArray
     */
    public function setStringArray(array $StringArray = null)
    {
      $this->StringArray = $StringArray;
      return $this;
    }

}

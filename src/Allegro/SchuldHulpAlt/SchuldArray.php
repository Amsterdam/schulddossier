<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class SchuldArray
{

    /**
     * @var TSchuld[] $TSchuld
     */
    protected $TSchuld = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TSchuld[]
     */
    public function getTSchuld()
    {
      return $this->TSchuld;
    }

    /**
     * @param TSchuld[] $TSchuld
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\SchuldArray
     */
    public function setTSchuld(array $TSchuld = null)
    {
      $this->TSchuld = $TSchuld;
      return $this;
    }

}

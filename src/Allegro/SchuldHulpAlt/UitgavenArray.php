<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class UitgavenArray
{

    /**
     * @var TUitgaven[] $TUitgaven
     */
    protected $TUitgaven = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TUitgaven[]
     */
    public function getTUitgaven()
    {
      return $this->TUitgaven;
    }

    /**
     * @param TUitgaven[] $TUitgaven
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\UitgavenArray
     */
    public function setTUitgaven(array $TUitgaven = null)
    {
      $this->TUitgaven = $TUitgaven;
      return $this;
    }

}

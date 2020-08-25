<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class LijstKredietsoortArray
{

    /**
     * @var TLijstKredietsoort[] $TLijstKredietsoort
     */
    protected $TLijstKredietsoort = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TLijstKredietsoort[]
     */
    public function getTLijstKredietsoort()
    {
      return $this->TLijstKredietsoort;
    }

    /**
     * @param TLijstKredietsoort[] $TLijstKredietsoort
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\LijstKredietsoortArray
     */
    public function setTLijstKredietsoort(array $TLijstKredietsoort = null)
    {
      $this->TLijstKredietsoort = $TLijstKredietsoort;
      return $this;
    }

}

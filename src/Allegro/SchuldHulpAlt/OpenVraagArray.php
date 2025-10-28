<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class OpenVraagArray
{

    /**
     * @var TOpenVraag[] $TOpenVraag
     */
    protected $TOpenVraag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TOpenVraag[]
     */
    public function getTOpenVraag()
    {
      return $this->TOpenVraag;
    }

    /**
     * @param TOpenVraag[] $TOpenVraag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\OpenVraagArray
     */
    public function setTOpenVraag(array $TOpenVraag = null)
    {
      $this->TOpenVraag = $TOpenVraag;
      return $this;
    }

}

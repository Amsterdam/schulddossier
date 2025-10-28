<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class GeslotenVraagArray
{

    /**
     * @var TGeslotenVraag[] $TGeslotenVraag
     */
    protected $TGeslotenVraag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TGeslotenVraag[]
     */
    public function getTGeslotenVraag()
    {
      return $this->TGeslotenVraag;
    }

    /**
     * @param TGeslotenVraag[] $TGeslotenVraag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\GeslotenVraagArray
     */
    public function setTGeslotenVraag(array $TGeslotenVraag = null)
    {
      $this->TGeslotenVraag = $TGeslotenVraag;
      return $this;
    }

}

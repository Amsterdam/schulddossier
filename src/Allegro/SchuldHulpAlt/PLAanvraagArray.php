<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class PLAanvraagArray
{

    /**
     * @var TPLAanvraag[] $TPLAanvraag
     */
    protected $TPLAanvraag = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TPLAanvraag[]
     */
    public function getTPLAanvraag()
    {
      return $this->TPLAanvraag;
    }

    /**
     * @param TPLAanvraag[] $TPLAanvraag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\PLAanvraagArray
     */
    public function setTPLAanvraag(array $TPLAanvraag = null)
    {
      $this->TPLAanvraag = $TPLAanvraag;
      return $this;
    }

}

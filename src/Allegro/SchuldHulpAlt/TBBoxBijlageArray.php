<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxBijlageArray
{

    /**
     * @var TBBoxBijlage[] $TBBoxBijlage
     */
    protected $TBBoxBijlage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBoxBijlage[]
     */
    public function getTBBoxBijlage()
    {
      return $this->TBBoxBijlage;
    }

    /**
     * @param TBBoxBijlage[] $TBBoxBijlage
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxBijlageArray
     */
    public function setTBBoxBijlage(array $TBBoxBijlage = null)
    {
      $this->TBBoxBijlage = $TBBoxBijlage;
      return $this;
    }

}

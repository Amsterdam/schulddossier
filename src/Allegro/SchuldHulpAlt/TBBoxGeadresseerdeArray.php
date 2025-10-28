<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxGeadresseerdeArray
{

    /**
     * @var TBBoxGeadresseerde[] $TBBoxGeadresseerde
     */
    protected $TBBoxGeadresseerde = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBoxGeadresseerde[]
     */
    public function getTBBoxGeadresseerde()
    {
      return $this->TBBoxGeadresseerde;
    }

    /**
     * @param TBBoxGeadresseerde[] $TBBoxGeadresseerde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxGeadresseerdeArray
     */
    public function setTBBoxGeadresseerde(array $TBBoxGeadresseerde = null)
    {
      $this->TBBoxGeadresseerde = $TBBoxGeadresseerde;
      return $this;
    }

}

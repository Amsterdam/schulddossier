<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class BBROpdrachtArray
{

    /**
     * @var TBBROpdracht[] $TBBROpdracht
     */
    protected $TBBROpdracht = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TBBROpdracht[]
     */
    public function getTBBROpdracht()
    {
      return $this->TBBROpdracht;
    }

    /**
     * @param TBBROpdracht[] $TBBROpdracht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\BBROpdrachtArray
     */
    public function setTBBROpdracht(array $TBBROpdracht = null)
    {
      $this->TBBROpdracht = $TBBROpdracht;
      return $this;
    }

}

<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class CasusDeelopdrachtArray
{

    /**
     * @var TCasusDeelopdracht[] $TCasusDeelopdracht
     */
    protected $TCasusDeelopdracht = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TCasusDeelopdracht[]
     */
    public function getTCasusDeelopdracht()
    {
      return $this->TCasusDeelopdracht;
    }

    /**
     * @param TCasusDeelopdracht[] $TCasusDeelopdracht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\CasusDeelopdrachtArray
     */
    public function setTCasusDeelopdracht(array $TCasusDeelopdracht = null)
    {
      $this->TCasusDeelopdracht = $TCasusDeelopdracht;
      return $this;
    }

}

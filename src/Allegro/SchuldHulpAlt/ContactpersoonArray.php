<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class ContactpersoonArray
{

    /**
     * @var TContactpersoon[] $TContactpersoon
     */
    protected $TContactpersoon = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TContactpersoon[]
     */
    public function getTContactpersoon()
    {
      return $this->TContactpersoon;
    }

    /**
     * @param TContactpersoon[] $TContactpersoon
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\ContactpersoonArray
     */
    public function setTContactpersoon(array $TContactpersoon = null)
    {
      $this->TContactpersoon = $TContactpersoon;
      return $this;
    }

}

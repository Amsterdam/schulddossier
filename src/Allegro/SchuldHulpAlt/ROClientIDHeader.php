<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class ROClientIDHeader
{

    /**
     * @var string $ID
     */
    protected $ID = null;

    /**
     * @param string $ID
     */
    public function __construct($ID)
    {
      $this->ID = $ID;
    }

    /**
     * @return string
     */
    public function getID()
    {
      return $this->ID;
    }

    /**
     * @param string $ID
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\ROClientIDHeader
     */
    public function setID($ID)
    {
      $this->ID = $ID;
      return $this;
    }

}

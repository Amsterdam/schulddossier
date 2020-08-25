<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBROpdrachten
{

    /**
     * @var BBROpdrachtArray $BBROpdrachten
     */
    protected $BBROpdrachten = null;

    /**
     * @param BBROpdrachtArray $BBROpdrachten
     */
    public function __construct($BBROpdrachten)
    {
      $this->BBROpdrachten = $BBROpdrachten;
    }

    /**
     * @return BBROpdrachtArray
     */
    public function getBBROpdrachten()
    {
      return $this->BBROpdrachten;
    }

    /**
     * @param BBROpdrachtArray $BBROpdrachten
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBROpdrachten
     */
    public function setBBROpdrachten($BBROpdrachten)
    {
      $this->BBROpdrachten = $BBROpdrachten;
      return $this;
    }

}

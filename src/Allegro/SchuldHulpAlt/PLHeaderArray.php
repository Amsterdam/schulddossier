<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class PLHeaderArray
{

    /**
     * @var TPLHeader[] $TPLHeader
     */
    protected $TPLHeader = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TPLHeader[]
     */
    public function getTPLHeader()
    {
      return $this->TPLHeader;
    }

    /**
     * @param TPLHeader[] $TPLHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\PLHeaderArray
     */
    public function setTPLHeader(array $TPLHeader = null)
    {
      $this->TPLHeader = $TPLHeader;
      return $this;
    }

}

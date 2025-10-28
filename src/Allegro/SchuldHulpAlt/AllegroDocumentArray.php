<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class AllegroDocumentArray
{

    /**
     * @var TAllegroDocument[] $TAllegroDocument
     */
    protected $TAllegroDocument = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return TAllegroDocument[]
     */
    public function getTAllegroDocument()
    {
      return $this->TAllegroDocument;
    }

    /**
     * @param TAllegroDocument[] $TAllegroDocument
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AllegroDocumentArray
     */
    public function setTAllegroDocument(array $TAllegroDocument = null)
    {
      $this->TAllegroDocument = $TAllegroDocument;
      return $this;
    }

}

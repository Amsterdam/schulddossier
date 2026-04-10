<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class AllegroDocumentArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAllegroDocument
     */
    private $TAllegroDocument;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAllegroDocument
     */
    public function getTAllegroDocument()
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TAllegroDocument $TAllegroDocument
     * @return AllegroDocumentArray
     */
    public function withTAllegroDocument($TAllegroDocument)
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }
}


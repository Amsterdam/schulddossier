<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class AllegroDocumentArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAllegroDocument
     */
    private $TAllegroDocument;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAllegroDocument
     */
    public function getTAllegroDocument()
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TAllegroDocument $TAllegroDocument
     * @return AllegroDocumentArray
     */
    public function withTAllegroDocument($TAllegroDocument)
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }
}


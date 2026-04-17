<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class AllegroDocumentArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAllegroDocument
     */
    private $TAllegroDocument;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAllegroDocument
     */
    public function getTAllegroDocument()
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAllegroDocument $TAllegroDocument
     * @return AllegroDocumentArray
     */
    public function withTAllegroDocument($TAllegroDocument)
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class AllegroDocumentArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAllegroDocument
     */
    private $TAllegroDocument;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAllegroDocument
     */
    public function getTAllegroDocument()
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TAllegroDocument $TAllegroDocument
     * @return AllegroDocumentArray
     */
    public function withTAllegroDocument($TAllegroDocument)
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }
}


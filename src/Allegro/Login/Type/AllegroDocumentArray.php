<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class AllegroDocumentArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAllegroDocument>
     */
    private array $TAllegroDocument;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAllegroDocument>
     */
    public function getTAllegroDocument() : array
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAllegroDocument> $TAllegroDocument
     * @return static
     */
    public function withTAllegroDocument(array $TAllegroDocument) : static
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }
}


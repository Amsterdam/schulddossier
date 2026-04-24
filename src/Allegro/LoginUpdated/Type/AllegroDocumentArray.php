<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class AllegroDocumentArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAllegroDocument>
     */
    private array $TAllegroDocument;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAllegroDocument>
     */
    public function getTAllegroDocument(): array
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAllegroDocument> $TAllegroDocument
     * @return static
     */
    public function withTAllegroDocument(array $TAllegroDocument): static
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }
}


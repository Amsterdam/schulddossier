<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class AllegroDocumentArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAllegroDocument>
     */
    private array $TAllegroDocument;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAllegroDocument> $TAllegroDocument
     */
    public function __construct(array $TAllegroDocument)
    {
        $this->TAllegroDocument = $TAllegroDocument;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAllegroDocument>
     */
    public function getTAllegroDocument() : array
    {
        return $this->TAllegroDocument;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAllegroDocument> $TAllegroDocument
     * @return static
     */
    public function withTAllegroDocument(array $TAllegroDocument) : static
    {
        $new = clone $this;
        $new->TAllegroDocument = $TAllegroDocument;

        return $new;
    }
}


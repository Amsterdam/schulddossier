<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GeslotenVraagArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag>
     */
    private array $TGeslotenVraag;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag> $TGeslotenVraag
     */
    public function __construct(array $TGeslotenVraag)
    {
        $this->TGeslotenVraag = $TGeslotenVraag;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag>
     */
    public function getTGeslotenVraag() : array
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TGeslotenVraag> $TGeslotenVraag
     * @return static
     */
    public function withTGeslotenVraag(array $TGeslotenVraag) : static
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }
}


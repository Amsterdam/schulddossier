<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class OpenVraagArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag>
     */
    private array $TOpenVraag;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag> $TOpenVraag
     */
    public function __construct(array $TOpenVraag)
    {
        $this->TOpenVraag = $TOpenVraag;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag>
     */
    public function getTOpenVraag() : array
    {
        return $this->TOpenVraag;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TOpenVraag> $TOpenVraag
     * @return static
     */
    public function withTOpenVraag(array $TOpenVraag) : static
    {
        $new = clone $this;
        $new->TOpenVraag = $TOpenVraag;

        return $new;
    }
}


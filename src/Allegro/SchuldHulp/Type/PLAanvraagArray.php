<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PLAanvraagArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag>
     */
    private array $TPLAanvraag;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag> $TPLAanvraag
     */
    public function __construct(array $TPLAanvraag)
    {
        $this->TPLAanvraag = $TPLAanvraag;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag>
     */
    public function getTPLAanvraag() : array
    {
        return $this->TPLAanvraag;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag> $TPLAanvraag
     * @return static
     */
    public function withTPLAanvraag(array $TPLAanvraag) : static
    {
        $new = clone $this;
        $new->TPLAanvraag = $TPLAanvraag;

        return $new;
    }
}


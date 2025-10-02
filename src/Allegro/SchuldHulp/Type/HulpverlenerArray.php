<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class HulpverlenerArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\THulpverlener>
     */
    private array $THulpverlener;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\THulpverlener> $THulpverlener
     */
    public function __construct(array $THulpverlener)
    {
        $this->THulpverlener = $THulpverlener;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\THulpverlener>
     */
    public function getTHulpverlener() : array
    {
        return $this->THulpverlener;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\THulpverlener> $THulpverlener
     * @return static
     */
    public function withTHulpverlener(array $THulpverlener) : static
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }
}


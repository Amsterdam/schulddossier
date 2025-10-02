<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAfspraakSoortenArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten>
     */
    private array $TAfspraakSoorten;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten> $TAfspraakSoorten
     */
    public function __construct(array $TAfspraakSoorten)
    {
        $this->TAfspraakSoorten = $TAfspraakSoorten;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten>
     */
    public function getTAfspraakSoorten() : array
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten> $TAfspraakSoorten
     * @return static
     */
    public function withTAfspraakSoorten(array $TAfspraakSoorten) : static
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }
}


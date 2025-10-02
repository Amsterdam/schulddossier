<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TeamArray implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam>
     */
    private array $TTeam;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam> $TTeam
     */
    public function __construct(array $TTeam)
    {
        $this->TTeam = $TTeam;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam>
     */
    public function getTTeam() : array
    {
        return $this->TTeam;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTeam> $TTeam
     * @return static
     */
    public function withTTeam(array $TTeam) : static
    {
        $new = clone $this;
        $new->TTeam = $TTeam;

        return $new;
    }
}


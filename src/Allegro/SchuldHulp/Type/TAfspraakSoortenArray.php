<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAfspraakSoortenArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten
     */
    private $TAfspraakSoorten;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten $TAfspraakSoorten
     */
    public function __construct($TAfspraakSoorten)
    {
        $this->TAfspraakSoorten = $TAfspraakSoorten;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten
     */
    public function getTAfspraakSoorten()
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAfspraakSoorten $TAfspraakSoorten
     * @return TAfspraakSoortenArray
     */
    public function withTAfspraakSoorten($TAfspraakSoorten)
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }
}

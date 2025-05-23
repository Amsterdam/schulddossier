<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class AfspraakArray implements RequestInterface
{

    /**
     * @var TAfspraak
     */
    private $TAfspraak;

    /**
     * Constructor
     *
     * @var TAfspraak $TAfspraak
     */
    public function __construct($TAfspraak)
    {
        $this->TAfspraak = $TAfspraak;
    }

    /**
     * @return TAfspraak
     */
    public function getTAfspraak()
    {
        return $this->TAfspraak;
    }

    /**
     * @param TAfspraak $TAfspraak
     * @return AfspraakArray
     */
    public function withTAfspraak($TAfspraak)
    {
        $new = clone $this;
        $new->TAfspraak = $TAfspraak;

        return $new;
    }


}


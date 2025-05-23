<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TAfspraakSoortenArray implements RequestInterface
{

    /**
     * @var TAfspraakSoorten
     */
    private $TAfspraakSoorten;

    /**
     * Constructor
     *
     * @var TAfspraakSoorten $TAfspraakSoorten
     */
    public function __construct($TAfspraakSoorten)
    {
        $this->TAfspraakSoorten = $TAfspraakSoorten;
    }

    /**
     * @return TAfspraakSoorten
     */
    public function getTAfspraakSoorten()
    {
        return $this->TAfspraakSoorten;
    }

    /**
     * @param TAfspraakSoorten $TAfspraakSoorten
     * @return TAfspraakSoortenArray
     */
    public function withTAfspraakSoorten($TAfspraakSoorten)
    {
        $new = clone $this;
        $new->TAfspraakSoorten = $TAfspraakSoorten;

        return $new;
    }


}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDeltaChangeArray implements RequestInterface
{

    /**
     * @var SimpleDeltaChange
     */
    private $SimpleDeltaChange;

    /**
     * Constructor
     *
     * @var SimpleDeltaChange $SimpleDeltaChange
     */
    public function __construct($SimpleDeltaChange)
    {
        $this->SimpleDeltaChange = $SimpleDeltaChange;
    }

    /**
     * @return SimpleDeltaChange
     */
    public function getSimpleDeltaChange()
    {
        return $this->SimpleDeltaChange;
    }

    /**
     * @param SimpleDeltaChange $SimpleDeltaChange
     * @return SimpleDeltaChangeArray
     */
    public function withSimpleDeltaChange($SimpleDeltaChange)
    {
        $new = clone $this;
        $new->SimpleDeltaChange = $SimpleDeltaChange;

        return $new;
    }


}


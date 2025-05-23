<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SimpleDeltaArray implements RequestInterface
{

    /**
     * @var SimpleDelta
     */
    private $SimpleDelta;

    /**
     * Constructor
     *
     * @var SimpleDelta $SimpleDelta
     */
    public function __construct($SimpleDelta)
    {
        $this->SimpleDelta = $SimpleDelta;
    }

    /**
     * @return SimpleDelta
     */
    public function getSimpleDelta()
    {
        return $this->SimpleDelta;
    }

    /**
     * @param SimpleDelta $SimpleDelta
     * @return SimpleDeltaArray
     */
    public function withSimpleDelta($SimpleDelta)
    {
        $new = clone $this;
        $new->SimpleDelta = $SimpleDelta;

        return $new;
    }


}


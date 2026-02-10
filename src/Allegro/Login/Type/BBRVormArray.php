<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class BBRVormArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm
     */
    private $TBBRVorm;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm $TBBRVorm
     */
    public function __construct($TBBRVorm)
    {
        $this->TBBRVorm = $TBBRVorm;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm
     */
    public function getTBBRVorm()
    {
        return $this->TBBRVorm;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBRVorm $TBBRVorm
     * @return BBRVormArray
     */
    public function withTBBRVorm($TBBRVorm)
    {
        $new = clone $this;
        $new->TBBRVorm = $TBBRVorm;

        return $new;
    }
}

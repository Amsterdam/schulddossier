<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LijstKredietsoortArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort
     */
    private $TLijstKredietsoort;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort $TLijstKredietsoort
     */
    public function __construct($TLijstKredietsoort)
    {
        $this->TLijstKredietsoort = $TLijstKredietsoort;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort
     */
    public function getTLijstKredietsoort()
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TLijstKredietsoort $TLijstKredietsoort
     * @return LijstKredietsoortArray
     */
    public function withTLijstKredietsoort($TLijstKredietsoort)
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }
}

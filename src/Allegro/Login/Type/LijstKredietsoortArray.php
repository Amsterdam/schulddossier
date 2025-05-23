<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class LijstKredietsoortArray implements RequestInterface
{

    /**
     * @var TLijstKredietsoort
     */
    private $TLijstKredietsoort;

    /**
     * Constructor
     *
     * @var TLijstKredietsoort $TLijstKredietsoort
     */
    public function __construct($TLijstKredietsoort)
    {
        $this->TLijstKredietsoort = $TLijstKredietsoort;
    }

    /**
     * @return TLijstKredietsoort
     */
    public function getTLijstKredietsoort()
    {
        return $this->TLijstKredietsoort;
    }

    /**
     * @param TLijstKredietsoort $TLijstKredietsoort
     * @return LijstKredietsoortArray
     */
    public function withTLijstKredietsoort($TLijstKredietsoort)
    {
        $new = clone $this;
        $new->TLijstKredietsoort = $TLijstKredietsoort;

        return $new;
    }


}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrajectTaakArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectTaak
     */
    private $TTrajectTaak;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectTaak $TTrajectTaak
     */
    public function __construct($TTrajectTaak)
    {
        $this->TTrajectTaak = $TTrajectTaak;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectTaak
     */
    public function getTTrajectTaak()
    {
        return $this->TTrajectTaak;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectTaak $TTrajectTaak
     * @return TrajectTaakArray
     */
    public function withTTrajectTaak($TTrajectTaak)
    {
        $new = clone $this;
        $new->TTrajectTaak = $TTrajectTaak;

        return $new;
    }


}


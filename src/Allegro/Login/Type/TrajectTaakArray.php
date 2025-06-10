<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrajectTaakArray implements RequestInterface
{

    /**
     * @var TTrajectTaak
     */
    private $TTrajectTaak;

    /**
     * Constructor
     *
     * @var TTrajectTaak $TTrajectTaak
     */
    public function __construct($TTrajectTaak)
    {
        $this->TTrajectTaak = $TTrajectTaak;
    }

    /**
     * @return TTrajectTaak
     */
    public function getTTrajectTaak()
    {
        return $this->TTrajectTaak;
    }

    /**
     * @param TTrajectTaak $TTrajectTaak
     * @return TrajectTaakArray
     */
    public function withTTrajectTaak($TTrajectTaak)
    {
        $new = clone $this;
        $new->TTrajectTaak = $TTrajectTaak;

        return $new;
    }


}


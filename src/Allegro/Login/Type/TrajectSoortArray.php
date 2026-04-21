<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrajectSoortArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort
     */
    private $TTrajectSoort;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort $TTrajectSoort
     */
    public function __construct($TTrajectSoort)
    {
        $this->TTrajectSoort = $TTrajectSoort;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort
     */
    public function getTTrajectSoort()
    {
        return $this->TTrajectSoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TTrajectSoort $TTrajectSoort
     * @return TrajectSoortArray
     */
    public function withTTrajectSoort($TTrajectSoort)
    {
        $new = clone $this;
        $new->TTrajectSoort = $TTrajectSoort;

        return $new;
    }
}

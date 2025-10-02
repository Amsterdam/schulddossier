<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TrajectSoortArray implements RequestInterface
{

    /**
     * @var TTrajectSoort
     */
    private $TTrajectSoort;

    /**
     * Constructor
     *
     * @var TTrajectSoort $TTrajectSoort
     */
    public function __construct($TTrajectSoort)
    {
        $this->TTrajectSoort = $TTrajectSoort;
    }

    /**
     * @return TTrajectSoort
     */
    public function getTTrajectSoort()
    {
        return $this->TTrajectSoort;
    }

    /**
     * @param TTrajectSoort $TTrajectSoort
     * @return TrajectSoortArray
     */
    public function withTTrajectSoort($TTrajectSoort)
    {
        $new = clone $this;
        $new->TTrajectSoort = $TTrajectSoort;

        return $new;
    }


}


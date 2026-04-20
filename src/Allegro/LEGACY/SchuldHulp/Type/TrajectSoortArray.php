<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TrajectSoortArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort
     */
    private $TTrajectSoort;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort $TTrajectSoort
     */
    public function __construct($TTrajectSoort)
    {
        $this->TTrajectSoort = $TTrajectSoort;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort
     */
    public function getTTrajectSoort()
    {
        return $this->TTrajectSoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TTrajectSoort $TTrajectSoort
     * @return TrajectSoortArray
     */
    public function withTTrajectSoort($TTrajectSoort)
    {
        $new = clone $this;
        $new->TTrajectSoort = $TTrajectSoort;

        return $new;
    }
}

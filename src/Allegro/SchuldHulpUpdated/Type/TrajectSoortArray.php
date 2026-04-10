<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TrajectSoortArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTrajectSoort
     */
    private $TTrajectSoort;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTrajectSoort
     */
    public function getTTrajectSoort()
    {
        return $this->TTrajectSoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TTrajectSoort $TTrajectSoort
     * @return TrajectSoortArray
     */
    public function withTTrajectSoort($TTrajectSoort)
    {
        $new = clone $this;
        $new->TTrajectSoort = $TTrajectSoort;

        return $new;
    }
}


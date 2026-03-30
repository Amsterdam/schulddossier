<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TrajectSoortArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTrajectSoort
     */
    private $TTrajectSoort;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTrajectSoort
     */
    public function getTTrajectSoort()
    {
        return $this->TTrajectSoort;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TTrajectSoort $TTrajectSoort
     * @return TrajectSoortArray
     */
    public function withTTrajectSoort($TTrajectSoort)
    {
        $new = clone $this;
        $new->TTrajectSoort = $TTrajectSoort;

        return $new;
    }
}


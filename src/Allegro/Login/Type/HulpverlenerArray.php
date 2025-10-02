<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class HulpverlenerArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener>
     */
    private array $THulpverlener;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener>
     */
    public function getTHulpverlener() : array
    {
        return $this->THulpverlener;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\THulpverlener> $THulpverlener
     * @return static
     */
    public function withTHulpverlener(array $THulpverlener) : static
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class CasusNotitieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusNotitie
     */
    private $TCasusNotitie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusNotitie
     */
    public function getTCasusNotitie()
    {
        return $this->TCasusNotitie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusNotitie $TCasusNotitie
     * @return CasusNotitieArray
     */
    public function withTCasusNotitie($TCasusNotitie)
    {
        $new = clone $this;
        $new->TCasusNotitie = $TCasusNotitie;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class CasusNotitieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusNotitie
     */
    private $TCasusNotitie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusNotitie
     */
    public function getTCasusNotitie()
    {
        return $this->TCasusNotitie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TCasusNotitie $TCasusNotitie
     * @return CasusNotitieArray
     */
    public function withTCasusNotitie($TCasusNotitie)
    {
        $new = clone $this;
        $new->TCasusNotitie = $TCasusNotitie;

        return $new;
    }
}

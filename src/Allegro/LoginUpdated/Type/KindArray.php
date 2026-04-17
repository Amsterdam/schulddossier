<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class KindArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TKind
     */
    private $TKind;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TKind
     */
    public function getTKind()
    {
        return $this->TKind;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TKind $TKind
     * @return KindArray
     */
    public function withTKind($TKind)
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }
}


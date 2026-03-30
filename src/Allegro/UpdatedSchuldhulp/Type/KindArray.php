<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class KindArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TKind
     */
    private $TKind;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TKind
     */
    public function getTKind()
    {
        return $this->TKind;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TKind $TKind
     * @return KindArray
     */
    public function withTKind($TKind)
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }
}


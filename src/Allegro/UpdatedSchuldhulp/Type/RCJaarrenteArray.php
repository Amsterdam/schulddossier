<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class RCJaarrenteArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRCJaarrente
     */
    private $TRCJaarrente;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRCJaarrente
     */
    public function getTRCJaarrente()
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRCJaarrente $TRCJaarrente
     * @return RCJaarrenteArray
     */
    public function withTRCJaarrente($TRCJaarrente)
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }
}


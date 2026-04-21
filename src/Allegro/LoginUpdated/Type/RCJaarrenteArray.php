<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class RCJaarrenteArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRCJaarrente
     */
    private $TRCJaarrente;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRCJaarrente
     */
    public function getTRCJaarrente()
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRCJaarrente $TRCJaarrente
     * @return RCJaarrenteArray
     */
    public function withTRCJaarrente($TRCJaarrente)
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }
}

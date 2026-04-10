<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class RCJaarrenteArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRCJaarrente
     */
    private $TRCJaarrente;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRCJaarrente
     */
    public function getTRCJaarrente()
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRCJaarrente $TRCJaarrente
     * @return RCJaarrenteArray
     */
    public function withTRCJaarrente($TRCJaarrente)
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }
}


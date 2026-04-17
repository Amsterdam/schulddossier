<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class RCJaarrenteArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRCJaarrente
     */
    private $TRCJaarrente;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRCJaarrente
     */
    public function getTRCJaarrente()
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TRCJaarrente $TRCJaarrente
     * @return RCJaarrenteArray
     */
    public function withTRCJaarrente($TRCJaarrente)
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }
}


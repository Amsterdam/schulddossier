<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class CasusNotitieArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusNotitie
     */
    private $TCasusNotitie;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusNotitie
     */
    public function getTCasusNotitie()
    {
        return $this->TCasusNotitie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusNotitie $TCasusNotitie
     * @return CasusNotitieArray
     */
    public function withTCasusNotitie($TCasusNotitie)
    {
        $new = clone $this;
        $new->TCasusNotitie = $TCasusNotitie;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class KindArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TKind
     */
    private $TKind;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TKind
     */
    public function getTKind()
    {
        return $this->TKind;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TKind $TKind
     * @return KindArray
     */
    public function withTKind($TKind)
    {
        $new = clone $this;
        $new->TKind = $TKind;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TContract2Array
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2
     */
    private $TContract2;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2
     */
    public function getTContract2()
    {
        return $this->TContract2;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContract2 $TContract2
     * @return TContract2Array
     */
    public function withTContract2($TContract2)
    {
        $new = clone $this;
        $new->TContract2 = $TContract2;

        return $new;
    }
}


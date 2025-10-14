<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class IntegerArray
{
    /**
     * @var int
     */
    private $int;

    /**
     * @return int
     */
    public function getInt()
    {
        return $this->int;
    }

    /**
     * @param int $int
     * @return IntegerArray
     */
    public function withInt($int)
    {
        $new = clone $this;
        $new->int = $int;

        return $new;
    }
}


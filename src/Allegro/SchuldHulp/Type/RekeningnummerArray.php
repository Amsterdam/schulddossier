<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class RekeningnummerArray
{
    /**
     * @var string
     */
    private $string;

    /**
     * @return string
     */
    public function getString()
    {
        return $this->string;
    }

    /**
     * @param string $string
     * @return RekeningnummerArray
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}


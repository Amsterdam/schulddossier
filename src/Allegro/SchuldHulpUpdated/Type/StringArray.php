<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class StringArray
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
     * @return StringArray
     */
    public function withString($string)
    {
        $new = clone $this;
        $new->string = $string;

        return $new;
    }
}


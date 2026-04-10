<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class StringArrayArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\StringArray
     */
    private $StringArray;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\StringArray
     */
    public function getStringArray()
    {
        return $this->StringArray;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\StringArray $StringArray
     * @return StringArrayArray
     */
    public function withStringArray($StringArray)
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }
}


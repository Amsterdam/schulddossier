<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class StringArrayArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    private $StringArray;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray
     */
    public function getStringArray()
    {
        return $this->StringArray;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\StringArray $StringArray
     * @return StringArrayArray
     */
    public function withStringArray($StringArray)
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class StringArrayArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\StringArray
     */
    private $StringArray;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\StringArray
     */
    public function getStringArray()
    {
        return $this->StringArray;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\StringArray $StringArray
     * @return StringArrayArray
     */
    public function withStringArray($StringArray)
    {
        $new = clone $this;
        $new->StringArray = $StringArray;

        return $new;
    }
}


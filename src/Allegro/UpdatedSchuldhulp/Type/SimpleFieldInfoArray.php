<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SimpleFieldInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleFieldInfo
     */
    private $SimpleFieldInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleFieldInfo
     */
    public function getSimpleFieldInfo()
    {
        return $this->SimpleFieldInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleFieldInfo $SimpleFieldInfo
     * @return SimpleFieldInfoArray
     */
    public function withSimpleFieldInfo($SimpleFieldInfo)
    {
        $new = clone $this;
        $new->SimpleFieldInfo = $SimpleFieldInfo;

        return $new;
    }
}


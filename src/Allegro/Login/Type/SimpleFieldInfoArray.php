<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleFieldInfoArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfo>
     */
    private array $SimpleFieldInfo;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfo>
     */
    public function getSimpleFieldInfo() : array
    {
        return $this->SimpleFieldInfo;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleFieldInfo> $SimpleFieldInfo
     * @return static
     */
    public function withSimpleFieldInfo(array $SimpleFieldInfo) : static
    {
        $new = clone $this;
        $new->SimpleFieldInfo = $SimpleFieldInfo;

        return $new;
    }
}


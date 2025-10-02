<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SimpleRequestInfoArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo>
     */
    private array $SimpleRequestInfo;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo>
     */
    public function getSimpleRequestInfo() : array
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SimpleRequestInfo> $SimpleRequestInfo
     * @return static
     */
    public function withSimpleRequestInfo(array $SimpleRequestInfo) : static
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TSorteerInfoArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSorteerInfo>
     */
    private array $TSorteerInfo;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSorteerInfo>
     */
    public function getTSorteerInfo() : array
    {
        return $this->TSorteerInfo;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSorteerInfo> $TSorteerInfo
     * @return static
     */
    public function withTSorteerInfo(array $TSorteerInfo) : static
    {
        $new = clone $this;
        $new->TSorteerInfo = $TSorteerInfo;

        return $new;
    }
}


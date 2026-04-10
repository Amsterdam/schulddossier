<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TSorteerInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSorteerInfo
     */
    private $TSorteerInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSorteerInfo
     */
    public function getTSorteerInfo()
    {
        return $this->TSorteerInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TSorteerInfo $TSorteerInfo
     * @return TSorteerInfoArray
     */
    public function withTSorteerInfo($TSorteerInfo)
    {
        $new = clone $this;
        $new->TSorteerInfo = $TSorteerInfo;

        return $new;
    }
}


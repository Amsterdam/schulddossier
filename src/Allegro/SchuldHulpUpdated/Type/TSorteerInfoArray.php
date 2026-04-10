<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class TSorteerInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSorteerInfo
     */
    private $TSorteerInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSorteerInfo
     */
    public function getTSorteerInfo()
    {
        return $this->TSorteerInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TSorteerInfo $TSorteerInfo
     * @return TSorteerInfoArray
     */
    public function withTSorteerInfo($TSorteerInfo)
    {
        $new = clone $this;
        $new->TSorteerInfo = $TSorteerInfo;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TSorteerInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo
     */
    private $TSorteerInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo
     */
    public function getTSorteerInfo()
    {
        return $this->TSorteerInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TSorteerInfo $TSorteerInfo
     * @return TSorteerInfoArray
     */
    public function withTSorteerInfo($TSorteerInfo)
    {
        $new = clone $this;
        $new->TSorteerInfo = $TSorteerInfo;

        return $new;
    }
}


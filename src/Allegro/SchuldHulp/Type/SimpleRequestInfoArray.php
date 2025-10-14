<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class SimpleRequestInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo
     */
    private $SimpleRequestInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo
     */
    public function getSimpleRequestInfo()
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\SimpleRequestInfo $SimpleRequestInfo
     * @return SimpleRequestInfoArray
     */
    public function withSimpleRequestInfo($SimpleRequestInfo)
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class SimpleRequestInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleRequestInfo
     */
    private $SimpleRequestInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleRequestInfo
     */
    public function getSimpleRequestInfo()
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\SimpleRequestInfo $SimpleRequestInfo
     * @return SimpleRequestInfoArray
     */
    public function withSimpleRequestInfo($SimpleRequestInfo)
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }
}


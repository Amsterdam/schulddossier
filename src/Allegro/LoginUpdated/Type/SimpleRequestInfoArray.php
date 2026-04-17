<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class SimpleRequestInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleRequestInfo
     */
    private $SimpleRequestInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleRequestInfo
     */
    public function getSimpleRequestInfo()
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\SimpleRequestInfo $SimpleRequestInfo
     * @return SimpleRequestInfoArray
     */
    public function withSimpleRequestInfo($SimpleRequestInfo)
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }
}


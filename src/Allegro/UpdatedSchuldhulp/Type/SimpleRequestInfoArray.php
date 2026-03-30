<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class SimpleRequestInfoArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleRequestInfo
     */
    private $SimpleRequestInfo;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleRequestInfo
     */
    public function getSimpleRequestInfo()
    {
        return $this->SimpleRequestInfo;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\SimpleRequestInfo $SimpleRequestInfo
     * @return SimpleRequestInfoArray
     */
    public function withSimpleRequestInfo($SimpleRequestInfo)
    {
        $new = clone $this;
        $new->SimpleRequestInfo = $SimpleRequestInfo;

        return $new;
    }
}


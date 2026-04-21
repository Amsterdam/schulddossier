<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class RelatiecodeBedrijfcodeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRelatiecodeBedrijfcode
     */
    private $TRelatiecodeBedrijfcode;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRelatiecodeBedrijfcode
     */
    public function getTRelatiecodeBedrijfcode()
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRelatiecodeBedrijfcode $TRelatiecodeBedrijfcode
     * @return RelatiecodeBedrijfcodeArray
     */
    public function withTRelatiecodeBedrijfcode($TRelatiecodeBedrijfcode)
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }
}


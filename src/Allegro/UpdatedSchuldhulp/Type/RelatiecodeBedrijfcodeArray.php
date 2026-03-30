<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class RelatiecodeBedrijfcodeArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRelatiecodeBedrijfcode
     */
    private $TRelatiecodeBedrijfcode;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRelatiecodeBedrijfcode
     */
    public function getTRelatiecodeBedrijfcode()
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TRelatiecodeBedrijfcode $TRelatiecodeBedrijfcode
     * @return RelatiecodeBedrijfcodeArray
     */
    public function withTRelatiecodeBedrijfcode($TRelatiecodeBedrijfcode)
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }
}


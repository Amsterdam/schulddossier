<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class RelatiecodeBedrijfcodeArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode>
     */
    private array $TRelatiecodeBedrijfcode;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode>
     */
    public function getTRelatiecodeBedrijfcode() : array
    {
        return $this->TRelatiecodeBedrijfcode;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatiecodeBedrijfcode> $TRelatiecodeBedrijfcode
     * @return static
     */
    public function withTRelatiecodeBedrijfcode(array $TRelatiecodeBedrijfcode) : static
    {
        $new = clone $this;
        $new->TRelatiecodeBedrijfcode = $TRelatiecodeBedrijfcode;

        return $new;
    }
}


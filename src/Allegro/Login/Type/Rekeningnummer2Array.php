<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class Rekeningnummer2Array
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRekeningnummer>
     */
    private array $TRekeningnummer;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRekeningnummer>
     */
    public function getTRekeningnummer() : array
    {
        return $this->TRekeningnummer;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRekeningnummer> $TRekeningnummer
     * @return static
     */
    public function withTRekeningnummer(array $TRekeningnummer) : static
    {
        $new = clone $this;
        $new->TRekeningnummer = $TRekeningnummer;

        return $new;
    }
}


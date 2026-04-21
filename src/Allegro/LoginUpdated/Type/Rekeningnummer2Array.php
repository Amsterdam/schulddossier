<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class Rekeningnummer2Array
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRekeningnummer
     */
    private $TRekeningnummer;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRekeningnummer
     */
    public function getTRekeningnummer()
    {
        return $this->TRekeningnummer;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TRekeningnummer $TRekeningnummer
     * @return Rekeningnummer2Array
     */
    public function withTRekeningnummer($TRekeningnummer)
    {
        $new = clone $this;
        $new->TRekeningnummer = $TRekeningnummer;

        return $new;
    }
}

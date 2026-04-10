<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class Rekeningnummer2Array
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRekeningnummer
     */
    private $TRekeningnummer;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRekeningnummer
     */
    public function getTRekeningnummer()
    {
        return $this->TRekeningnummer;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TRekeningnummer $TRekeningnummer
     * @return Rekeningnummer2Array
     */
    public function withTRekeningnummer($TRekeningnummer)
    {
        $new = clone $this;
        $new->TRekeningnummer = $TRekeningnummer;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class Rekeningnummer2Array implements RequestInterface
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer>
     */
    private array $TRekeningnummer;

    /**
     * Constructor
     *
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer> $TRekeningnummer
     */
    public function __construct(array $TRekeningnummer)
    {
        $this->TRekeningnummer = $TRekeningnummer;
    }

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer>
     */
    public function getTRekeningnummer() : array
    {
        return $this->TRekeningnummer;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer> $TRekeningnummer
     * @return static
     */
    public function withTRekeningnummer(array $TRekeningnummer) : static
    {
        $new = clone $this;
        $new->TRekeningnummer = $TRekeningnummer;

        return $new;
    }
}


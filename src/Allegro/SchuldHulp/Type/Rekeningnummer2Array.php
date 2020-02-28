<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class Rekeningnummer2Array implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer
     */
    private $TRekeningnummer;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer $TRekeningnummer
     */
    public function __construct($TRekeningnummer)
    {
        $this->TRekeningnummer = $TRekeningnummer;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer
     */
    public function getTRekeningnummer()
    {
        return $this->TRekeningnummer;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRekeningnummer $TRekeningnummer
     * @return Rekeningnummer2Array
     */
    public function withTRekeningnummer($TRekeningnummer)
    {
        $new = clone $this;
        $new->TRekeningnummer = $TRekeningnummer;

        return $new;
    }


}


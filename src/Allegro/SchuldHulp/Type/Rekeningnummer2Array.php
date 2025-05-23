<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class Rekeningnummer2Array implements RequestInterface
{

    /**
     * @var TRekeningnummer
     */
    private $TRekeningnummer;

    /**
     * Constructor
     *
     * @var TRekeningnummer $TRekeningnummer
     */
    public function __construct($TRekeningnummer)
    {
        $this->TRekeningnummer = $TRekeningnummer;
    }

    /**
     * @return TRekeningnummer
     */
    public function getTRekeningnummer()
    {
        return $this->TRekeningnummer;
    }

    /**
     * @param TRekeningnummer $TRekeningnummer
     * @return Rekeningnummer2Array
     */
    public function withTRekeningnummer($TRekeningnummer)
    {
        $new = clone $this;
        $new->TRekeningnummer = $TRekeningnummer;

        return $new;
    }


}


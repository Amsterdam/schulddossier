<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSaldoReserveringen implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SaldoReserveringArray
     */
    private $SaldoReserveringen;

    /**
     * @var float
     */
    private $Totaal;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SaldoReserveringArray $SaldoReserveringen
     * @var float $Totaal
     */
    public function __construct($SaldoReserveringen, $Totaal)
    {
        $this->SaldoReserveringen = $SaldoReserveringen;
        $this->Totaal = $Totaal;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SaldoReserveringArray
     */
    public function getSaldoReserveringen()
    {
        return $this->SaldoReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\SaldoReserveringArray $SaldoReserveringen
     * @return TSaldoReserveringen
     */
    public function withSaldoReserveringen($SaldoReserveringen)
    {
        $new = clone $this;
        $new->SaldoReserveringen = $SaldoReserveringen;

        return $new;
    }

    /**
     * @return float
     */
    public function getTotaal()
    {
        return $this->Totaal;
    }

    /**
     * @param float $Totaal
     * @return TSaldoReserveringen
     */
    public function withTotaal($Totaal)
    {
        $new = clone $this;
        $new->Totaal = $Totaal;

        return $new;
    }
}

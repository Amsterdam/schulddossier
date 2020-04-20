<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAfspraakSoorten implements RequestInterface
{

    /**
     * @var string
     */
    private $Code;

    /**
     * @var string
     */
    private $Omschrijving;

    /**
     * Constructor
     *
     * @var string $Code
     * @var string $Omschrijving
     */
    public function __construct($Code, $Omschrijving)
    {
        $this->Code = $Code;
        $this->Omschrijving = $Omschrijving;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return TAfspraakSoorten
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving()
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return TAfspraakSoorten
     */
    public function withOmschrijving($Omschrijving)
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }


}


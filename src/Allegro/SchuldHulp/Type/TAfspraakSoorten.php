<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAfspraakSoorten implements RequestInterface
{
    /**
     * @var string
     */
    private string $Code;

    /**
     * @var string
     */
    private string $Omschrijving;

    /**
     * Constructor
     *
     * @param string $Code
     * @param string $Omschrijving
     */
    public function __construct(string $Code, string $Omschrijving)
    {
        $this->Code = $Code;
        $this->Omschrijving = $Omschrijving;
    }

    /**
     * @return string
     */
    public function getCode() : string
    {
        return $this->Code;
    }

    /**
     * @param string $Code
     * @return static
     */
    public function withCode(string $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return string
     */
    public function getOmschrijving() : string
    {
        return $this->Omschrijving;
    }

    /**
     * @param string $Omschrijving
     * @return static
     */
    public function withOmschrijving(string $Omschrijving) : static
    {
        $new = clone $this;
        $new->Omschrijving = $Omschrijving;

        return $new;
    }
}


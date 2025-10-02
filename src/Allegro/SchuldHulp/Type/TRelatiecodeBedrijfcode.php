<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TRelatiecodeBedrijfcode implements RequestInterface
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Bedrijfscode;

    /**
     * @var string
     */
    private string $Bedrijfsnaam;

    /**
     * Constructor
     *
     * @param int $Relatiecode
     * @param int $Bedrijfscode
     * @param string $Bedrijfsnaam
     */
    public function __construct(int $Relatiecode, int $Bedrijfscode, string $Bedrijfsnaam)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Bedrijfscode = $Bedrijfscode;
        $this->Bedrijfsnaam = $Bedrijfsnaam;
    }

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getBedrijfscode() : int
    {
        return $this->Bedrijfscode;
    }

    /**
     * @param int $Bedrijfscode
     * @return static
     */
    public function withBedrijfscode(int $Bedrijfscode) : static
    {
        $new = clone $this;
        $new->Bedrijfscode = $Bedrijfscode;

        return $new;
    }

    /**
     * @return string
     */
    public function getBedrijfsnaam() : string
    {
        return $this->Bedrijfsnaam;
    }

    /**
     * @param string $Bedrijfsnaam
     * @return static
     */
    public function withBedrijfsnaam(string $Bedrijfsnaam) : static
    {
        $new = clone $this;
        $new->Bedrijfsnaam = $Bedrijfsnaam;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TTrajectSoort implements RequestInterface
{
    /**
     * @var string
     */
    private string $Trajectnaam;

    /**
     * @var int
     */
    private int $Trajectcodes;

    /**
     * Constructor
     *
     * @param string $Trajectnaam
     * @param int $Trajectcodes
     */
    public function __construct(string $Trajectnaam, int $Trajectcodes)
    {
        $this->Trajectnaam = $Trajectnaam;
        $this->Trajectcodes = $Trajectcodes;
    }

    /**
     * @return string
     */
    public function getTrajectnaam() : string
    {
        return $this->Trajectnaam;
    }

    /**
     * @param string $Trajectnaam
     * @return static
     */
    public function withTrajectnaam(string $Trajectnaam) : static
    {
        $new = clone $this;
        $new->Trajectnaam = $Trajectnaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getTrajectcodes() : int
    {
        return $this->Trajectcodes;
    }

    /**
     * @param int $Trajectcodes
     * @return static
     */
    public function withTrajectcodes(int $Trajectcodes) : static
    {
        $new = clone $this;
        $new->Trajectcodes = $Trajectcodes;

        return $new;
    }
}


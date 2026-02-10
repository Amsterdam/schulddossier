<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TTrajectSoort implements RequestInterface
{
    /**
     * @var string
     */
    private $Trajectnaam;

    /**
     * @var int
     */
    private $Trajectcodes;

    /**
     * Constructor
     *
     * @var string $Trajectnaam
     * @var int $Trajectcodes
     */
    public function __construct($Trajectnaam, $Trajectcodes)
    {
        $this->Trajectnaam = $Trajectnaam;
        $this->Trajectcodes = $Trajectcodes;
    }

    /**
     * @return string
     */
    public function getTrajectnaam()
    {
        return $this->Trajectnaam;
    }

    /**
     * @param string $Trajectnaam
     * @return TTrajectSoort
     */
    public function withTrajectnaam($Trajectnaam)
    {
        $new = clone $this;
        $new->Trajectnaam = $Trajectnaam;

        return $new;
    }

    /**
     * @return int
     */
    public function getTrajectcodes()
    {
        return $this->Trajectcodes;
    }

    /**
     * @param int $Trajectcodes
     * @return TTrajectSoort
     */
    public function withTrajectcodes($Trajectcodes)
    {
        $new = clone $this;
        $new->Trajectcodes = $Trajectcodes;

        return $new;
    }
}

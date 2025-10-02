<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TTrajectSoort
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


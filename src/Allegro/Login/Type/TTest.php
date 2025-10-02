<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TTest
{
    /**
     * @var string
     */
    private string $Veld1;

    /**
     * @var int
     */
    private int $Veld2;

    /**
     * @return string
     */
    public function getVeld1() : string
    {
        return $this->Veld1;
    }

    /**
     * @param string $Veld1
     * @return static
     */
    public function withVeld1(string $Veld1) : static
    {
        $new = clone $this;
        $new->Veld1 = $Veld1;

        return $new;
    }

    /**
     * @return int
     */
    public function getVeld2() : int
    {
        return $this->Veld2;
    }

    /**
     * @param int $Veld2
     * @return static
     */
    public function withVeld2(int $Veld2) : static
    {
        $new = clone $this;
        $new->Veld2 = $Veld2;

        return $new;
    }
}


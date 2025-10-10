<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TTest
{
    /**
     * @var string
     */
    private $Veld1;

    /**
     * @var int
     */
    private $Veld2;

    /**
     * @return string
     */
    public function getVeld1()
    {
        return $this->Veld1;
    }

    /**
     * @param string $Veld1
     * @return TTest
     */
    public function withVeld1($Veld1)
    {
        $new = clone $this;
        $new->Veld1 = $Veld1;

        return $new;
    }

    /**
     * @return int
     */
    public function getVeld2()
    {
        return $this->Veld2;
    }

    /**
     * @param int $Veld2
     * @return TTest
     */
    public function withVeld2($Veld2)
    {
        $new = clone $this;
        $new->Veld2 = $Veld2;

        return $new;
    }
}


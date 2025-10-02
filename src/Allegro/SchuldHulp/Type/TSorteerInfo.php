<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSorteerInfo implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering $Veld;

    /**
     * @var bool
     */
    private bool $Oplopend;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering $Veld
     * @param bool $Oplopend
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering $Veld, bool $Oplopend)
    {
        $this->Veld = $Veld;
        $this->Oplopend = $Oplopend;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering
     */
    public function getVeld() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering
    {
        return $this->Veld;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering $Veld
     * @return static
     */
    public function withVeld(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EVeldSortering $Veld) : static
    {
        $new = clone $this;
        $new->Veld = $Veld;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOplopend() : bool
    {
        return $this->Oplopend;
    }

    /**
     * @param bool $Oplopend
     * @return static
     */
    public function withOplopend(bool $Oplopend) : static
    {
        $new = clone $this;
        $new->Oplopend = $Oplopend;

        return $new;
    }
}


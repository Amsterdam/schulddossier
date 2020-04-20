<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TSorteerInfo implements RequestInterface
{

    /**
     * @var string
     */
    private $Veld;

    /**
     * @var bool
     */
    private $Oplopend;

    /**
     * Constructor
     *
     * @var string $Veld
     * @var bool $Oplopend
     */
    public function __construct($Veld, $Oplopend)
    {
        $this->Veld = $Veld;
        $this->Oplopend = $Oplopend;
    }

    /**
     * @return string
     */
    public function getVeld()
    {
        return $this->Veld;
    }

    /**
     * @param string $Veld
     * @return TSorteerInfo
     */
    public function withVeld($Veld)
    {
        $new = clone $this;
        $new->Veld = $Veld;

        return $new;
    }

    /**
     * @return bool
     */
    public function getOplopend()
    {
        return $this->Oplopend;
    }

    /**
     * @param bool $Oplopend
     * @return TSorteerInfo
     */
    public function withOplopend($Oplopend)
    {
        $new = clone $this;
        $new->Oplopend = $Oplopend;

        return $new;
    }


}


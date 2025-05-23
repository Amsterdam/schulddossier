<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class UitgavenArray implements RequestInterface
{

    /**
     * @var TUitgaven
     */
    private $TUitgaven;

    /**
     * Constructor
     *
     * @var TUitgaven $TUitgaven
     */
    public function __construct($TUitgaven)
    {
        $this->TUitgaven = $TUitgaven;
    }

    /**
     * @return TUitgaven
     */
    public function getTUitgaven()
    {
        return $this->TUitgaven;
    }

    /**
     * @param TUitgaven $TUitgaven
     * @return UitgavenArray
     */
    public function withTUitgaven($TUitgaven)
    {
        $new = clone $this;
        $new->TUitgaven = $TUitgaven;

        return $new;
    }


}


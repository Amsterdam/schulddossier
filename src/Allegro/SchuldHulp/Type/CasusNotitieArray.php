<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CasusNotitieArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie
     */
    private $TCasusNotitie;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie $TCasusNotitie
     */
    public function __construct($TCasusNotitie)
    {
        $this->TCasusNotitie = $TCasusNotitie;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie
     */
    public function getTCasusNotitie()
    {
        return $this->TCasusNotitie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusNotitie $TCasusNotitie
     * @return CasusNotitieArray
     */
    public function withTCasusNotitie($TCasusNotitie)
    {
        $new = clone $this;
        $new->TCasusNotitie = $TCasusNotitie;

        return $new;
    }
}

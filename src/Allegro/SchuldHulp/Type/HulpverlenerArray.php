<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class HulpverlenerArray implements RequestInterface
{

    /**
     * @var THulpverlener
     */
    private $THulpverlener;

    /**
     * Constructor
     *
     * @var THulpverlener $THulpverlener
     */
    public function __construct($THulpverlener)
    {
        $this->THulpverlener = $THulpverlener;
    }

    /**
     * @return THulpverlener
     */
    public function getTHulpverlener()
    {
        return $this->THulpverlener;
    }

    /**
     * @param THulpverlener $THulpverlener
     * @return HulpverlenerArray
     */
    public function withTHulpverlener($THulpverlener)
    {
        $new = clone $this;
        $new->THulpverlener = $THulpverlener;

        return $new;
    }


}


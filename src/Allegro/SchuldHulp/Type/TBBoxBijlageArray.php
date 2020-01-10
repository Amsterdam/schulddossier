<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxBijlageArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage
     */
    private $TBBoxBijlage;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage $TBBoxBijlage
     */
    public function __construct($TBBoxBijlage)
    {
        $this->TBBoxBijlage = $TBBoxBijlage;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage
     */
    public function getTBBoxBijlage()
    {
        return $this->TBBoxBijlage;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxBijlage $TBBoxBijlage
     * @return TBBoxBijlageArray
     */
    public function withTBBoxBijlage($TBBoxBijlage)
    {
        $new = clone $this;
        $new->TBBoxBijlage = $TBBoxBijlage;

        return $new;
    }


}


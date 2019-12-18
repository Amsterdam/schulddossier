<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxGeadresseerdeArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde
     */
    private $TBBoxGeadresseerde;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde $TBBoxGeadresseerde
     */
    public function __construct($TBBoxGeadresseerde)
    {
        $this->TBBoxGeadresseerde = $TBBoxGeadresseerde;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde
     */
    public function getTBBoxGeadresseerde()
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde $TBBoxGeadresseerde
     * @return TBBoxGeadresseerdeArray
     */
    public function withTBBoxGeadresseerde($TBBoxGeadresseerde)
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }


}


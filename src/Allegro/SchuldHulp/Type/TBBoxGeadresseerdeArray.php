<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TBBoxGeadresseerdeArray implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TBBoxGeadresseerde
     */
    private $TBBoxGeadresseerde;

    /**
     * Constructor
     *
     * @var TBBoxGeadresseerde $TBBoxGeadresseerde
     */
    public function __construct($TBBoxGeadresseerde)
    {
        $this->TBBoxGeadresseerde = $TBBoxGeadresseerde;
    }

    /**
     * @return TBBoxGeadresseerde
     */
    public function getTBBoxGeadresseerde()
    {
        return $this->TBBoxGeadresseerde;
    }

    /**
     * @param TBBoxGeadresseerde $TBBoxGeadresseerde
     * @return TBBoxGeadresseerdeArray
     */
    public function withTBBoxGeadresseerde($TBBoxGeadresseerde)
    {
        $new = clone $this;
        $new->TBBoxGeadresseerde = $TBBoxGeadresseerde;

        return $new;
    }


}


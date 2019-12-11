<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriftReserveringen implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftReseveringArray
     */
    private $AfschriftReserveringen;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftReseveringArray $AfschriftReserveringen
     */
    public function __construct($AfschriftReserveringen)
    {
        $this->AfschriftReserveringen = $AfschriftReserveringen;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen()
    {
        return $this->AfschriftReserveringen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return TPRSAfschriftReserveringen
     */
    public function withAfschriftReserveringen($AfschriftReserveringen)
    {
        $new = clone $this;
        $new->AfschriftReserveringen = $AfschriftReserveringen;

        return $new;
    }


}


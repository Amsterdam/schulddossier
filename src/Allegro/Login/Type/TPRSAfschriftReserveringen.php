<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriftReserveringen implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftReseveringArray
     */
    private $AfschriftReserveringen;

    /**
     * Constructor
     *
     * @var PRSAfschriftReseveringArray $AfschriftReserveringen
     */
    public function __construct($AfschriftReserveringen)
    {
        $this->AfschriftReserveringen = $AfschriftReserveringen;
    }

    /**
     * @return PRSAfschriftReseveringArray
     */
    public function getAfschriftReserveringen()
    {
        return $this->AfschriftReserveringen;
    }

    /**
     * @param PRSAfschriftReseveringArray $AfschriftReserveringen
     * @return TPRSAfschriftReserveringen
     */
    public function withAfschriftReserveringen($AfschriftReserveringen)
    {
        $new = clone $this;
        $new->AfschriftReserveringen = $AfschriftReserveringen;

        return $new;
    }


}


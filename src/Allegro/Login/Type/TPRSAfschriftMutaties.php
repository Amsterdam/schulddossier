<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriftMutaties implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\PRSAfschriftMutatieArray
     */
    private $AfschriftMutaties;

    /**
     * Constructor
     *
     * @var PRSAfschriftMutatieArray $AfschriftMutaties
     */
    public function __construct($AfschriftMutaties)
    {
        $this->AfschriftMutaties = $AfschriftMutaties;
    }

    /**
     * @return PRSAfschriftMutatieArray
     */
    public function getAfschriftMutaties()
    {
        return $this->AfschriftMutaties;
    }

    /**
     * @param PRSAfschriftMutatieArray $AfschriftMutaties
     * @return TPRSAfschriftMutaties
     */
    public function withAfschriftMutaties($AfschriftMutaties)
    {
        $new = clone $this;
        $new->AfschriftMutaties = $AfschriftMutaties;

        return $new;
    }


}


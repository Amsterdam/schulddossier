<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TPRSMutaties implements RequestInterface
{

    /**
     * @var PRSMutatieArray
     */
    private $Mutaties;

    /**
     * Constructor
     *
     * @var PRSMutatieArray $Mutaties
     */
    public function __construct($Mutaties)
    {
        $this->Mutaties = $Mutaties;
    }

    /**
     * @return PRSMutatieArray
     */
    public function getMutaties()
    {
        return $this->Mutaties;
    }

    /**
     * @param PRSMutatieArray $Mutaties
     * @return TPRSMutaties
     */
    public function withMutaties($Mutaties)
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }


}


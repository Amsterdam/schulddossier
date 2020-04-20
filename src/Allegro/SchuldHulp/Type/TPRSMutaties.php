<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TPRSMutaties implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
     */
    private $Mutaties;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     */
    public function __construct($Mutaties)
    {
        $this->Mutaties = $Mutaties;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
     */
    public function getMutaties()
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     * @return TPRSMutaties
     */
    public function withMutaties($Mutaties)
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }


}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPRSMutaties implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties)
    {
        $this->Mutaties = $Mutaties;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
     */
    public function getMutaties() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray
    {
        return $this->Mutaties;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties
     * @return static
     */
    public function withMutaties(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSMutatieArray $Mutaties) : static
    {
        $new = clone $this;
        $new->Mutaties = $Mutaties;

        return $new;
    }
}


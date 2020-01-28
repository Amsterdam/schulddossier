<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TPRSAfschriften implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftArray
     */
    private $Afschriften;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftArray $Afschriften
     */
    public function __construct($Afschriften)
    {
        $this->Afschriften = $Afschriften;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftArray
     */
    public function getAfschriften()
    {
        return $this->Afschriften;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\PRSAfschriftArray $Afschriften
     * @return TPRSAfschriften
     */
    public function withAfschriften($Afschriften)
    {
        $new = clone $this;
        $new->Afschriften = $Afschriften;

        return $new;
    }


}


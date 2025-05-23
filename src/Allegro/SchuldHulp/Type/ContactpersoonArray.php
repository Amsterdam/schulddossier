<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class ContactpersoonArray implements RequestInterface
{

    /**
     * @var TContactpersoon
     */
    private $TContactpersoon;

    /**
     * Constructor
     *
     * @var TContactpersoon $TContactpersoon
     */
    public function __construct($TContactpersoon)
    {
        $this->TContactpersoon = $TContactpersoon;
    }

    /**
     * @return TContactpersoon
     */
    public function getTContactpersoon()
    {
        return $this->TContactpersoon;
    }

    /**
     * @param TContactpersoon $TContactpersoon
     * @return ContactpersoonArray
     */
    public function withTContactpersoon($TContactpersoon)
    {
        $new = clone $this;
        $new->TContactpersoon = $TContactpersoon;

        return $new;
    }


}


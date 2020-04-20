<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ContactpersoonArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon
     */
    private $TContactpersoon;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon $TContactpersoon
     */
    public function __construct($TContactpersoon)
    {
        $this->TContactpersoon = $TContactpersoon;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon
     */
    public function getTContactpersoon()
    {
        return $this->TContactpersoon;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContactpersoon $TContactpersoon
     * @return ContactpersoonArray
     */
    public function withTContactpersoon($TContactpersoon)
    {
        $new = clone $this;
        $new->TContactpersoon = $TContactpersoon;

        return $new;
    }


}


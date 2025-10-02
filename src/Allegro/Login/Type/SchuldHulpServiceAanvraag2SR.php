<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceAanvraag2SR implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR $aAanvraag2SR;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR $aAanvraag2SR
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR $aAanvraag2SR)
    {
        $this->aAanvraag2SR = $aAanvraag2SR;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR
     */
    public function getAAanvraag2SR() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR
    {
        return $this->aAanvraag2SR;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR $aAanvraag2SR
     * @return static
     */
    public function withAAanvraag2SR(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAanvraag2SR $aAanvraag2SR) : static
    {
        $new = clone $this;
        $new->aAanvraag2SR = $aAanvraag2SR;

        return $new;
    }
}


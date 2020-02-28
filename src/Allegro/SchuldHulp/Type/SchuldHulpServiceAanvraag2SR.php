<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class SchuldHulpServiceAanvraag2SR implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2SR
     */
    private $aAanvraag2SR;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2SR $aAanvraag2SR
     */
    public function __construct($aAanvraag2SR)
    {
        $this->aAanvraag2SR = $aAanvraag2SR;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2SR
     */
    public function getAAanvraag2SR()
    {
        return $this->aAanvraag2SR;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAanvraag2SR $aAanvraag2SR
     * @return SchuldHulpServiceAanvraag2SR
     */
    public function withAAanvraag2SR($aAanvraag2SR)
    {
        $new = clone $this;
        $new->aAanvraag2SR = $aAanvraag2SR;

        return $new;
    }


}


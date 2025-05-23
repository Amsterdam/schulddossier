<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class OpenVraagArray implements RequestInterface
{

    /**
     * @var TOpenVraag
     */
    private $TOpenVraag;

    /**
     * Constructor
     *
     * @var TOpenVraag $TOpenVraag
     */
    public function __construct($TOpenVraag)
    {
        $this->TOpenVraag = $TOpenVraag;
    }

    /**
     * @return TOpenVraag
     */
    public function getTOpenVraag()
    {
        return $this->TOpenVraag;
    }

    /**
     * @param TOpenVraag $TOpenVraag
     * @return OpenVraagArray
     */
    public function withTOpenVraag($TOpenVraag)
    {
        $new = clone $this;
        $new->TOpenVraag = $TOpenVraag;

        return $new;
    }


}


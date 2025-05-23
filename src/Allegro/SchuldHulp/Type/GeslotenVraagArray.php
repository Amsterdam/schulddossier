<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class GeslotenVraagArray implements RequestInterface
{

    /**
     * @var TGeslotenVraag
     */
    private $TGeslotenVraag;

    /**
     * Constructor
     *
     * @var TGeslotenVraag $TGeslotenVraag
     */
    public function __construct($TGeslotenVraag)
    {
        $this->TGeslotenVraag = $TGeslotenVraag;
    }

    /**
     * @return TGeslotenVraag
     */
    public function getTGeslotenVraag()
    {
        return $this->TGeslotenVraag;
    }

    /**
     * @param TGeslotenVraag $TGeslotenVraag
     * @return GeslotenVraagArray
     */
    public function withTGeslotenVraag($TGeslotenVraag)
    {
        $new = clone $this;
        $new->TGeslotenVraag = $TGeslotenVraag;

        return $new;
    }


}


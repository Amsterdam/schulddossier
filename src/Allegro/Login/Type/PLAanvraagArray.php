<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class PLAanvraagArray implements RequestInterface
{

    /**
     * @var TPLAanvraag
     */
    private $TPLAanvraag;

    /**
     * Constructor
     *
     * @var TPLAanvraag $TPLAanvraag
     */
    public function __construct($TPLAanvraag)
    {
        $this->TPLAanvraag = $TPLAanvraag;
    }

    /**
     * @return TPLAanvraag
     */
    public function getTPLAanvraag()
    {
        return $this->TPLAanvraag;
    }

    /**
     * @param TPLAanvraag $TPLAanvraag
     * @return PLAanvraagArray
     */
    public function withTPLAanvraag($TPLAanvraag)
    {
        $new = clone $this;
        $new->TPLAanvraag = $TPLAanvraag;

        return $new;
    }


}


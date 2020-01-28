<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class PLAanvraagArray implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag
     */
    private $TPLAanvraag;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag $TPLAanvraag
     */
    public function __construct($TPLAanvraag)
    {
        $this->TPLAanvraag = $TPLAanvraag;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag
     */
    public function getTPLAanvraag()
    {
        return $this->TPLAanvraag;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TPLAanvraag $TPLAanvraag
     * @return PLAanvraagArray
     */
    public function withTPLAanvraag($TPLAanvraag)
    {
        $new = clone $this;
        $new->TPLAanvraag = $TPLAanvraag;

        return $new;
    }


}


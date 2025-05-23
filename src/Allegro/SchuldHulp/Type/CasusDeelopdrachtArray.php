<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class CasusDeelopdrachtArray implements RequestInterface
{

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusDeelopdracht
     */
    private $TCasusDeelopdracht;

    /**
     * Constructor
     *
     * @var TCasusDeelopdracht $TCasusDeelopdracht
     */
    public function __construct($TCasusDeelopdracht)
    {
        $this->TCasusDeelopdracht = $TCasusDeelopdracht;
    }

    /**
     * @return TCasusDeelopdracht
     */
    public function getTCasusDeelopdracht()
    {
        return $this->TCasusDeelopdracht;
    }

    /**
     * @param TCasusDeelopdracht $TCasusDeelopdracht
     * @return CasusDeelopdrachtArray
     */
    public function withTCasusDeelopdracht($TCasusDeelopdracht)
    {
        $new = clone $this;
        $new->TCasusDeelopdracht = $TCasusDeelopdracht;

        return $new;
    }


}


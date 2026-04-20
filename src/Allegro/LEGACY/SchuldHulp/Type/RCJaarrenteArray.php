<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RCJaarrenteArray implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente
     */
    private $TRCJaarrente;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente $TRCJaarrente
     */
    public function __construct($TRCJaarrente)
    {
        $this->TRCJaarrente = $TRCJaarrente;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente
     */
    public function getTRCJaarrente()
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TRCJaarrente $TRCJaarrente
     * @return RCJaarrenteArray
     */
    public function withTRCJaarrente($TRCJaarrente)
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }
}

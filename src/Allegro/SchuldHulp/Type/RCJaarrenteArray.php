<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class RCJaarrenteArray implements RequestInterface
{

    /**
     * @var TRCJaarrente
     */
    private $TRCJaarrente;

    /**
     * Constructor
     *
     * @var TRCJaarrente $TRCJaarrente
     */
    public function __construct($TRCJaarrente)
    {
        $this->TRCJaarrente = $TRCJaarrente;
    }

    /**
     * @return TRCJaarrente
     */
    public function getTRCJaarrente()
    {
        return $this->TRCJaarrente;
    }

    /**
     * @param TRCJaarrente $TRCJaarrente
     * @return RCJaarrenteArray
     */
    public function withTRCJaarrente($TRCJaarrente)
    {
        $new = clone $this;
        $new->TRCJaarrente = $TRCJaarrente;

        return $new;
    }


}


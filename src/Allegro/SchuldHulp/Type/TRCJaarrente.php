<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TRCJaarrente implements RequestInterface
{

    /**
     * @var int
     */
    private $Jaar;

    /**
     * @var float
     */
    private $RentePositief;

    /**
     * @var float
     */
    private $RenteNegatief;

    /**
     * Constructor
     *
     * @var int $Jaar
     * @var float $RentePositief
     * @var float $RenteNegatief
     */
    public function __construct($Jaar, $RentePositief, $RenteNegatief)
    {
        $this->Jaar = $Jaar;
        $this->RentePositief = $RentePositief;
        $this->RenteNegatief = $RenteNegatief;
    }

    /**
     * @return int
     */
    public function getJaar()
    {
        return $this->Jaar;
    }

    /**
     * @param int $Jaar
     * @return TRCJaarrente
     */
    public function withJaar($Jaar)
    {
        $new = clone $this;
        $new->Jaar = $Jaar;

        return $new;
    }

    /**
     * @return float
     */
    public function getRentePositief()
    {
        return $this->RentePositief;
    }

    /**
     * @param float $RentePositief
     * @return TRCJaarrente
     */
    public function withRentePositief($RentePositief)
    {
        $new = clone $this;
        $new->RentePositief = $RentePositief;

        return $new;
    }

    /**
     * @return float
     */
    public function getRenteNegatief()
    {
        return $this->RenteNegatief;
    }

    /**
     * @param float $RenteNegatief
     * @return TRCJaarrente
     */
    public function withRenteNegatief($RenteNegatief)
    {
        $new = clone $this;
        $new->RenteNegatief = $RenteNegatief;

        return $new;
    }


}


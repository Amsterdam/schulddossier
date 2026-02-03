<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TBBoxBijlage implements RequestInterface
{
    /**
     * @var int
     */
    private $Code;

    /**
     * @var int
     */
    private $UniekVolgnummer;

    /**
     * @var string
     */
    private $Bijlage;

    /**
     * @var int
     */
    private $BijlageSize;

    /**
     * @var string
     */
    private $BijlageNaam;

    /**
     * Constructor
     *
     * @var int $Code
     * @var int $UniekVolgnummer
     * @var string $Bijlage
     * @var int $BijlageSize
     * @var string $BijlageNaam
     */
    public function __construct($Code, $UniekVolgnummer, $Bijlage, $BijlageSize, $BijlageNaam)
    {
        $this->Code = $Code;
        $this->UniekVolgnummer = $UniekVolgnummer;
        $this->Bijlage = $Bijlage;
        $this->BijlageSize = $BijlageSize;
        $this->BijlageNaam = $BijlageNaam;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TBBoxBijlage
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer()
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return TBBoxBijlage
     */
    public function withUniekVolgnummer($UniekVolgnummer)
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getBijlage()
    {
        return $this->Bijlage;
    }

    /**
     * @param string $Bijlage
     * @return TBBoxBijlage
     */
    public function withBijlage($Bijlage)
    {
        $new = clone $this;
        $new->Bijlage = $Bijlage;

        return $new;
    }

    /**
     * @return int
     */
    public function getBijlageSize()
    {
        return $this->BijlageSize;
    }

    /**
     * @param int $BijlageSize
     * @return TBBoxBijlage
     */
    public function withBijlageSize($BijlageSize)
    {
        $new = clone $this;
        $new->BijlageSize = $BijlageSize;

        return $new;
    }

    /**
     * @return string
     */
    public function getBijlageNaam()
    {
        return $this->BijlageNaam;
    }

    /**
     * @param string $BijlageNaam
     * @return TBBoxBijlage
     */
    public function withBijlageNaam($BijlageNaam)
    {
        $new = clone $this;
        $new->BijlageNaam = $BijlageNaam;

        return $new;
    }
}

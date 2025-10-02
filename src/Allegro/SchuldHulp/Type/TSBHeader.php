<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TSBHeader implements RequestInterface
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var bool
     */
    private bool $IsNPS;

    /**
     * Constructor
     *
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param bool $IsNPS
     */
    public function __construct(int $RelatieCode, int $Volgnummer, bool $IsNPS)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->IsNPS = $IsNPS;
    }

    /**
     * @return int
     */
    public function getRelatieCode() : int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode) : static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer() : int
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return static
     */
    public function withVolgnummer(int $Volgnummer) : static
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsNPS() : bool
    {
        return $this->IsNPS;
    }

    /**
     * @param bool $IsNPS
     * @return static
     */
    public function withIsNPS(bool $IsNPS) : static
    {
        $new = clone $this;
        $new->IsNPS = $IsNPS;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TSBHeader
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


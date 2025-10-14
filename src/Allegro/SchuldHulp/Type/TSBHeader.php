<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TSBHeader
{
    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var bool
     */
    private $IsNPS;

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TSBHeader
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return int
     */
    public function getVolgnummer()
    {
        return $this->Volgnummer;
    }

    /**
     * @param int $Volgnummer
     * @return TSBHeader
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return bool
     */
    public function getIsNPS()
    {
        return $this->IsNPS;
    }

    /**
     * @param bool $IsNPS
     * @return TSBHeader
     */
    public function withIsNPS($IsNPS)
    {
        $new = clone $this;
        $new->IsNPS = $IsNPS;

        return $new;
    }
}


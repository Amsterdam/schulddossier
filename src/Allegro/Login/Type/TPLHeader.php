<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TPLHeader
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
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Startdatum;

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
     * @return \DateTimeInterface
     */
    public function getStartdatum() : \DateTimeInterface
    {
        return $this->Startdatum;
    }

    /**
     * @param \DateTimeInterface $Startdatum
     * @return static
     */
    public function withStartdatum(\DateTimeInterface $Startdatum) : static
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }
}


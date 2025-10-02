<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TDKHeader
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
    private \DateTimeInterface $DatumUitbetaling;

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
    public function getDatumUitbetaling() : \DateTimeInterface
    {
        return $this->DatumUitbetaling;
    }

    /**
     * @param \DateTimeInterface $DatumUitbetaling
     * @return static
     */
    public function withDatumUitbetaling(\DateTimeInterface $DatumUitbetaling) : static
    {
        $new = clone $this;
        $new->DatumUitbetaling = $DatumUitbetaling;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TRCHeader
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Ingangsdatum;

    /**
     * @return int
     */
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

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
    public function getIngangsdatum() : \DateTimeInterface
    {
        return $this->Ingangsdatum;
    }

    /**
     * @param \DateTimeInterface $Ingangsdatum
     * @return static
     */
    public function withIngangsdatum(\DateTimeInterface $Ingangsdatum) : static
    {
        $new = clone $this;
        $new->Ingangsdatum = $Ingangsdatum;

        return $new;
    }
}


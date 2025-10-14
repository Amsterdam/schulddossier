<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TRCHeader
{
    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * @var \DateTimeInterface
     */
    private $Ingangsdatum;

    /**
     * @return int
     */
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TRCHeader
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

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
     * @return TRCHeader
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getIngangsdatum()
    {
        return $this->Ingangsdatum;
    }

    /**
     * @param \DateTimeInterface $Ingangsdatum
     * @return TRCHeader
     */
    public function withIngangsdatum($Ingangsdatum)
    {
        $new = clone $this;
        $new->Ingangsdatum = $Ingangsdatum;

        return $new;
    }
}


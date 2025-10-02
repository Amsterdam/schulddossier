<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TDocumentSleutel
{
    /**
     * @var string
     */
    private string $ComponentCode;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $ArchiefDatum;

    /**
     * @var string
     */
    private string $Kenmerk;

    /**
     * @var int
     */
    private int $Volgnummer;

    /**
     * @return string
     */
    public function getComponentCode() : string
    {
        return $this->ComponentCode;
    }

    /**
     * @param string $ComponentCode
     * @return static
     */
    public function withComponentCode(string $ComponentCode) : static
    {
        $new = clone $this;
        $new->ComponentCode = $ComponentCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getArchiefDatum() : \DateTimeInterface
    {
        return $this->ArchiefDatum;
    }

    /**
     * @param \DateTimeInterface $ArchiefDatum
     * @return static
     */
    public function withArchiefDatum(\DateTimeInterface $ArchiefDatum) : static
    {
        $new = clone $this;
        $new->ArchiefDatum = $ArchiefDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getKenmerk() : string
    {
        return $this->Kenmerk;
    }

    /**
     * @param string $Kenmerk
     * @return static
     */
    public function withKenmerk(string $Kenmerk) : static
    {
        $new = clone $this;
        $new->Kenmerk = $Kenmerk;

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
}


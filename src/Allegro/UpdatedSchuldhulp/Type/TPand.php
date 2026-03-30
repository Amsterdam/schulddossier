<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class TPand
{
    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var string
     */
    private $Pandnummer;

    /**
     * @var int
     */
    private $BeleenBewijsVlgnr;

    /**
     * @var string
     */
    private $BeleenBewijsNr;

    /**
     * @var \DateTimeInterface
     */
    private $StartDatum;

    /**
     * @var \DateTimeInterface
     */
    private $Beleenbewijs_Datum;

    /**
     * @var \DateTimeInterface
     */
    private $Beleenbewijs_Einddatum;

    /**
     * @var float
     */
    private $Beleenbewijs_Beleensom;

    /**
     * @var int
     */
    private $Verlengen;

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TPand
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getPandnummer()
    {
        return $this->Pandnummer;
    }

    /**
     * @param string $Pandnummer
     * @return TPand
     */
    public function withPandnummer($Pandnummer)
    {
        $new = clone $this;
        $new->Pandnummer = $Pandnummer;

        return $new;
    }

    /**
     * @return int
     */
    public function getBeleenBewijsVlgnr()
    {
        return $this->BeleenBewijsVlgnr;
    }

    /**
     * @param int $BeleenBewijsVlgnr
     * @return TPand
     */
    public function withBeleenBewijsVlgnr($BeleenBewijsVlgnr)
    {
        $new = clone $this;
        $new->BeleenBewijsVlgnr = $BeleenBewijsVlgnr;

        return $new;
    }

    /**
     * @return string
     */
    public function getBeleenBewijsNr()
    {
        return $this->BeleenBewijsNr;
    }

    /**
     * @param string $BeleenBewijsNr
     * @return TPand
     */
    public function withBeleenBewijsNr($BeleenBewijsNr)
    {
        $new = clone $this;
        $new->BeleenBewijsNr = $BeleenBewijsNr;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getStartDatum()
    {
        return $this->StartDatum;
    }

    /**
     * @param \DateTimeInterface $StartDatum
     * @return TPand
     */
    public function withStartDatum($StartDatum)
    {
        $new = clone $this;
        $new->StartDatum = $StartDatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeleenbewijs_Datum()
    {
        return $this->Beleenbewijs_Datum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Datum
     * @return TPand
     */
    public function withBeleenbewijs_Datum($Beleenbewijs_Datum)
    {
        $new = clone $this;
        $new->Beleenbewijs_Datum = $Beleenbewijs_Datum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getBeleenbewijs_Einddatum()
    {
        return $this->Beleenbewijs_Einddatum;
    }

    /**
     * @param \DateTimeInterface $Beleenbewijs_Einddatum
     * @return TPand
     */
    public function withBeleenbewijs_Einddatum($Beleenbewijs_Einddatum)
    {
        $new = clone $this;
        $new->Beleenbewijs_Einddatum = $Beleenbewijs_Einddatum;

        return $new;
    }

    /**
     * @return float
     */
    public function getBeleenbewijs_Beleensom()
    {
        return $this->Beleenbewijs_Beleensom;
    }

    /**
     * @param float $Beleenbewijs_Beleensom
     * @return TPand
     */
    public function withBeleenbewijs_Beleensom($Beleenbewijs_Beleensom)
    {
        $new = clone $this;
        $new->Beleenbewijs_Beleensom = $Beleenbewijs_Beleensom;

        return $new;
    }

    /**
     * @return int
     */
    public function getVerlengen()
    {
        return $this->Verlengen;
    }

    /**
     * @param int $Verlengen
     * @return TPand
     */
    public function withVerlengen($Verlengen)
    {
        $new = clone $this;
        $new->Verlengen = $Verlengen;

        return $new;
    }
}


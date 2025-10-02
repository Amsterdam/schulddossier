<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TDKHeader implements RequestInterface
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
     * Constructor
     *
     * @param int $RelatieCode
     * @param int $Volgnummer
     * @param \DateTimeInterface $DatumUitbetaling
     */
    public function __construct(int $RelatieCode, int $Volgnummer, \DateTimeInterface $DatumUitbetaling)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->DatumUitbetaling = $DatumUitbetaling;
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


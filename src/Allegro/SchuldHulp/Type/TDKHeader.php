<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TDKHeader implements RequestInterface
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
     * @var \DateTimeInterface
     */
    private $DatumUitbetaling;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $Volgnummer
     * @var \DateTimeInterface $DatumUitbetaling
     */
    public function __construct($RelatieCode, $Volgnummer, $DatumUitbetaling)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->DatumUitbetaling = $DatumUitbetaling;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return TDKHeader
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
     * @return TDKHeader
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
    public function getDatumUitbetaling()
    {
        return $this->DatumUitbetaling;
    }

    /**
     * @param \DateTimeInterface $DatumUitbetaling
     * @return TDKHeader
     */
    public function withDatumUitbetaling($DatumUitbetaling)
    {
        $new = clone $this;
        $new->DatumUitbetaling = $DatumUitbetaling;

        return $new;
    }


}


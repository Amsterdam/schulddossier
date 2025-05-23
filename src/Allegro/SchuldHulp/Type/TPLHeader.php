<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TPLHeader implements RequestInterface
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
     * @var DateTimeInterface
     */
    private $Startdatum;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var int $Volgnummer
     * @var DateTimeInterface $Startdatum
     */
    public function __construct($RelatieCode, $Volgnummer, $Startdatum)
    {
        $this->RelatieCode = $RelatieCode;
        $this->Volgnummer = $Volgnummer;
        $this->Startdatum = $Startdatum;
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
     * @return TPLHeader
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
     * @return TPLHeader
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getStartdatum()
    {
        return $this->Startdatum;
    }

    /**
     * @param DateTimeInterface $Startdatum
     * @return TPLHeader
     */
    public function withStartdatum($Startdatum)
    {
        $new = clone $this;
        $new->Startdatum = $Startdatum;

        return $new;
    }


}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TDocumentSleutel implements RequestInterface
{

    /**
     * @var string
     */
    private $ComponentCode;

    /**
     * @var \DateTimeInterface
     */
    private $ArchiefDatum;

    /**
     * @var string
     */
    private $Kenmerk;

    /**
     * @var int
     */
    private $Volgnummer;

    /**
     * Constructor
     *
     * @var string $ComponentCode
     * @var \DateTimeInterface $ArchiefDatum
     * @var string $Kenmerk
     * @var int $Volgnummer
     */
    public function __construct($ComponentCode, $ArchiefDatum, $Kenmerk, $Volgnummer)
    {
        $this->ComponentCode = $ComponentCode;
        $this->ArchiefDatum = $ArchiefDatum;
        $this->Kenmerk = $Kenmerk;
        $this->Volgnummer = $Volgnummer;
    }

    /**
     * @return string
     */
    public function getComponentCode()
    {
        return $this->ComponentCode;
    }

    /**
     * @param string $ComponentCode
     * @return TDocumentSleutel
     */
    public function withComponentCode($ComponentCode)
    {
        $new = clone $this;
        $new->ComponentCode = $ComponentCode;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getArchiefDatum()
    {
        return $this->ArchiefDatum;
    }

    /**
     * @param \DateTimeInterface $ArchiefDatum
     * @return TDocumentSleutel
     */
    public function withArchiefDatum($ArchiefDatum)
    {
        $new = clone $this;
        $new->ArchiefDatum = $ArchiefDatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getKenmerk()
    {
        return $this->Kenmerk;
    }

    /**
     * @param string $Kenmerk
     * @return TDocumentSleutel
     */
    public function withKenmerk($Kenmerk)
    {
        $new = clone $this;
        $new->Kenmerk = $Kenmerk;

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
     * @return TDocumentSleutel
     */
    public function withVolgnummer($Volgnummer)
    {
        $new = clone $this;
        $new->Volgnummer = $Volgnummer;

        return $new;
    }


}


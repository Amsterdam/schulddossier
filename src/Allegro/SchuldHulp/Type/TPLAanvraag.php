<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

class TPLAanvraag
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
    private $DatumAanvraag;

    /**
     * @var string
     */
    private $SoortLening;

    /**
     * @var int
     */
    private $MedelenerCode;

    /**
     * @var string
     */
    private $Medewerker;

    /**
     * @var float
     */
    private $GewenstKrediet;

    /**
     * @var string
     */
    private $Status;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatus;

    /**
     * @var string
     */
    private $RedenAfwijzing;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatusA;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatusB;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatusC;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatusD;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatusE;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatusAfIn;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStatusFiat;

    /**
     * @return int
     */
    public function getRelatiecode()
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return TPLAanvraag
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
     * @return TPLAanvraag
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
    public function getDatumAanvraag()
    {
        return $this->DatumAanvraag;
    }

    /**
     * @param \DateTimeInterface $DatumAanvraag
     * @return TPLAanvraag
     */
    public function withDatumAanvraag($DatumAanvraag)
    {
        $new = clone $this;
        $new->DatumAanvraag = $DatumAanvraag;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortLening()
    {
        return $this->SoortLening;
    }

    /**
     * @param string $SoortLening
     * @return TPLAanvraag
     */
    public function withSoortLening($SoortLening)
    {
        $new = clone $this;
        $new->SoortLening = $SoortLening;

        return $new;
    }

    /**
     * @return int
     */
    public function getMedelenerCode()
    {
        return $this->MedelenerCode;
    }

    /**
     * @param int $MedelenerCode
     * @return TPLAanvraag
     */
    public function withMedelenerCode($MedelenerCode)
    {
        $new = clone $this;
        $new->MedelenerCode = $MedelenerCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker()
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return TPLAanvraag
     */
    public function withMedewerker($Medewerker)
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return float
     */
    public function getGewenstKrediet()
    {
        return $this->GewenstKrediet;
    }

    /**
     * @param float $GewenstKrediet
     * @return TPLAanvraag
     */
    public function withGewenstKrediet($GewenstKrediet)
    {
        $new = clone $this;
        $new->GewenstKrediet = $GewenstKrediet;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     * @return TPLAanvraag
     */
    public function withStatus($Status)
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatus()
    {
        return $this->DatumStatus;
    }

    /**
     * @param \DateTimeInterface $DatumStatus
     * @return TPLAanvraag
     */
    public function withDatumStatus($DatumStatus)
    {
        $new = clone $this;
        $new->DatumStatus = $DatumStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getRedenAfwijzing()
    {
        return $this->RedenAfwijzing;
    }

    /**
     * @param string $RedenAfwijzing
     * @return TPLAanvraag
     */
    public function withRedenAfwijzing($RedenAfwijzing)
    {
        $new = clone $this;
        $new->RedenAfwijzing = $RedenAfwijzing;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusA()
    {
        return $this->DatumStatusA;
    }

    /**
     * @param \DateTimeInterface $DatumStatusA
     * @return TPLAanvraag
     */
    public function withDatumStatusA($DatumStatusA)
    {
        $new = clone $this;
        $new->DatumStatusA = $DatumStatusA;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusB()
    {
        return $this->DatumStatusB;
    }

    /**
     * @param \DateTimeInterface $DatumStatusB
     * @return TPLAanvraag
     */
    public function withDatumStatusB($DatumStatusB)
    {
        $new = clone $this;
        $new->DatumStatusB = $DatumStatusB;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusC()
    {
        return $this->DatumStatusC;
    }

    /**
     * @param \DateTimeInterface $DatumStatusC
     * @return TPLAanvraag
     */
    public function withDatumStatusC($DatumStatusC)
    {
        $new = clone $this;
        $new->DatumStatusC = $DatumStatusC;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusD()
    {
        return $this->DatumStatusD;
    }

    /**
     * @param \DateTimeInterface $DatumStatusD
     * @return TPLAanvraag
     */
    public function withDatumStatusD($DatumStatusD)
    {
        $new = clone $this;
        $new->DatumStatusD = $DatumStatusD;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusE()
    {
        return $this->DatumStatusE;
    }

    /**
     * @param \DateTimeInterface $DatumStatusE
     * @return TPLAanvraag
     */
    public function withDatumStatusE($DatumStatusE)
    {
        $new = clone $this;
        $new->DatumStatusE = $DatumStatusE;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusAfIn()
    {
        return $this->DatumStatusAfIn;
    }

    /**
     * @param \DateTimeInterface $DatumStatusAfIn
     * @return TPLAanvraag
     */
    public function withDatumStatusAfIn($DatumStatusAfIn)
    {
        $new = clone $this;
        $new->DatumStatusAfIn = $DatumStatusAfIn;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusFiat()
    {
        return $this->DatumStatusFiat;
    }

    /**
     * @param \DateTimeInterface $DatumStatusFiat
     * @return TPLAanvraag
     */
    public function withDatumStatusFiat($DatumStatusFiat)
    {
        $new = clone $this;
        $new->DatumStatusFiat = $DatumStatusFiat;

        return $new;
    }
}


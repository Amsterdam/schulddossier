<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TPLAanvraag implements RequestInterface
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
    private \DateTimeInterface $DatumAanvraag;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening $SoortLening;

    /**
     * @var int
     */
    private int $MedelenerCode;

    /**
     * @var string
     */
    private string $Medewerker;

    /**
     * @var float
     */
    private float $GewenstKrediet;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag $Status;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatus;

    /**
     * @var string
     */
    private string $RedenAfwijzing;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusA;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusB;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusC;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusD;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusE;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusAfIn;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStatusFiat;

    /**
     * Constructor
     *
     * @param int $Relatiecode
     * @param int $Volgnummer
     * @param \DateTimeInterface $DatumAanvraag
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening $SoortLening
     * @param int $MedelenerCode
     * @param string $Medewerker
     * @param float $GewenstKrediet
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag $Status
     * @param \DateTimeInterface $DatumStatus
     * @param string $RedenAfwijzing
     * @param \DateTimeInterface $DatumStatusA
     * @param \DateTimeInterface $DatumStatusB
     * @param \DateTimeInterface $DatumStatusC
     * @param \DateTimeInterface $DatumStatusD
     * @param \DateTimeInterface $DatumStatusE
     * @param \DateTimeInterface $DatumStatusAfIn
     * @param \DateTimeInterface $DatumStatusFiat
     */
    public function __construct(int $Relatiecode, int $Volgnummer, \DateTimeInterface $DatumAanvraag, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening $SoortLening, int $MedelenerCode, string $Medewerker, float $GewenstKrediet, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag $Status, \DateTimeInterface $DatumStatus, string $RedenAfwijzing, \DateTimeInterface $DatumStatusA, \DateTimeInterface $DatumStatusB, \DateTimeInterface $DatumStatusC, \DateTimeInterface $DatumStatusD, \DateTimeInterface $DatumStatusE, \DateTimeInterface $DatumStatusAfIn, \DateTimeInterface $DatumStatusFiat)
    {
        $this->Relatiecode = $Relatiecode;
        $this->Volgnummer = $Volgnummer;
        $this->DatumAanvraag = $DatumAanvraag;
        $this->SoortLening = $SoortLening;
        $this->MedelenerCode = $MedelenerCode;
        $this->Medewerker = $Medewerker;
        $this->GewenstKrediet = $GewenstKrediet;
        $this->Status = $Status;
        $this->DatumStatus = $DatumStatus;
        $this->RedenAfwijzing = $RedenAfwijzing;
        $this->DatumStatusA = $DatumStatusA;
        $this->DatumStatusB = $DatumStatusB;
        $this->DatumStatusC = $DatumStatusC;
        $this->DatumStatusD = $DatumStatusD;
        $this->DatumStatusE = $DatumStatusE;
        $this->DatumStatusAfIn = $DatumStatusAfIn;
        $this->DatumStatusFiat = $DatumStatusFiat;
    }

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
    public function getDatumAanvraag() : \DateTimeInterface
    {
        return $this->DatumAanvraag;
    }

    /**
     * @param \DateTimeInterface $DatumAanvraag
     * @return static
     */
    public function withDatumAanvraag(\DateTimeInterface $DatumAanvraag) : static
    {
        $new = clone $this;
        $new->DatumAanvraag = $DatumAanvraag;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening
     */
    public function getSoortLening() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening
    {
        return $this->SoortLening;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening $SoortLening
     * @return static
     */
    public function withSoortLening(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ESoortLening $SoortLening) : static
    {
        $new = clone $this;
        $new->SoortLening = $SoortLening;

        return $new;
    }

    /**
     * @return int
     */
    public function getMedelenerCode() : int
    {
        return $this->MedelenerCode;
    }

    /**
     * @param int $MedelenerCode
     * @return static
     */
    public function withMedelenerCode(int $MedelenerCode) : static
    {
        $new = clone $this;
        $new->MedelenerCode = $MedelenerCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getMedewerker() : string
    {
        return $this->Medewerker;
    }

    /**
     * @param string $Medewerker
     * @return static
     */
    public function withMedewerker(string $Medewerker) : static
    {
        $new = clone $this;
        $new->Medewerker = $Medewerker;

        return $new;
    }

    /**
     * @return float
     */
    public function getGewenstKrediet() : float
    {
        return $this->GewenstKrediet;
    }

    /**
     * @param float $GewenstKrediet
     * @return static
     */
    public function withGewenstKrediet(float $GewenstKrediet) : static
    {
        $new = clone $this;
        $new->GewenstKrediet = $GewenstKrediet;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag
     */
    public function getStatus() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag
    {
        return $this->Status;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag $Status
     * @return static
     */
    public function withStatus(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EStatusAanvraag $Status) : static
    {
        $new = clone $this;
        $new->Status = $Status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatus() : \DateTimeInterface
    {
        return $this->DatumStatus;
    }

    /**
     * @param \DateTimeInterface $DatumStatus
     * @return static
     */
    public function withDatumStatus(\DateTimeInterface $DatumStatus) : static
    {
        $new = clone $this;
        $new->DatumStatus = $DatumStatus;

        return $new;
    }

    /**
     * @return string
     */
    public function getRedenAfwijzing() : string
    {
        return $this->RedenAfwijzing;
    }

    /**
     * @param string $RedenAfwijzing
     * @return static
     */
    public function withRedenAfwijzing(string $RedenAfwijzing) : static
    {
        $new = clone $this;
        $new->RedenAfwijzing = $RedenAfwijzing;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusA() : \DateTimeInterface
    {
        return $this->DatumStatusA;
    }

    /**
     * @param \DateTimeInterface $DatumStatusA
     * @return static
     */
    public function withDatumStatusA(\DateTimeInterface $DatumStatusA) : static
    {
        $new = clone $this;
        $new->DatumStatusA = $DatumStatusA;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusB() : \DateTimeInterface
    {
        return $this->DatumStatusB;
    }

    /**
     * @param \DateTimeInterface $DatumStatusB
     * @return static
     */
    public function withDatumStatusB(\DateTimeInterface $DatumStatusB) : static
    {
        $new = clone $this;
        $new->DatumStatusB = $DatumStatusB;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusC() : \DateTimeInterface
    {
        return $this->DatumStatusC;
    }

    /**
     * @param \DateTimeInterface $DatumStatusC
     * @return static
     */
    public function withDatumStatusC(\DateTimeInterface $DatumStatusC) : static
    {
        $new = clone $this;
        $new->DatumStatusC = $DatumStatusC;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusD() : \DateTimeInterface
    {
        return $this->DatumStatusD;
    }

    /**
     * @param \DateTimeInterface $DatumStatusD
     * @return static
     */
    public function withDatumStatusD(\DateTimeInterface $DatumStatusD) : static
    {
        $new = clone $this;
        $new->DatumStatusD = $DatumStatusD;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusE() : \DateTimeInterface
    {
        return $this->DatumStatusE;
    }

    /**
     * @param \DateTimeInterface $DatumStatusE
     * @return static
     */
    public function withDatumStatusE(\DateTimeInterface $DatumStatusE) : static
    {
        $new = clone $this;
        $new->DatumStatusE = $DatumStatusE;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusAfIn() : \DateTimeInterface
    {
        return $this->DatumStatusAfIn;
    }

    /**
     * @param \DateTimeInterface $DatumStatusAfIn
     * @return static
     */
    public function withDatumStatusAfIn(\DateTimeInterface $DatumStatusAfIn) : static
    {
        $new = clone $this;
        $new->DatumStatusAfIn = $DatumStatusAfIn;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStatusFiat() : \DateTimeInterface
    {
        return $this->DatumStatusFiat;
    }

    /**
     * @param \DateTimeInterface $DatumStatusFiat
     * @return static
     */
    public function withDatumStatusFiat(\DateTimeInterface $DatumStatusFiat) : static
    {
        $new = clone $this;
        $new->DatumStatusFiat = $DatumStatusFiat;

        return $new;
    }
}


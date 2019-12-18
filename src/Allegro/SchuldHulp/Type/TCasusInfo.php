<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusInfo implements RequestInterface
{

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader
     */
    private $InfoHeader;

    /**
     * @var string
     */
    private $CasusMedewerker;

    /**
     * @var string
     */
    private $CasusTeam;

    /**
     * @var int
     */
    private $Opdrachtgever;

    /**
     * @var int
     */
    private $OpdrachtgeverContact;

    /**
     * @var \DateTimeInterface
     */
    private $DatumAanmelding;

    /**
     * @var \DateTimeInterface
     */
    private $DatumAanmeldingEinde;

    /**
     * @var \DateTimeInterface
     */
    private $DatumIntake;

    /**
     * @var \DateTimeInterface
     */
    private $DatumIntakeEinde;

    /**
     * @var \DateTimeInterface
     */
    private $DatumInventarisatie;

    /**
     * @var \DateTimeInterface
     */
    private $DatumInventarisatieEinde;

    /**
     * @var \DateTimeInterface
     */
    private $DatumAnalyse;

    /**
     * @var \DateTimeInterface
     */
    private $DatumAnalyseEinde;

    /**
     * @var bool
     */
    private $Crisis;

    /**
     * @var \DateTimeInterface
     */
    private $DatumCrisis;

    /**
     * @var \DateTimeInterface
     */
    private $DatumCrisisEinde;

    /**
     * @var \DateTimeInterface
     */
    private $DatumAfwijzing;

    /**
     * @var \DateTimeInterface
     */
    private $DatumAfwijzingEinde;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStop;

    /**
     * @var \DateTimeInterface
     */
    private $DatumStopEinde;

    /**
     * @var \DateTimeInterface
     */
    private $VerwachteEinddatumIntake;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray
     */
    private $PVA;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $InfoHeader
     * @var string $CasusMedewerker
     * @var string $CasusTeam
     * @var int $Opdrachtgever
     * @var int $OpdrachtgeverContact
     * @var \DateTimeInterface $DatumAanmelding
     * @var \DateTimeInterface $DatumAanmeldingEinde
     * @var \DateTimeInterface $DatumIntake
     * @var \DateTimeInterface $DatumIntakeEinde
     * @var \DateTimeInterface $DatumInventarisatie
     * @var \DateTimeInterface $DatumInventarisatieEinde
     * @var \DateTimeInterface $DatumAnalyse
     * @var \DateTimeInterface $DatumAnalyseEinde
     * @var bool $Crisis
     * @var \DateTimeInterface $DatumCrisis
     * @var \DateTimeInterface $DatumCrisisEinde
     * @var \DateTimeInterface $DatumAfwijzing
     * @var \DateTimeInterface $DatumAfwijzingEinde
     * @var \DateTimeInterface $DatumStop
     * @var \DateTimeInterface $DatumStopEinde
     * @var \DateTimeInterface $VerwachteEinddatumIntake
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray $PVA
     */
    public function __construct($InfoHeader, $CasusMedewerker, $CasusTeam, $Opdrachtgever, $OpdrachtgeverContact, $DatumAanmelding, $DatumAanmeldingEinde, $DatumIntake, $DatumIntakeEinde, $DatumInventarisatie, $DatumInventarisatieEinde, $DatumAnalyse, $DatumAnalyseEinde, $Crisis, $DatumCrisis, $DatumCrisisEinde, $DatumAfwijzing, $DatumAfwijzingEinde, $DatumStop, $DatumStopEinde, $VerwachteEinddatumIntake, $PVA)
    {
        $this->InfoHeader = $InfoHeader;
        $this->CasusMedewerker = $CasusMedewerker;
        $this->CasusTeam = $CasusTeam;
        $this->Opdrachtgever = $Opdrachtgever;
        $this->OpdrachtgeverContact = $OpdrachtgeverContact;
        $this->DatumAanmelding = $DatumAanmelding;
        $this->DatumAanmeldingEinde = $DatumAanmeldingEinde;
        $this->DatumIntake = $DatumIntake;
        $this->DatumIntakeEinde = $DatumIntakeEinde;
        $this->DatumInventarisatie = $DatumInventarisatie;
        $this->DatumInventarisatieEinde = $DatumInventarisatieEinde;
        $this->DatumAnalyse = $DatumAnalyse;
        $this->DatumAnalyseEinde = $DatumAnalyseEinde;
        $this->Crisis = $Crisis;
        $this->DatumCrisis = $DatumCrisis;
        $this->DatumCrisisEinde = $DatumCrisisEinde;
        $this->DatumAfwijzing = $DatumAfwijzing;
        $this->DatumAfwijzingEinde = $DatumAfwijzingEinde;
        $this->DatumStop = $DatumStop;
        $this->DatumStopEinde = $DatumStopEinde;
        $this->VerwachteEinddatumIntake = $VerwachteEinddatumIntake;
        $this->PVA = $PVA;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader
     */
    public function getInfoHeader()
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $InfoHeader
     * @return TCasusInfo
     */
    public function withInfoHeader($InfoHeader)
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusMedewerker()
    {
        return $this->CasusMedewerker;
    }

    /**
     * @param string $CasusMedewerker
     * @return TCasusInfo
     */
    public function withCasusMedewerker($CasusMedewerker)
    {
        $new = clone $this;
        $new->CasusMedewerker = $CasusMedewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusTeam()
    {
        return $this->CasusTeam;
    }

    /**
     * @param string $CasusTeam
     * @return TCasusInfo
     */
    public function withCasusTeam($CasusTeam)
    {
        $new = clone $this;
        $new->CasusTeam = $CasusTeam;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever()
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return TCasusInfo
     */
    public function withOpdrachtgever($Opdrachtgever)
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact()
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return TCasusInfo
     */
    public function withOpdrachtgeverContact($OpdrachtgeverContact)
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAanmelding()
    {
        return $this->DatumAanmelding;
    }

    /**
     * @param \DateTimeInterface $DatumAanmelding
     * @return TCasusInfo
     */
    public function withDatumAanmelding($DatumAanmelding)
    {
        $new = clone $this;
        $new->DatumAanmelding = $DatumAanmelding;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAanmeldingEinde()
    {
        return $this->DatumAanmeldingEinde;
    }

    /**
     * @param \DateTimeInterface $DatumAanmeldingEinde
     * @return TCasusInfo
     */
    public function withDatumAanmeldingEinde($DatumAanmeldingEinde)
    {
        $new = clone $this;
        $new->DatumAanmeldingEinde = $DatumAanmeldingEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumIntake()
    {
        return $this->DatumIntake;
    }

    /**
     * @param \DateTimeInterface $DatumIntake
     * @return TCasusInfo
     */
    public function withDatumIntake($DatumIntake)
    {
        $new = clone $this;
        $new->DatumIntake = $DatumIntake;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumIntakeEinde()
    {
        return $this->DatumIntakeEinde;
    }

    /**
     * @param \DateTimeInterface $DatumIntakeEinde
     * @return TCasusInfo
     */
    public function withDatumIntakeEinde($DatumIntakeEinde)
    {
        $new = clone $this;
        $new->DatumIntakeEinde = $DatumIntakeEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInventarisatie()
    {
        return $this->DatumInventarisatie;
    }

    /**
     * @param \DateTimeInterface $DatumInventarisatie
     * @return TCasusInfo
     */
    public function withDatumInventarisatie($DatumInventarisatie)
    {
        $new = clone $this;
        $new->DatumInventarisatie = $DatumInventarisatie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInventarisatieEinde()
    {
        return $this->DatumInventarisatieEinde;
    }

    /**
     * @param \DateTimeInterface $DatumInventarisatieEinde
     * @return TCasusInfo
     */
    public function withDatumInventarisatieEinde($DatumInventarisatieEinde)
    {
        $new = clone $this;
        $new->DatumInventarisatieEinde = $DatumInventarisatieEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAnalyse()
    {
        return $this->DatumAnalyse;
    }

    /**
     * @param \DateTimeInterface $DatumAnalyse
     * @return TCasusInfo
     */
    public function withDatumAnalyse($DatumAnalyse)
    {
        $new = clone $this;
        $new->DatumAnalyse = $DatumAnalyse;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAnalyseEinde()
    {
        return $this->DatumAnalyseEinde;
    }

    /**
     * @param \DateTimeInterface $DatumAnalyseEinde
     * @return TCasusInfo
     */
    public function withDatumAnalyseEinde($DatumAnalyseEinde)
    {
        $new = clone $this;
        $new->DatumAnalyseEinde = $DatumAnalyseEinde;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCrisis()
    {
        return $this->Crisis;
    }

    /**
     * @param bool $Crisis
     * @return TCasusInfo
     */
    public function withCrisis($Crisis)
    {
        $new = clone $this;
        $new->Crisis = $Crisis;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumCrisis()
    {
        return $this->DatumCrisis;
    }

    /**
     * @param \DateTimeInterface $DatumCrisis
     * @return TCasusInfo
     */
    public function withDatumCrisis($DatumCrisis)
    {
        $new = clone $this;
        $new->DatumCrisis = $DatumCrisis;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumCrisisEinde()
    {
        return $this->DatumCrisisEinde;
    }

    /**
     * @param \DateTimeInterface $DatumCrisisEinde
     * @return TCasusInfo
     */
    public function withDatumCrisisEinde($DatumCrisisEinde)
    {
        $new = clone $this;
        $new->DatumCrisisEinde = $DatumCrisisEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAfwijzing()
    {
        return $this->DatumAfwijzing;
    }

    /**
     * @param \DateTimeInterface $DatumAfwijzing
     * @return TCasusInfo
     */
    public function withDatumAfwijzing($DatumAfwijzing)
    {
        $new = clone $this;
        $new->DatumAfwijzing = $DatumAfwijzing;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAfwijzingEinde()
    {
        return $this->DatumAfwijzingEinde;
    }

    /**
     * @param \DateTimeInterface $DatumAfwijzingEinde
     * @return TCasusInfo
     */
    public function withDatumAfwijzingEinde($DatumAfwijzingEinde)
    {
        $new = clone $this;
        $new->DatumAfwijzingEinde = $DatumAfwijzingEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStop()
    {
        return $this->DatumStop;
    }

    /**
     * @param \DateTimeInterface $DatumStop
     * @return TCasusInfo
     */
    public function withDatumStop($DatumStop)
    {
        $new = clone $this;
        $new->DatumStop = $DatumStop;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStopEinde()
    {
        return $this->DatumStopEinde;
    }

    /**
     * @param \DateTimeInterface $DatumStopEinde
     * @return TCasusInfo
     */
    public function withDatumStopEinde($DatumStopEinde)
    {
        $new = clone $this;
        $new->DatumStopEinde = $DatumStopEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVerwachteEinddatumIntake()
    {
        return $this->VerwachteEinddatumIntake;
    }

    /**
     * @param \DateTimeInterface $VerwachteEinddatumIntake
     * @return TCasusInfo
     */
    public function withVerwachteEinddatumIntake($VerwachteEinddatumIntake)
    {
        $new = clone $this;
        $new->VerwachteEinddatumIntake = $VerwachteEinddatumIntake;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray
     */
    public function getPVA()
    {
        return $this->PVA;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray $PVA
     * @return TCasusInfo
     */
    public function withPVA($PVA)
    {
        $new = clone $this;
        $new->PVA = $PVA;

        return $new;
    }


}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TCasusInfo implements RequestInterface
{
    /**
     * TCasusHeader bevat :
     *  - Relatiecode
     *  - Volgnummer
     *  - Aanmaakdatum
     *  - CasusStatus
     *  * Aanmelding (aanmelding 'in progress')
     *  * Aanmelding voltooid (aanmelding voltooid)
     *  * Inventarisatie (inventarisatie bezig)
     *  * Analyse (analyse bezig)
     *  * Plan Van Aanpak (plan van aanpak bezig)
     *  * Fiattering (fiattering bezig)
     *  * Slapend (laatste plan van aanpak gefiatteerd)
     *  * Crisis (crisis)
     *  * Afwijzing (casus zit in afwijzingsfase)
     *  * Einde (casus zit in beeindigingsfase)
     *  * Inactief (casus niet meer actief)
     *  * Geen status
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $InfoHeader;

    /**
     * @var string
     */
    private string $CasusMedewerker;

    /**
     * @var string
     */
    private string $CasusTeam;

    /**
     * @var int
     */
    private int $Opdrachtgever;

    /**
     * @var int
     */
    private int $OpdrachtgeverContact;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAanmelding;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAanmeldingEinde;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumIntake;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumIntakeEinde;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumInventarisatie;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumInventarisatieEinde;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAnalyse;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAnalyseEinde;

    /**
     * @var bool
     */
    private bool $Crisis;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumCrisis;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumCrisisEinde;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAfwijzing;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumAfwijzingEinde;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStop;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $DatumStopEinde;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $VerwachteEinddatumIntake;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray $PVA;

    /**
     * Constructor
     *
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $InfoHeader
     * @param string $CasusMedewerker
     * @param string $CasusTeam
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param \DateTimeInterface $DatumAanmelding
     * @param \DateTimeInterface $DatumAanmeldingEinde
     * @param \DateTimeInterface $DatumIntake
     * @param \DateTimeInterface $DatumIntakeEinde
     * @param \DateTimeInterface $DatumInventarisatie
     * @param \DateTimeInterface $DatumInventarisatieEinde
     * @param \DateTimeInterface $DatumAnalyse
     * @param \DateTimeInterface $DatumAnalyseEinde
     * @param bool $Crisis
     * @param \DateTimeInterface $DatumCrisis
     * @param \DateTimeInterface $DatumCrisisEinde
     * @param \DateTimeInterface $DatumAfwijzing
     * @param \DateTimeInterface $DatumAfwijzingEinde
     * @param \DateTimeInterface $DatumStop
     * @param \DateTimeInterface $DatumStopEinde
     * @param \DateTimeInterface $VerwachteEinddatumIntake
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray $PVA
     */
    public function __construct(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $InfoHeader, string $CasusMedewerker, string $CasusTeam, int $Opdrachtgever, int $OpdrachtgeverContact, \DateTimeInterface $DatumAanmelding, \DateTimeInterface $DatumAanmeldingEinde, \DateTimeInterface $DatumIntake, \DateTimeInterface $DatumIntakeEinde, \DateTimeInterface $DatumInventarisatie, \DateTimeInterface $DatumInventarisatieEinde, \DateTimeInterface $DatumAnalyse, \DateTimeInterface $DatumAnalyseEinde, bool $Crisis, \DateTimeInterface $DatumCrisis, \DateTimeInterface $DatumCrisisEinde, \DateTimeInterface $DatumAfwijzing, \DateTimeInterface $DatumAfwijzingEinde, \DateTimeInterface $DatumStop, \DateTimeInterface $DatumStopEinde, \DateTimeInterface $VerwachteEinddatumIntake, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray $PVA)
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
    public function getInfoHeader() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader
    {
        return $this->InfoHeader;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $InfoHeader
     * @return static
     */
    public function withInfoHeader(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TCasusHeader $InfoHeader) : static
    {
        $new = clone $this;
        $new->InfoHeader = $InfoHeader;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusMedewerker() : string
    {
        return $this->CasusMedewerker;
    }

    /**
     * @param string $CasusMedewerker
     * @return static
     */
    public function withCasusMedewerker(string $CasusMedewerker) : static
    {
        $new = clone $this;
        $new->CasusMedewerker = $CasusMedewerker;

        return $new;
    }

    /**
     * @return string
     */
    public function getCasusTeam() : string
    {
        return $this->CasusTeam;
    }

    /**
     * @param string $CasusTeam
     * @return static
     */
    public function withCasusTeam(string $CasusTeam) : static
    {
        $new = clone $this;
        $new->CasusTeam = $CasusTeam;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgever() : int
    {
        return $this->Opdrachtgever;
    }

    /**
     * @param int $Opdrachtgever
     * @return static
     */
    public function withOpdrachtgever(int $Opdrachtgever) : static
    {
        $new = clone $this;
        $new->Opdrachtgever = $Opdrachtgever;

        return $new;
    }

    /**
     * @return int
     */
    public function getOpdrachtgeverContact() : int
    {
        return $this->OpdrachtgeverContact;
    }

    /**
     * @param int $OpdrachtgeverContact
     * @return static
     */
    public function withOpdrachtgeverContact(int $OpdrachtgeverContact) : static
    {
        $new = clone $this;
        $new->OpdrachtgeverContact = $OpdrachtgeverContact;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAanmelding() : \DateTimeInterface
    {
        return $this->DatumAanmelding;
    }

    /**
     * @param \DateTimeInterface $DatumAanmelding
     * @return static
     */
    public function withDatumAanmelding(\DateTimeInterface $DatumAanmelding) : static
    {
        $new = clone $this;
        $new->DatumAanmelding = $DatumAanmelding;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAanmeldingEinde() : \DateTimeInterface
    {
        return $this->DatumAanmeldingEinde;
    }

    /**
     * @param \DateTimeInterface $DatumAanmeldingEinde
     * @return static
     */
    public function withDatumAanmeldingEinde(\DateTimeInterface $DatumAanmeldingEinde) : static
    {
        $new = clone $this;
        $new->DatumAanmeldingEinde = $DatumAanmeldingEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumIntake() : \DateTimeInterface
    {
        return $this->DatumIntake;
    }

    /**
     * @param \DateTimeInterface $DatumIntake
     * @return static
     */
    public function withDatumIntake(\DateTimeInterface $DatumIntake) : static
    {
        $new = clone $this;
        $new->DatumIntake = $DatumIntake;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumIntakeEinde() : \DateTimeInterface
    {
        return $this->DatumIntakeEinde;
    }

    /**
     * @param \DateTimeInterface $DatumIntakeEinde
     * @return static
     */
    public function withDatumIntakeEinde(\DateTimeInterface $DatumIntakeEinde) : static
    {
        $new = clone $this;
        $new->DatumIntakeEinde = $DatumIntakeEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInventarisatie() : \DateTimeInterface
    {
        return $this->DatumInventarisatie;
    }

    /**
     * @param \DateTimeInterface $DatumInventarisatie
     * @return static
     */
    public function withDatumInventarisatie(\DateTimeInterface $DatumInventarisatie) : static
    {
        $new = clone $this;
        $new->DatumInventarisatie = $DatumInventarisatie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumInventarisatieEinde() : \DateTimeInterface
    {
        return $this->DatumInventarisatieEinde;
    }

    /**
     * @param \DateTimeInterface $DatumInventarisatieEinde
     * @return static
     */
    public function withDatumInventarisatieEinde(\DateTimeInterface $DatumInventarisatieEinde) : static
    {
        $new = clone $this;
        $new->DatumInventarisatieEinde = $DatumInventarisatieEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAnalyse() : \DateTimeInterface
    {
        return $this->DatumAnalyse;
    }

    /**
     * @param \DateTimeInterface $DatumAnalyse
     * @return static
     */
    public function withDatumAnalyse(\DateTimeInterface $DatumAnalyse) : static
    {
        $new = clone $this;
        $new->DatumAnalyse = $DatumAnalyse;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAnalyseEinde() : \DateTimeInterface
    {
        return $this->DatumAnalyseEinde;
    }

    /**
     * @param \DateTimeInterface $DatumAnalyseEinde
     * @return static
     */
    public function withDatumAnalyseEinde(\DateTimeInterface $DatumAnalyseEinde) : static
    {
        $new = clone $this;
        $new->DatumAnalyseEinde = $DatumAnalyseEinde;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCrisis() : bool
    {
        return $this->Crisis;
    }

    /**
     * @param bool $Crisis
     * @return static
     */
    public function withCrisis(bool $Crisis) : static
    {
        $new = clone $this;
        $new->Crisis = $Crisis;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumCrisis() : \DateTimeInterface
    {
        return $this->DatumCrisis;
    }

    /**
     * @param \DateTimeInterface $DatumCrisis
     * @return static
     */
    public function withDatumCrisis(\DateTimeInterface $DatumCrisis) : static
    {
        $new = clone $this;
        $new->DatumCrisis = $DatumCrisis;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumCrisisEinde() : \DateTimeInterface
    {
        return $this->DatumCrisisEinde;
    }

    /**
     * @param \DateTimeInterface $DatumCrisisEinde
     * @return static
     */
    public function withDatumCrisisEinde(\DateTimeInterface $DatumCrisisEinde) : static
    {
        $new = clone $this;
        $new->DatumCrisisEinde = $DatumCrisisEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAfwijzing() : \DateTimeInterface
    {
        return $this->DatumAfwijzing;
    }

    /**
     * @param \DateTimeInterface $DatumAfwijzing
     * @return static
     */
    public function withDatumAfwijzing(\DateTimeInterface $DatumAfwijzing) : static
    {
        $new = clone $this;
        $new->DatumAfwijzing = $DatumAfwijzing;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumAfwijzingEinde() : \DateTimeInterface
    {
        return $this->DatumAfwijzingEinde;
    }

    /**
     * @param \DateTimeInterface $DatumAfwijzingEinde
     * @return static
     */
    public function withDatumAfwijzingEinde(\DateTimeInterface $DatumAfwijzingEinde) : static
    {
        $new = clone $this;
        $new->DatumAfwijzingEinde = $DatumAfwijzingEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStop() : \DateTimeInterface
    {
        return $this->DatumStop;
    }

    /**
     * @param \DateTimeInterface $DatumStop
     * @return static
     */
    public function withDatumStop(\DateTimeInterface $DatumStop) : static
    {
        $new = clone $this;
        $new->DatumStop = $DatumStop;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatumStopEinde() : \DateTimeInterface
    {
        return $this->DatumStopEinde;
    }

    /**
     * @param \DateTimeInterface $DatumStopEinde
     * @return static
     */
    public function withDatumStopEinde(\DateTimeInterface $DatumStopEinde) : static
    {
        $new = clone $this;
        $new->DatumStopEinde = $DatumStopEinde;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getVerwachteEinddatumIntake() : \DateTimeInterface
    {
        return $this->VerwachteEinddatumIntake;
    }

    /**
     * @param \DateTimeInterface $VerwachteEinddatumIntake
     * @return static
     */
    public function withVerwachteEinddatumIntake(\DateTimeInterface $VerwachteEinddatumIntake) : static
    {
        $new = clone $this;
        $new->VerwachteEinddatumIntake = $VerwachteEinddatumIntake;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray
     */
    public function getPVA() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray
    {
        return $this->PVA;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray $PVA
     * @return static
     */
    public function withPVA(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\CasusPVAArray $PVA) : static
    {
        $new = clone $this;
        $new->PVA = $PVA;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use DateTimeInterface;
use Phpro\SoapClient\Type\RequestInterface;

class TBBoxDetail implements RequestInterface
{

    /**
     * @var int
     */
    private $Code;

    /**
     * @var TRelatie
     */
    private $Relatie;

    /**
     * @var int
     */
    private $ContractVolgnummer;

    /**
     * @var string
     */
    private $ContractSoort;

    /**
     * @var string
     */
    private $SoortOpdracht;

    /**
     * @var int
     */
    private $CodeEiserBegunstigde;

    /**
     * @var int
     */
    private $NummerReservering;

    /**
     * @var int
     */
    private $UniekVolgnummer;

    /**
     * @var DateTimeInterface
     */
    private $AanmaakDatum;

    /**
     * @var DateTimeInterface
     */
    private $OntvangstDatum;

    /**
     * @var bool
     */
    private $Nieuw;

    /**
     * @var DateTimeInterface
     */
    private $EmailDatum;

    /**
     * @var TMedewerker
     */
    private $AanmaakMedewerker;

    /**
     * @var TRelatie
     */
    private $AanmaakRelatie;

    /**
     * @var TMedewerker
     */
    private $AfzenderMedewerker;

    /**
     * @var TRelatie
     */
    private $AfzenderRelatie;

    /**
     * @var TMedewerker
     */
    private $OntvangerMedewerker;

    /**
     * @var TRelatie
     */
    private $OntvangerRelatie;

    /**
     * @var DateTimeInterface
     */
    private $LeesDatum;

    /**
     * @var TMedewerker
     */
    private $LeesMedewerker;

    /**
     * @var TRelatie
     */
    private $LeesRelatie;

    /**
     * @var DateTimeInterface
     */
    private $ArchiefDatum;

    /**
     * @var TMedewerker
     */
    private $ArchiefMedewerker;

    /**
     * @var TRelatie
     */
    private $ArchiefRelatie;

    /**
     * @var string
     */
    private $Onderwerp;

    /**
     * @var string
     */
    private $Tekst;

    /**
     * @var int
     */
    private $BijlagenAantal;

    /**
     * @var TBBoxBijlageArray
     */
    private $Bijlagen;

    /**
     * Constructor
     *
     * @var int $Code
     * @var TRelatie $Relatie
     * @var int $ContractVolgnummer
     * @var string $ContractSoort
     * @var string $SoortOpdracht
     * @var int $CodeEiserBegunstigde
     * @var int $NummerReservering
     * @var int $UniekVolgnummer
     * @var DateTimeInterface $AanmaakDatum
     * @var DateTimeInterface $OntvangstDatum
     * @var bool $Nieuw
     * @var DateTimeInterface $EmailDatum
     * @var TMedewerker $AanmaakMedewerker
     * @var TRelatie $AanmaakRelatie
     * @var TMedewerker $AfzenderMedewerker
     * @var TRelatie $AfzenderRelatie
     * @var TMedewerker $OntvangerMedewerker
     * @var TRelatie $OntvangerRelatie
     * @var DateTimeInterface $LeesDatum
     * @var TMedewerker $LeesMedewerker
     * @var TRelatie $LeesRelatie
     * @var DateTimeInterface $ArchiefDatum
     * @var TMedewerker $ArchiefMedewerker
     * @var TRelatie $ArchiefRelatie
     * @var string $Onderwerp
     * @var string $Tekst
     * @var int $BijlagenAantal
     * @var TBBoxBijlageArray $Bijlagen
     */
    public function __construct($Code, $Relatie, $ContractVolgnummer, $ContractSoort, $SoortOpdracht, $CodeEiserBegunstigde, $NummerReservering, $UniekVolgnummer, $AanmaakDatum, $OntvangstDatum, $Nieuw, $EmailDatum, $AanmaakMedewerker, $AanmaakRelatie, $AfzenderMedewerker, $AfzenderRelatie, $OntvangerMedewerker, $OntvangerRelatie, $LeesDatum, $LeesMedewerker, $LeesRelatie, $ArchiefDatum, $ArchiefMedewerker, $ArchiefRelatie, $Onderwerp, $Tekst, $BijlagenAantal, $Bijlagen)
    {
        $this->Code = $Code;
        $this->Relatie = $Relatie;
        $this->ContractVolgnummer = $ContractVolgnummer;
        $this->ContractSoort = $ContractSoort;
        $this->SoortOpdracht = $SoortOpdracht;
        $this->CodeEiserBegunstigde = $CodeEiserBegunstigde;
        $this->NummerReservering = $NummerReservering;
        $this->UniekVolgnummer = $UniekVolgnummer;
        $this->AanmaakDatum = $AanmaakDatum;
        $this->OntvangstDatum = $OntvangstDatum;
        $this->Nieuw = $Nieuw;
        $this->EmailDatum = $EmailDatum;
        $this->AanmaakMedewerker = $AanmaakMedewerker;
        $this->AanmaakRelatie = $AanmaakRelatie;
        $this->AfzenderMedewerker = $AfzenderMedewerker;
        $this->AfzenderRelatie = $AfzenderRelatie;
        $this->OntvangerMedewerker = $OntvangerMedewerker;
        $this->OntvangerRelatie = $OntvangerRelatie;
        $this->LeesDatum = $LeesDatum;
        $this->LeesMedewerker = $LeesMedewerker;
        $this->LeesRelatie = $LeesRelatie;
        $this->ArchiefDatum = $ArchiefDatum;
        $this->ArchiefMedewerker = $ArchiefMedewerker;
        $this->ArchiefRelatie = $ArchiefRelatie;
        $this->Onderwerp = $Onderwerp;
        $this->Tekst = $Tekst;
        $this->BijlagenAantal = $BijlagenAantal;
        $this->Bijlagen = $Bijlagen;
    }

    /**
     * @return int
     */
    public function getCode()
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return TBBoxDetail
     */
    public function withCode($Code)
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return TRelatie
     */
    public function getRelatie()
    {
        return $this->Relatie;
    }

    /**
     * @param TRelatie $Relatie
     * @return TBBoxDetail
     */
    public function withRelatie($Relatie)
    {
        $new = clone $this;
        $new->Relatie = $Relatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractVolgnummer()
    {
        return $this->ContractVolgnummer;
    }

    /**
     * @param int $ContractVolgnummer
     * @return TBBoxDetail
     */
    public function withContractVolgnummer($ContractVolgnummer)
    {
        $new = clone $this;
        $new->ContractVolgnummer = $ContractVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractSoort()
    {
        return $this->ContractSoort;
    }

    /**
     * @param string $ContractSoort
     * @return TBBoxDetail
     */
    public function withContractSoort($ContractSoort)
    {
        $new = clone $this;
        $new->ContractSoort = $ContractSoort;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortOpdracht()
    {
        return $this->SoortOpdracht;
    }

    /**
     * @param string $SoortOpdracht
     * @return TBBoxDetail
     */
    public function withSoortOpdracht($SoortOpdracht)
    {
        $new = clone $this;
        $new->SoortOpdracht = $SoortOpdracht;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeEiserBegunstigde()
    {
        return $this->CodeEiserBegunstigde;
    }

    /**
     * @param int $CodeEiserBegunstigde
     * @return TBBoxDetail
     */
    public function withCodeEiserBegunstigde($CodeEiserBegunstigde)
    {
        $new = clone $this;
        $new->CodeEiserBegunstigde = $CodeEiserBegunstigde;

        return $new;
    }

    /**
     * @return int
     */
    public function getNummerReservering()
    {
        return $this->NummerReservering;
    }

    /**
     * @param int $NummerReservering
     * @return TBBoxDetail
     */
    public function withNummerReservering($NummerReservering)
    {
        $new = clone $this;
        $new->NummerReservering = $NummerReservering;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer()
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return TBBoxDetail
     */
    public function withUniekVolgnummer($UniekVolgnummer)
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getAanmaakDatum()
    {
        return $this->AanmaakDatum;
    }

    /**
     * @param DateTimeInterface $AanmaakDatum
     * @return TBBoxDetail
     */
    public function withAanmaakDatum($AanmaakDatum)
    {
        $new = clone $this;
        $new->AanmaakDatum = $AanmaakDatum;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getOntvangstDatum()
    {
        return $this->OntvangstDatum;
    }

    /**
     * @param DateTimeInterface $OntvangstDatum
     * @return TBBoxDetail
     */
    public function withOntvangstDatum($OntvangstDatum)
    {
        $new = clone $this;
        $new->OntvangstDatum = $OntvangstDatum;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNieuw()
    {
        return $this->Nieuw;
    }

    /**
     * @param bool $Nieuw
     * @return TBBoxDetail
     */
    public function withNieuw($Nieuw)
    {
        $new = clone $this;
        $new->Nieuw = $Nieuw;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getEmailDatum()
    {
        return $this->EmailDatum;
    }

    /**
     * @param DateTimeInterface $EmailDatum
     * @return TBBoxDetail
     */
    public function withEmailDatum($EmailDatum)
    {
        $new = clone $this;
        $new->EmailDatum = $EmailDatum;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getAanmaakMedewerker()
    {
        return $this->AanmaakMedewerker;
    }

    /**
     * @param TMedewerker $AanmaakMedewerker
     * @return TBBoxDetail
     */
    public function withAanmaakMedewerker($AanmaakMedewerker)
    {
        $new = clone $this;
        $new->AanmaakMedewerker = $AanmaakMedewerker;

        return $new;
    }

    /**
     * @return TRelatie
     */
    public function getAanmaakRelatie()
    {
        return $this->AanmaakRelatie;
    }

    /**
     * @param TRelatie $AanmaakRelatie
     * @return TBBoxDetail
     */
    public function withAanmaakRelatie($AanmaakRelatie)
    {
        $new = clone $this;
        $new->AanmaakRelatie = $AanmaakRelatie;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getAfzenderMedewerker()
    {
        return $this->AfzenderMedewerker;
    }

    /**
     * @param TMedewerker $AfzenderMedewerker
     * @return TBBoxDetail
     */
    public function withAfzenderMedewerker($AfzenderMedewerker)
    {
        $new = clone $this;
        $new->AfzenderMedewerker = $AfzenderMedewerker;

        return $new;
    }

    /**
     * @return TRelatie
     */
    public function getAfzenderRelatie()
    {
        return $this->AfzenderRelatie;
    }

    /**
     * @param TRelatie $AfzenderRelatie
     * @return TBBoxDetail
     */
    public function withAfzenderRelatie($AfzenderRelatie)
    {
        $new = clone $this;
        $new->AfzenderRelatie = $AfzenderRelatie;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getOntvangerMedewerker()
    {
        return $this->OntvangerMedewerker;
    }

    /**
     * @param TMedewerker $OntvangerMedewerker
     * @return TBBoxDetail
     */
    public function withOntvangerMedewerker($OntvangerMedewerker)
    {
        $new = clone $this;
        $new->OntvangerMedewerker = $OntvangerMedewerker;

        return $new;
    }

    /**
     * @return TRelatie
     */
    public function getOntvangerRelatie()
    {
        return $this->OntvangerRelatie;
    }

    /**
     * @param TRelatie $OntvangerRelatie
     * @return TBBoxDetail
     */
    public function withOntvangerRelatie($OntvangerRelatie)
    {
        $new = clone $this;
        $new->OntvangerRelatie = $OntvangerRelatie;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getLeesDatum()
    {
        return $this->LeesDatum;
    }

    /**
     * @param DateTimeInterface $LeesDatum
     * @return TBBoxDetail
     */
    public function withLeesDatum($LeesDatum)
    {
        $new = clone $this;
        $new->LeesDatum = $LeesDatum;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getLeesMedewerker()
    {
        return $this->LeesMedewerker;
    }

    /**
     * @param TMedewerker $LeesMedewerker
     * @return TBBoxDetail
     */
    public function withLeesMedewerker($LeesMedewerker)
    {
        $new = clone $this;
        $new->LeesMedewerker = $LeesMedewerker;

        return $new;
    }

    /**
     * @return TRelatie
     */
    public function getLeesRelatie()
    {
        return $this->LeesRelatie;
    }

    /**
     * @param TRelatie $LeesRelatie
     * @return TBBoxDetail
     */
    public function withLeesRelatie($LeesRelatie)
    {
        $new = clone $this;
        $new->LeesRelatie = $LeesRelatie;

        return $new;
    }

    /**
     * @return DateTimeInterface
     */
    public function getArchiefDatum()
    {
        return $this->ArchiefDatum;
    }

    /**
     * @param DateTimeInterface $ArchiefDatum
     * @return TBBoxDetail
     */
    public function withArchiefDatum($ArchiefDatum)
    {
        $new = clone $this;
        $new->ArchiefDatum = $ArchiefDatum;

        return $new;
    }

    /**
     * @return TMedewerker
     */
    public function getArchiefMedewerker()
    {
        return $this->ArchiefMedewerker;
    }

    /**
     * @param TMedewerker $ArchiefMedewerker
     * @return TBBoxDetail
     */
    public function withArchiefMedewerker($ArchiefMedewerker)
    {
        $new = clone $this;
        $new->ArchiefMedewerker = $ArchiefMedewerker;

        return $new;
    }

    /**
     * @return TRelatie
     */
    public function getArchiefRelatie()
    {
        return $this->ArchiefRelatie;
    }

    /**
     * @param TRelatie $ArchiefRelatie
     * @return TBBoxDetail
     */
    public function withArchiefRelatie($ArchiefRelatie)
    {
        $new = clone $this;
        $new->ArchiefRelatie = $ArchiefRelatie;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnderwerp()
    {
        return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return TBBoxDetail
     */
    public function withOnderwerp($Onderwerp)
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

        return $new;
    }

    /**
     * @return string
     */
    public function getTekst()
    {
        return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return TBBoxDetail
     */
    public function withTekst($Tekst)
    {
        $new = clone $this;
        $new->Tekst = $Tekst;

        return $new;
    }

    /**
     * @return int
     */
    public function getBijlagenAantal()
    {
        return $this->BijlagenAantal;
    }

    /**
     * @param int $BijlagenAantal
     * @return TBBoxDetail
     */
    public function withBijlagenAantal($BijlagenAantal)
    {
        $new = clone $this;
        $new->BijlagenAantal = $BijlagenAantal;

        return $new;
    }

    /**
     * @return TBBoxBijlageArray
     */
    public function getBijlagen()
    {
        return $this->Bijlagen;
    }

    /**
     * @param TBBoxBijlageArray $Bijlagen
     * @return TBBoxDetail
     */
    public function withBijlagen($Bijlagen)
    {
        $new = clone $this;
        $new->Bijlagen = $Bijlagen;

        return $new;
    }


}


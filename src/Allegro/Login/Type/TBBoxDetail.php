<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TBBoxDetail
{
    /**
     * @var int
     */
    private int $Code;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $Relatie;

    /**
     * @var int
     */
    private int $ContractVolgnummer;

    /**
     * @var string
     */
    private string $ContractSoort;

    /**
     * @var string
     */
    private string $SoortOpdracht;

    /**
     * @var int
     */
    private int $CodeEiserBegunstigde;

    /**
     * @var int
     */
    private int $NummerReservering;

    /**
     * @var int
     */
    private int $UniekVolgnummer;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $AanmaakDatum;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $OntvangstDatum;

    /**
     * @var bool
     */
    private bool $Nieuw;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $EmailDatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $AanmaakMedewerker;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $AanmaakRelatie;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $AfzenderMedewerker;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $AfzenderRelatie;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $OntvangerMedewerker;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $OntvangerRelatie;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $LeesDatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $LeesMedewerker;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $LeesRelatie;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $ArchiefDatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $ArchiefMedewerker;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $ArchiefRelatie;

    /**
     * @var string
     */
    private string $Onderwerp;

    /**
     * @var string
     */
    private string $Tekst;

    /**
     * @var int
     */
    private int $BijlagenAantal;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlageArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlageArray $Bijlagen;

    /**
     * @return int
     */
    public function getCode() : int
    {
        return $this->Code;
    }

    /**
     * @param int $Code
     * @return static
     */
    public function withCode(int $Code) : static
    {
        $new = clone $this;
        $new->Code = $Code;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    public function getRelatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
    {
        return $this->Relatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $Relatie
     * @return static
     */
    public function withRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $Relatie) : static
    {
        $new = clone $this;
        $new->Relatie = $Relatie;

        return $new;
    }

    /**
     * @return int
     */
    public function getContractVolgnummer() : int
    {
        return $this->ContractVolgnummer;
    }

    /**
     * @param int $ContractVolgnummer
     * @return static
     */
    public function withContractVolgnummer(int $ContractVolgnummer) : static
    {
        $new = clone $this;
        $new->ContractVolgnummer = $ContractVolgnummer;

        return $new;
    }

    /**
     * @return string
     */
    public function getContractSoort() : string
    {
        return $this->ContractSoort;
    }

    /**
     * @param string $ContractSoort
     * @return static
     */
    public function withContractSoort(string $ContractSoort) : static
    {
        $new = clone $this;
        $new->ContractSoort = $ContractSoort;

        return $new;
    }

    /**
     * @return string
     */
    public function getSoortOpdracht() : string
    {
        return $this->SoortOpdracht;
    }

    /**
     * @param string $SoortOpdracht
     * @return static
     */
    public function withSoortOpdracht(string $SoortOpdracht) : static
    {
        $new = clone $this;
        $new->SoortOpdracht = $SoortOpdracht;

        return $new;
    }

    /**
     * @return int
     */
    public function getCodeEiserBegunstigde() : int
    {
        return $this->CodeEiserBegunstigde;
    }

    /**
     * @param int $CodeEiserBegunstigde
     * @return static
     */
    public function withCodeEiserBegunstigde(int $CodeEiserBegunstigde) : static
    {
        $new = clone $this;
        $new->CodeEiserBegunstigde = $CodeEiserBegunstigde;

        return $new;
    }

    /**
     * @return int
     */
    public function getNummerReservering() : int
    {
        return $this->NummerReservering;
    }

    /**
     * @param int $NummerReservering
     * @return static
     */
    public function withNummerReservering(int $NummerReservering) : static
    {
        $new = clone $this;
        $new->NummerReservering = $NummerReservering;

        return $new;
    }

    /**
     * @return int
     */
    public function getUniekVolgnummer() : int
    {
        return $this->UniekVolgnummer;
    }

    /**
     * @param int $UniekVolgnummer
     * @return static
     */
    public function withUniekVolgnummer(int $UniekVolgnummer) : static
    {
        $new = clone $this;
        $new->UniekVolgnummer = $UniekVolgnummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getAanmaakDatum() : \DateTimeInterface
    {
        return $this->AanmaakDatum;
    }

    /**
     * @param \DateTimeInterface $AanmaakDatum
     * @return static
     */
    public function withAanmaakDatum(\DateTimeInterface $AanmaakDatum) : static
    {
        $new = clone $this;
        $new->AanmaakDatum = $AanmaakDatum;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getOntvangstDatum() : \DateTimeInterface
    {
        return $this->OntvangstDatum;
    }

    /**
     * @param \DateTimeInterface $OntvangstDatum
     * @return static
     */
    public function withOntvangstDatum(\DateTimeInterface $OntvangstDatum) : static
    {
        $new = clone $this;
        $new->OntvangstDatum = $OntvangstDatum;

        return $new;
    }

    /**
     * @return bool
     */
    public function getNieuw() : bool
    {
        return $this->Nieuw;
    }

    /**
     * @param bool $Nieuw
     * @return static
     */
    public function withNieuw(bool $Nieuw) : static
    {
        $new = clone $this;
        $new->Nieuw = $Nieuw;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getEmailDatum() : \DateTimeInterface
    {
        return $this->EmailDatum;
    }

    /**
     * @param \DateTimeInterface $EmailDatum
     * @return static
     */
    public function withEmailDatum(\DateTimeInterface $EmailDatum) : static
    {
        $new = clone $this;
        $new->EmailDatum = $EmailDatum;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getAanmaakMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->AanmaakMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $AanmaakMedewerker
     * @return static
     */
    public function withAanmaakMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $AanmaakMedewerker) : static
    {
        $new = clone $this;
        $new->AanmaakMedewerker = $AanmaakMedewerker;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    public function getAanmaakRelatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
    {
        return $this->AanmaakRelatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $AanmaakRelatie
     * @return static
     */
    public function withAanmaakRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $AanmaakRelatie) : static
    {
        $new = clone $this;
        $new->AanmaakRelatie = $AanmaakRelatie;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getAfzenderMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->AfzenderMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $AfzenderMedewerker
     * @return static
     */
    public function withAfzenderMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $AfzenderMedewerker) : static
    {
        $new = clone $this;
        $new->AfzenderMedewerker = $AfzenderMedewerker;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    public function getAfzenderRelatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
    {
        return $this->AfzenderRelatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $AfzenderRelatie
     * @return static
     */
    public function withAfzenderRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $AfzenderRelatie) : static
    {
        $new = clone $this;
        $new->AfzenderRelatie = $AfzenderRelatie;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getOntvangerMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->OntvangerMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $OntvangerMedewerker
     * @return static
     */
    public function withOntvangerMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $OntvangerMedewerker) : static
    {
        $new = clone $this;
        $new->OntvangerMedewerker = $OntvangerMedewerker;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    public function getOntvangerRelatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
    {
        return $this->OntvangerRelatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $OntvangerRelatie
     * @return static
     */
    public function withOntvangerRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $OntvangerRelatie) : static
    {
        $new = clone $this;
        $new->OntvangerRelatie = $OntvangerRelatie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLeesDatum() : \DateTimeInterface
    {
        return $this->LeesDatum;
    }

    /**
     * @param \DateTimeInterface $LeesDatum
     * @return static
     */
    public function withLeesDatum(\DateTimeInterface $LeesDatum) : static
    {
        $new = clone $this;
        $new->LeesDatum = $LeesDatum;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getLeesMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->LeesMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $LeesMedewerker
     * @return static
     */
    public function withLeesMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $LeesMedewerker) : static
    {
        $new = clone $this;
        $new->LeesMedewerker = $LeesMedewerker;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    public function getLeesRelatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
    {
        return $this->LeesRelatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $LeesRelatie
     * @return static
     */
    public function withLeesRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $LeesRelatie) : static
    {
        $new = clone $this;
        $new->LeesRelatie = $LeesRelatie;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getArchiefDatum() : \DateTimeInterface
    {
        return $this->ArchiefDatum;
    }

    /**
     * @param \DateTimeInterface $ArchiefDatum
     * @return static
     */
    public function withArchiefDatum(\DateTimeInterface $ArchiefDatum) : static
    {
        $new = clone $this;
        $new->ArchiefDatum = $ArchiefDatum;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getArchiefMedewerker() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->ArchiefMedewerker;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $ArchiefMedewerker
     * @return static
     */
    public function withArchiefMedewerker(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $ArchiefMedewerker) : static
    {
        $new = clone $this;
        $new->ArchiefMedewerker = $ArchiefMedewerker;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
     */
    public function getArchiefRelatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie
    {
        return $this->ArchiefRelatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $ArchiefRelatie
     * @return static
     */
    public function withArchiefRelatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TRelatie $ArchiefRelatie) : static
    {
        $new = clone $this;
        $new->ArchiefRelatie = $ArchiefRelatie;

        return $new;
    }

    /**
     * @return string
     */
    public function getOnderwerp() : string
    {
        return $this->Onderwerp;
    }

    /**
     * @param string $Onderwerp
     * @return static
     */
    public function withOnderwerp(string $Onderwerp) : static
    {
        $new = clone $this;
        $new->Onderwerp = $Onderwerp;

        return $new;
    }

    /**
     * @return string
     */
    public function getTekst() : string
    {
        return $this->Tekst;
    }

    /**
     * @param string $Tekst
     * @return static
     */
    public function withTekst(string $Tekst) : static
    {
        $new = clone $this;
        $new->Tekst = $Tekst;

        return $new;
    }

    /**
     * @return int
     */
    public function getBijlagenAantal() : int
    {
        return $this->BijlagenAantal;
    }

    /**
     * @param int $BijlagenAantal
     * @return static
     */
    public function withBijlagenAantal(int $BijlagenAantal) : static
    {
        $new = clone $this;
        $new->BijlagenAantal = $BijlagenAantal;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlageArray
     */
    public function getBijlagen() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlageArray
    {
        return $this->Bijlagen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlageArray $Bijlagen
     * @return static
     */
    public function withBijlagen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBoxBijlageArray $Bijlagen) : static
    {
        $new = clone $this;
        $new->Bijlagen = $Bijlagen;

        return $new;
    }
}


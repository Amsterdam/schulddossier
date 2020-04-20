<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TBBoxDetail
{

    /**
     * @var int $Code
     */
    protected $Code = null;

    /**
     * @var TRelatie $Relatie
     */
    protected $Relatie = null;

    /**
     * @var int $ContractVolgnummer
     */
    protected $ContractVolgnummer = null;

    /**
     * @var string $ContractSoort
     */
    protected $ContractSoort = null;

    /**
     * @var string $SoortOpdracht
     */
    protected $SoortOpdracht = null;

    /**
     * @var int $CodeEiserBegunstigde
     */
    protected $CodeEiserBegunstigde = null;

    /**
     * @var int $NummerReservering
     */
    protected $NummerReservering = null;

    /**
     * @var int $UniekVolgnummer
     */
    protected $UniekVolgnummer = null;

    /**
     * @var \DateTime $AanmaakDatum
     */
    protected $AanmaakDatum = null;

    /**
     * @var \DateTime $OntvangstDatum
     */
    protected $OntvangstDatum = null;

    /**
     * @var boolean $Nieuw
     */
    protected $Nieuw = null;

    /**
     * @var \DateTime $EmailDatum
     */
    protected $EmailDatum = null;

    /**
     * @var TMedewerker $AanmaakMedewerker
     */
    protected $AanmaakMedewerker = null;

    /**
     * @var TRelatie $AanmaakRelatie
     */
    protected $AanmaakRelatie = null;

    /**
     * @var TMedewerker $AfzenderMedewerker
     */
    protected $AfzenderMedewerker = null;

    /**
     * @var TRelatie $AfzenderRelatie
     */
    protected $AfzenderRelatie = null;

    /**
     * @var TMedewerker $OntvangerMedewerker
     */
    protected $OntvangerMedewerker = null;

    /**
     * @var TRelatie $OntvangerRelatie
     */
    protected $OntvangerRelatie = null;

    /**
     * @var \DateTime $LeesDatum
     */
    protected $LeesDatum = null;

    /**
     * @var TMedewerker $LeesMedewerker
     */
    protected $LeesMedewerker = null;

    /**
     * @var TRelatie $LeesRelatie
     */
    protected $LeesRelatie = null;

    /**
     * @var \DateTime $ArchiefDatum
     */
    protected $ArchiefDatum = null;

    /**
     * @var TMedewerker $ArchiefMedewerker
     */
    protected $ArchiefMedewerker = null;

    /**
     * @var TRelatie $ArchiefRelatie
     */
    protected $ArchiefRelatie = null;

    /**
     * @var string $Onderwerp
     */
    protected $Onderwerp = null;

    /**
     * @var string $Tekst
     */
    protected $Tekst = null;

    /**
     * @var int $BijlagenAantal
     */
    protected $BijlagenAantal = null;

    /**
     * @var TBBoxBijlageArray $Bijlagen
     */
    protected $Bijlagen = null;

    /**
     * @param int $Code
     * @param TRelatie $Relatie
     * @param int $ContractVolgnummer
     * @param string $ContractSoort
     * @param string $SoortOpdracht
     * @param int $CodeEiserBegunstigde
     * @param int $NummerReservering
     * @param int $UniekVolgnummer
     * @param \DateTime $AanmaakDatum
     * @param \DateTime $OntvangstDatum
     * @param boolean $Nieuw
     * @param \DateTime $EmailDatum
     * @param TMedewerker $AanmaakMedewerker
     * @param TRelatie $AanmaakRelatie
     * @param TMedewerker $AfzenderMedewerker
     * @param TRelatie $AfzenderRelatie
     * @param TMedewerker $OntvangerMedewerker
     * @param TRelatie $OntvangerRelatie
     * @param \DateTime $LeesDatum
     * @param TMedewerker $LeesMedewerker
     * @param TRelatie $LeesRelatie
     * @param \DateTime $ArchiefDatum
     * @param TMedewerker $ArchiefMedewerker
     * @param TRelatie $ArchiefRelatie
     * @param string $Onderwerp
     * @param string $Tekst
     * @param int $BijlagenAantal
     * @param TBBoxBijlageArray $Bijlagen
     */
    public function __construct($Code, $Relatie, $ContractVolgnummer, $ContractSoort, $SoortOpdracht, $CodeEiserBegunstigde, $NummerReservering, $UniekVolgnummer, \DateTime $AanmaakDatum, \DateTime $OntvangstDatum, $Nieuw, \DateTime $EmailDatum, $AanmaakMedewerker, $AanmaakRelatie, $AfzenderMedewerker, $AfzenderRelatie, $OntvangerMedewerker, $OntvangerRelatie, \DateTime $LeesDatum, $LeesMedewerker, $LeesRelatie, \DateTime $ArchiefDatum, $ArchiefMedewerker, $ArchiefRelatie, $Onderwerp, $Tekst, $BijlagenAantal, $Bijlagen)
    {
      $this->Code = $Code;
      $this->Relatie = $Relatie;
      $this->ContractVolgnummer = $ContractVolgnummer;
      $this->ContractSoort = $ContractSoort;
      $this->SoortOpdracht = $SoortOpdracht;
      $this->CodeEiserBegunstigde = $CodeEiserBegunstigde;
      $this->NummerReservering = $NummerReservering;
      $this->UniekVolgnummer = $UniekVolgnummer;
      $this->AanmaakDatum = $AanmaakDatum->format(\DateTime::ATOM);
      $this->OntvangstDatum = $OntvangstDatum->format(\DateTime::ATOM);
      $this->Nieuw = $Nieuw;
      $this->EmailDatum = $EmailDatum->format(\DateTime::ATOM);
      $this->AanmaakMedewerker = $AanmaakMedewerker;
      $this->AanmaakRelatie = $AanmaakRelatie;
      $this->AfzenderMedewerker = $AfzenderMedewerker;
      $this->AfzenderRelatie = $AfzenderRelatie;
      $this->OntvangerMedewerker = $OntvangerMedewerker;
      $this->OntvangerRelatie = $OntvangerRelatie;
      $this->LeesDatum = $LeesDatum->format(\DateTime::ATOM);
      $this->LeesMedewerker = $LeesMedewerker;
      $this->LeesRelatie = $LeesRelatie;
      $this->ArchiefDatum = $ArchiefDatum->format(\DateTime::ATOM);
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setCode($Code)
    {
      $this->Code = $Code;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setRelatie($Relatie)
    {
      $this->Relatie = $Relatie;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setContractVolgnummer($ContractVolgnummer)
    {
      $this->ContractVolgnummer = $ContractVolgnummer;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setContractSoort($ContractSoort)
    {
      $this->ContractSoort = $ContractSoort;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setSoortOpdracht($SoortOpdracht)
    {
      $this->SoortOpdracht = $SoortOpdracht;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setCodeEiserBegunstigde($CodeEiserBegunstigde)
    {
      $this->CodeEiserBegunstigde = $CodeEiserBegunstigde;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setNummerReservering($NummerReservering)
    {
      $this->NummerReservering = $NummerReservering;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setUniekVolgnummer($UniekVolgnummer)
    {
      $this->UniekVolgnummer = $UniekVolgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAanmaakDatum()
    {
      if ($this->AanmaakDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->AanmaakDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $AanmaakDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setAanmaakDatum(\DateTime $AanmaakDatum)
    {
      $this->AanmaakDatum = $AanmaakDatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getOntvangstDatum()
    {
      if ($this->OntvangstDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->OntvangstDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $OntvangstDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setOntvangstDatum(\DateTime $OntvangstDatum)
    {
      $this->OntvangstDatum = $OntvangstDatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNieuw()
    {
      return $this->Nieuw;
    }

    /**
     * @param boolean $Nieuw
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setNieuw($Nieuw)
    {
      $this->Nieuw = $Nieuw;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEmailDatum()
    {
      if ($this->EmailDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->EmailDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $EmailDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setEmailDatum(\DateTime $EmailDatum)
    {
      $this->EmailDatum = $EmailDatum->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setAanmaakMedewerker($AanmaakMedewerker)
    {
      $this->AanmaakMedewerker = $AanmaakMedewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setAanmaakRelatie($AanmaakRelatie)
    {
      $this->AanmaakRelatie = $AanmaakRelatie;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setAfzenderMedewerker($AfzenderMedewerker)
    {
      $this->AfzenderMedewerker = $AfzenderMedewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setAfzenderRelatie($AfzenderRelatie)
    {
      $this->AfzenderRelatie = $AfzenderRelatie;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setOntvangerMedewerker($OntvangerMedewerker)
    {
      $this->OntvangerMedewerker = $OntvangerMedewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setOntvangerRelatie($OntvangerRelatie)
    {
      $this->OntvangerRelatie = $OntvangerRelatie;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLeesDatum()
    {
      if ($this->LeesDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LeesDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LeesDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setLeesDatum(\DateTime $LeesDatum)
    {
      $this->LeesDatum = $LeesDatum->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setLeesMedewerker($LeesMedewerker)
    {
      $this->LeesMedewerker = $LeesMedewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setLeesRelatie($LeesRelatie)
    {
      $this->LeesRelatie = $LeesRelatie;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getArchiefDatum()
    {
      if ($this->ArchiefDatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->ArchiefDatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $ArchiefDatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setArchiefDatum(\DateTime $ArchiefDatum)
    {
      $this->ArchiefDatum = $ArchiefDatum->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setArchiefMedewerker($ArchiefMedewerker)
    {
      $this->ArchiefMedewerker = $ArchiefMedewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setArchiefRelatie($ArchiefRelatie)
    {
      $this->ArchiefRelatie = $ArchiefRelatie;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setOnderwerp($Onderwerp)
    {
      $this->Onderwerp = $Onderwerp;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setTekst($Tekst)
    {
      $this->Tekst = $Tekst;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setBijlagenAantal($BijlagenAantal)
    {
      $this->BijlagenAantal = $BijlagenAantal;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TBBoxDetail
     */
    public function setBijlagen($Bijlagen)
    {
      $this->Bijlagen = $Bijlagen;
      return $this;
    }

}

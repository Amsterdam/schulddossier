<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TPLAanvraag
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $Volgnummer
     */
    protected $Volgnummer = null;

    /**
     * @var \DateTime $DatumAanvraag
     */
    protected $DatumAanvraag = null;

    /**
     * @var eSoortLening $SoortLening
     */
    protected $SoortLening = null;

    /**
     * @var int $MedelenerCode
     */
    protected $MedelenerCode = null;

    /**
     * @var string $Medewerker
     */
    protected $Medewerker = null;

    /**
     * @var float $GewenstKrediet
     */
    protected $GewenstKrediet = null;

    /**
     * @var eStatusAanvraag $Status
     */
    protected $Status = null;

    /**
     * @var \DateTime $DatumStatus
     */
    protected $DatumStatus = null;

    /**
     * @var string $RedenAfwijzing
     */
    protected $RedenAfwijzing = null;

    /**
     * @var \DateTime $DatumStatusA
     */
    protected $DatumStatusA = null;

    /**
     * @var \DateTime $DatumStatusB
     */
    protected $DatumStatusB = null;

    /**
     * @var \DateTime $DatumStatusC
     */
    protected $DatumStatusC = null;

    /**
     * @var \DateTime $DatumStatusD
     */
    protected $DatumStatusD = null;

    /**
     * @var \DateTime $DatumStatusE
     */
    protected $DatumStatusE = null;

    /**
     * @var \DateTime $DatumStatusAfIn
     */
    protected $DatumStatusAfIn = null;

    /**
     * @var \DateTime $DatumStatusFiat
     */
    protected $DatumStatusFiat = null;

    /**
     * @param int $Relatiecode
     * @param int $Volgnummer
     * @param \DateTime $DatumAanvraag
     * @param eSoortLening $SoortLening
     * @param int $MedelenerCode
     * @param string $Medewerker
     * @param float $GewenstKrediet
     * @param eStatusAanvraag $Status
     * @param \DateTime $DatumStatus
     * @param string $RedenAfwijzing
     * @param \DateTime $DatumStatusA
     * @param \DateTime $DatumStatusB
     * @param \DateTime $DatumStatusC
     * @param \DateTime $DatumStatusD
     * @param \DateTime $DatumStatusE
     * @param \DateTime $DatumStatusAfIn
     * @param \DateTime $DatumStatusFiat
     */
    public function __construct($Relatiecode, $Volgnummer, \DateTime $DatumAanvraag, $SoortLening, $MedelenerCode, $Medewerker, $GewenstKrediet, $Status, \DateTime $DatumStatus, $RedenAfwijzing, \DateTime $DatumStatusA, \DateTime $DatumStatusB, \DateTime $DatumStatusC, \DateTime $DatumStatusD, \DateTime $DatumStatusE, \DateTime $DatumStatusAfIn, \DateTime $DatumStatusFiat)
    {
      $this->Relatiecode = $Relatiecode;
      $this->Volgnummer = $Volgnummer;
      $this->DatumAanvraag = $DatumAanvraag->format(\DateTime::ATOM);
      $this->SoortLening = $SoortLening;
      $this->MedelenerCode = $MedelenerCode;
      $this->Medewerker = $Medewerker;
      $this->GewenstKrediet = $GewenstKrediet;
      $this->Status = $Status;
      $this->DatumStatus = $DatumStatus->format(\DateTime::ATOM);
      $this->RedenAfwijzing = $RedenAfwijzing;
      $this->DatumStatusA = $DatumStatusA->format(\DateTime::ATOM);
      $this->DatumStatusB = $DatumStatusB->format(\DateTime::ATOM);
      $this->DatumStatusC = $DatumStatusC->format(\DateTime::ATOM);
      $this->DatumStatusD = $DatumStatusD->format(\DateTime::ATOM);
      $this->DatumStatusE = $DatumStatusE->format(\DateTime::ATOM);
      $this->DatumStatusAfIn = $DatumStatusAfIn->format(\DateTime::ATOM);
      $this->DatumStatusFiat = $DatumStatusFiat->format(\DateTime::ATOM);
    }

    /**
     * @return int
     */
    public function getRelatiecode()
    {
      return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setVolgnummer($Volgnummer)
    {
      $this->Volgnummer = $Volgnummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAanvraag()
    {
      if ($this->DatumAanvraag == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAanvraag);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAanvraag
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumAanvraag(\DateTime $DatumAanvraag)
    {
      $this->DatumAanvraag = $DatumAanvraag->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return eSoortLening
     */
    public function getSoortLening()
    {
      return $this->SoortLening;
    }

    /**
     * @param eSoortLening $SoortLening
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setSoortLening($SoortLening)
    {
      $this->SoortLening = $SoortLening;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setMedelenerCode($MedelenerCode)
    {
      $this->MedelenerCode = $MedelenerCode;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setMedewerker($Medewerker)
    {
      $this->Medewerker = $Medewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setGewenstKrediet($GewenstKrediet)
    {
      $this->GewenstKrediet = $GewenstKrediet;
      return $this;
    }

    /**
     * @return eStatusAanvraag
     */
    public function getStatus()
    {
      return $this->Status;
    }

    /**
     * @param eStatusAanvraag $Status
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setStatus($Status)
    {
      $this->Status = $Status;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatus()
    {
      if ($this->DatumStatus == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatus);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatus
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatus(\DateTime $DatumStatus)
    {
      $this->DatumStatus = $DatumStatus->format(\DateTime::ATOM);
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setRedenAfwijzing($RedenAfwijzing)
    {
      $this->RedenAfwijzing = $RedenAfwijzing;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatusA()
    {
      if ($this->DatumStatusA == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatusA);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatusA
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatusA(\DateTime $DatumStatusA)
    {
      $this->DatumStatusA = $DatumStatusA->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatusB()
    {
      if ($this->DatumStatusB == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatusB);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatusB
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatusB(\DateTime $DatumStatusB)
    {
      $this->DatumStatusB = $DatumStatusB->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatusC()
    {
      if ($this->DatumStatusC == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatusC);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatusC
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatusC(\DateTime $DatumStatusC)
    {
      $this->DatumStatusC = $DatumStatusC->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatusD()
    {
      if ($this->DatumStatusD == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatusD);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatusD
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatusD(\DateTime $DatumStatusD)
    {
      $this->DatumStatusD = $DatumStatusD->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatusE()
    {
      if ($this->DatumStatusE == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatusE);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatusE
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatusE(\DateTime $DatumStatusE)
    {
      $this->DatumStatusE = $DatumStatusE->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatusAfIn()
    {
      if ($this->DatumStatusAfIn == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatusAfIn);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatusAfIn
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatusAfIn(\DateTime $DatumStatusAfIn)
    {
      $this->DatumStatusAfIn = $DatumStatusAfIn->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStatusFiat()
    {
      if ($this->DatumStatusFiat == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStatusFiat);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStatusFiat
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TPLAanvraag
     */
    public function setDatumStatusFiat(\DateTime $DatumStatusFiat)
    {
      $this->DatumStatusFiat = $DatumStatusFiat->format(\DateTime::ATOM);
      return $this;
    }

}

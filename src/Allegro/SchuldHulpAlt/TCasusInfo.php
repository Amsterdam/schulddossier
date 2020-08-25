<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TCasusInfo
{

    /**
     * @var TCasusHeader $InfoHeader
     */
    protected $InfoHeader = null;

    /**
     * @var string $CasusMedewerker
     */
    protected $CasusMedewerker = null;

    /**
     * @var string $CasusTeam
     */
    protected $CasusTeam = null;

    /**
     * @var int $Opdrachtgever
     */
    protected $Opdrachtgever = null;

    /**
     * @var int $OpdrachtgeverContact
     */
    protected $OpdrachtgeverContact = null;

    /**
     * @var \DateTime $DatumAanmelding
     */
    protected $DatumAanmelding = null;

    /**
     * @var \DateTime $DatumAanmeldingEinde
     */
    protected $DatumAanmeldingEinde = null;

    /**
     * @var \DateTime $DatumIntake
     */
    protected $DatumIntake = null;

    /**
     * @var \DateTime $DatumIntakeEinde
     */
    protected $DatumIntakeEinde = null;

    /**
     * @var \DateTime $DatumInventarisatie
     */
    protected $DatumInventarisatie = null;

    /**
     * @var \DateTime $DatumInventarisatieEinde
     */
    protected $DatumInventarisatieEinde = null;

    /**
     * @var \DateTime $DatumAnalyse
     */
    protected $DatumAnalyse = null;

    /**
     * @var \DateTime $DatumAnalyseEinde
     */
    protected $DatumAnalyseEinde = null;

    /**
     * @var boolean $Crisis
     */
    protected $Crisis = null;

    /**
     * @var \DateTime $DatumCrisis
     */
    protected $DatumCrisis = null;

    /**
     * @var \DateTime $DatumCrisisEinde
     */
    protected $DatumCrisisEinde = null;

    /**
     * @var \DateTime $DatumAfwijzing
     */
    protected $DatumAfwijzing = null;

    /**
     * @var \DateTime $DatumAfwijzingEinde
     */
    protected $DatumAfwijzingEinde = null;

    /**
     * @var \DateTime $DatumStop
     */
    protected $DatumStop = null;

    /**
     * @var \DateTime $DatumStopEinde
     */
    protected $DatumStopEinde = null;

    /**
     * @var \DateTime $VerwachteEinddatumIntake
     */
    protected $VerwachteEinddatumIntake = null;

    /**
     * @var CasusPVAArray $PVA
     */
    protected $PVA = null;

    /**
     * @param TCasusHeader $InfoHeader
     * @param string $CasusMedewerker
     * @param string $CasusTeam
     * @param int $Opdrachtgever
     * @param int $OpdrachtgeverContact
     * @param \DateTime $DatumAanmelding
     * @param \DateTime $DatumAanmeldingEinde
     * @param \DateTime $DatumIntake
     * @param \DateTime $DatumIntakeEinde
     * @param \DateTime $DatumInventarisatie
     * @param \DateTime $DatumInventarisatieEinde
     * @param \DateTime $DatumAnalyse
     * @param \DateTime $DatumAnalyseEinde
     * @param boolean $Crisis
     * @param \DateTime $DatumCrisis
     * @param \DateTime $DatumCrisisEinde
     * @param \DateTime $DatumAfwijzing
     * @param \DateTime $DatumAfwijzingEinde
     * @param \DateTime $DatumStop
     * @param \DateTime $DatumStopEinde
     * @param \DateTime $VerwachteEinddatumIntake
     * @param CasusPVAArray $PVA
     */
    public function __construct($InfoHeader, $CasusMedewerker, $CasusTeam, $Opdrachtgever, $OpdrachtgeverContact, \DateTime $DatumAanmelding, \DateTime $DatumAanmeldingEinde, \DateTime $DatumIntake, \DateTime $DatumIntakeEinde, \DateTime $DatumInventarisatie, \DateTime $DatumInventarisatieEinde, \DateTime $DatumAnalyse, \DateTime $DatumAnalyseEinde, $Crisis, \DateTime $DatumCrisis, \DateTime $DatumCrisisEinde, \DateTime $DatumAfwijzing, \DateTime $DatumAfwijzingEinde, \DateTime $DatumStop, \DateTime $DatumStopEinde, \DateTime $VerwachteEinddatumIntake, $PVA)
    {
      $this->InfoHeader = $InfoHeader;
      $this->CasusMedewerker = $CasusMedewerker;
      $this->CasusTeam = $CasusTeam;
      $this->Opdrachtgever = $Opdrachtgever;
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      $this->DatumAanmelding = $DatumAanmelding->format(\DateTime::ATOM);
      $this->DatumAanmeldingEinde = $DatumAanmeldingEinde->format(\DateTime::ATOM);
      $this->DatumIntake = $DatumIntake->format(\DateTime::ATOM);
      $this->DatumIntakeEinde = $DatumIntakeEinde->format(\DateTime::ATOM);
      $this->DatumInventarisatie = $DatumInventarisatie->format(\DateTime::ATOM);
      $this->DatumInventarisatieEinde = $DatumInventarisatieEinde->format(\DateTime::ATOM);
      $this->DatumAnalyse = $DatumAnalyse->format(\DateTime::ATOM);
      $this->DatumAnalyseEinde = $DatumAnalyseEinde->format(\DateTime::ATOM);
      $this->Crisis = $Crisis;
      $this->DatumCrisis = $DatumCrisis->format(\DateTime::ATOM);
      $this->DatumCrisisEinde = $DatumCrisisEinde->format(\DateTime::ATOM);
      $this->DatumAfwijzing = $DatumAfwijzing->format(\DateTime::ATOM);
      $this->DatumAfwijzingEinde = $DatumAfwijzingEinde->format(\DateTime::ATOM);
      $this->DatumStop = $DatumStop->format(\DateTime::ATOM);
      $this->DatumStopEinde = $DatumStopEinde->format(\DateTime::ATOM);
      $this->VerwachteEinddatumIntake = $VerwachteEinddatumIntake->format(\DateTime::ATOM);
      $this->PVA = $PVA;
    }

    /**
     * @return TCasusHeader
     */
    public function getInfoHeader()
    {
      return $this->InfoHeader;
    }

    /**
     * @param TCasusHeader $InfoHeader
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setInfoHeader($InfoHeader)
    {
      $this->InfoHeader = $InfoHeader;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setCasusMedewerker($CasusMedewerker)
    {
      $this->CasusMedewerker = $CasusMedewerker;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setCasusTeam($CasusTeam)
    {
      $this->CasusTeam = $CasusTeam;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setOpdrachtgever($Opdrachtgever)
    {
      $this->Opdrachtgever = $Opdrachtgever;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setOpdrachtgeverContact($OpdrachtgeverContact)
    {
      $this->OpdrachtgeverContact = $OpdrachtgeverContact;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAanmelding()
    {
      if ($this->DatumAanmelding == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAanmelding);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAanmelding
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumAanmelding(\DateTime $DatumAanmelding)
    {
      $this->DatumAanmelding = $DatumAanmelding->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAanmeldingEinde()
    {
      if ($this->DatumAanmeldingEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAanmeldingEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAanmeldingEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumAanmeldingEinde(\DateTime $DatumAanmeldingEinde)
    {
      $this->DatumAanmeldingEinde = $DatumAanmeldingEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumIntake()
    {
      if ($this->DatumIntake == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumIntake);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumIntake
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumIntake(\DateTime $DatumIntake)
    {
      $this->DatumIntake = $DatumIntake->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumIntakeEinde()
    {
      if ($this->DatumIntakeEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumIntakeEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumIntakeEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumIntakeEinde(\DateTime $DatumIntakeEinde)
    {
      $this->DatumIntakeEinde = $DatumIntakeEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumInventarisatie()
    {
      if ($this->DatumInventarisatie == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumInventarisatie);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumInventarisatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumInventarisatie(\DateTime $DatumInventarisatie)
    {
      $this->DatumInventarisatie = $DatumInventarisatie->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumInventarisatieEinde()
    {
      if ($this->DatumInventarisatieEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumInventarisatieEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumInventarisatieEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumInventarisatieEinde(\DateTime $DatumInventarisatieEinde)
    {
      $this->DatumInventarisatieEinde = $DatumInventarisatieEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAnalyse()
    {
      if ($this->DatumAnalyse == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAnalyse);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAnalyse
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumAnalyse(\DateTime $DatumAnalyse)
    {
      $this->DatumAnalyse = $DatumAnalyse->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAnalyseEinde()
    {
      if ($this->DatumAnalyseEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAnalyseEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAnalyseEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumAnalyseEinde(\DateTime $DatumAnalyseEinde)
    {
      $this->DatumAnalyseEinde = $DatumAnalyseEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCrisis()
    {
      return $this->Crisis;
    }

    /**
     * @param boolean $Crisis
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setCrisis($Crisis)
    {
      $this->Crisis = $Crisis;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumCrisis()
    {
      if ($this->DatumCrisis == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumCrisis);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumCrisis
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumCrisis(\DateTime $DatumCrisis)
    {
      $this->DatumCrisis = $DatumCrisis->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumCrisisEinde()
    {
      if ($this->DatumCrisisEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumCrisisEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumCrisisEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumCrisisEinde(\DateTime $DatumCrisisEinde)
    {
      $this->DatumCrisisEinde = $DatumCrisisEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAfwijzing()
    {
      if ($this->DatumAfwijzing == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAfwijzing);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAfwijzing
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumAfwijzing(\DateTime $DatumAfwijzing)
    {
      $this->DatumAfwijzing = $DatumAfwijzing->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumAfwijzingEinde()
    {
      if ($this->DatumAfwijzingEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumAfwijzingEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumAfwijzingEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumAfwijzingEinde(\DateTime $DatumAfwijzingEinde)
    {
      $this->DatumAfwijzingEinde = $DatumAfwijzingEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStop()
    {
      if ($this->DatumStop == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStop);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStop
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumStop(\DateTime $DatumStop)
    {
      $this->DatumStop = $DatumStop->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDatumStopEinde()
    {
      if ($this->DatumStopEinde == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DatumStopEinde);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DatumStopEinde
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setDatumStopEinde(\DateTime $DatumStopEinde)
    {
      $this->DatumStopEinde = $DatumStopEinde->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getVerwachteEinddatumIntake()
    {
      if ($this->VerwachteEinddatumIntake == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->VerwachteEinddatumIntake);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $VerwachteEinddatumIntake
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setVerwachteEinddatumIntake(\DateTime $VerwachteEinddatumIntake)
    {
      $this->VerwachteEinddatumIntake = $VerwachteEinddatumIntake->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return CasusPVAArray
     */
    public function getPVA()
    {
      return $this->PVA;
    }

    /**
     * @param CasusPVAArray $PVA
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TCasusInfo
     */
    public function setPVA($PVA)
    {
      $this->PVA = $PVA;
      return $this;
    }

}

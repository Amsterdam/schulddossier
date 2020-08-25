<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class AWUserInfo extends UserInfo
{

    /**
     * @var string $LoginType
     */
    protected $LoginType = null;

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var string $Naam
     */
    protected $Naam = null;

    /**
     * @var \DateTime $LaatsteLogin
     */
    protected $LaatsteLogin = null;

    /**
     * @var string $Autorisaties
     */
    protected $Autorisaties = null;

    /**
     * @var int $ExtraInfo
     */
    protected $ExtraInfo = null;

    /**
     * @var string $ExtraInfoOmschrijving
     */
    protected $ExtraInfoOmschrijving = null;

    /**
     * @var boolean $WachtwoordWijzigen
     */
    protected $WachtwoordWijzigen = null;

    /**
     * @param string $SessionID
     * @param string $UserID
     * @param StringArray $Privileges
     * @param VariantArray $Attributes
     * @param base64Binary $UserData
     * @param string $LoginType
     * @param int $RelatieCode
     * @param string $Naam
     * @param \DateTime $LaatsteLogin
     * @param string $Autorisaties
     * @param int $ExtraInfo
     * @param string $ExtraInfoOmschrijving
     * @param boolean $WachtwoordWijzigen
     */
    public function __construct($SessionID, $UserID, $Privileges, $Attributes, $UserData, $LoginType, $RelatieCode, $Naam, \DateTime $LaatsteLogin, $Autorisaties, $ExtraInfo, $ExtraInfoOmschrijving, $WachtwoordWijzigen)
    {
      parent::__construct($SessionID, $UserID, $Privileges, $Attributes, $UserData);
      $this->LoginType = $LoginType;
      $this->RelatieCode = $RelatieCode;
      $this->Naam = $Naam;
      $this->LaatsteLogin = $LaatsteLogin->format(\DateTime::ATOM);
      $this->Autorisaties = $Autorisaties;
      $this->ExtraInfo = $ExtraInfo;
      $this->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;
      $this->WachtwoordWijzigen = $WachtwoordWijzigen;
    }

    /**
     * @return string
     */
    public function getLoginType()
    {
      return $this->LoginType;
    }

    /**
     * @param string $LoginType
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setLoginType($LoginType)
    {
      $this->LoginType = $LoginType;
      return $this;
    }

    /**
     * @return int
     */
    public function getRelatieCode()
    {
      return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getNaam()
    {
      return $this->Naam;
    }

    /**
     * @param string $Naam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setNaam($Naam)
    {
      $this->Naam = $Naam;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLaatsteLogin()
    {
      if ($this->LaatsteLogin == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LaatsteLogin);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LaatsteLogin
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setLaatsteLogin(\DateTime $LaatsteLogin)
    {
      $this->LaatsteLogin = $LaatsteLogin->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getAutorisaties()
    {
      return $this->Autorisaties;
    }

    /**
     * @param string $Autorisaties
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setAutorisaties($Autorisaties)
    {
      $this->Autorisaties = $Autorisaties;
      return $this;
    }

    /**
     * @return int
     */
    public function getExtraInfo()
    {
      return $this->ExtraInfo;
    }

    /**
     * @param int $ExtraInfo
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setExtraInfo($ExtraInfo)
    {
      $this->ExtraInfo = $ExtraInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtraInfoOmschrijving()
    {
      return $this->ExtraInfoOmschrijving;
    }

    /**
     * @param string $ExtraInfoOmschrijving
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setExtraInfoOmschrijving($ExtraInfoOmschrijving)
    {
      $this->ExtraInfoOmschrijving = $ExtraInfoOmschrijving;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getWachtwoordWijzigen()
    {
      return $this->WachtwoordWijzigen;
    }

    /**
     * @param boolean $WachtwoordWijzigen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\AWUserInfo
     */
    public function setWachtwoordWijzigen($WachtwoordWijzigen)
    {
      $this->WachtwoordWijzigen = $WachtwoordWijzigen;
      return $this;
    }

}

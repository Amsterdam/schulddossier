<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TRelatie
{

    /**
     * @var int $RelatieCode
     */
    protected $RelatieCode = null;

    /**
     * @var string $Voornamen
     */
    protected $Voornamen = null;

    /**
     * @var string $Voorletters
     */
    protected $Voorletters = null;

    /**
     * @var string $Zoeknaam
     */
    protected $Zoeknaam = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Voorvoegsels
     */
    protected $Voorvoegsels = null;

    /**
     * @var string $Geslacht
     */
    protected $Geslacht = null;

    /**
     * @var TAdres $BezoekAdres
     */
    protected $BezoekAdres = null;

    /**
     * @var TAdres $PostAdres
     */
    protected $PostAdres = null;

    /**
     * @var \DateTime $Geboortedatum
     */
    protected $Geboortedatum = null;

    /**
     * @var string $Geboorteplaats
     */
    protected $Geboorteplaats = null;

    /**
     * @var int $BSN
     */
    protected $BSN = null;

    /**
     * @var string $Rekening
     */
    protected $Rekening = null;

    /**
     * @var string $Telefoon1
     */
    protected $Telefoon1 = null;

    /**
     * @var string $Telefoon2
     */
    protected $Telefoon2 = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $BurgerlijkeStaat
     */
    protected $BurgerlijkeStaat = null;

    /**
     * @var int $PartnerCode
     */
    protected $PartnerCode = null;

    /**
     * @var string $Autorisaties
     */
    protected $Autorisaties = null;

    /**
     * @var string $Identificatiebewijs
     */
    protected $Identificatiebewijs = null;

    /**
     * @var string $IdentificatieNummer
     */
    protected $IdentificatieNummer = null;

    /**
     * @var \DateTime $IdentificatieGeldig
     */
    protected $IdentificatieGeldig = null;

    /**
     * @var KindArray $Kinderen
     */
    protected $Kinderen = null;

    /**
     * @var int $Bedrijf
     */
    protected $Bedrijf = null;

    /**
     * @var string $IBAN
     */
    protected $IBAN = null;

    /**
     * @var string $BIC
     */
    protected $BIC = null;

    /**
     * @var boolean $InzakeRekening
     */
    protected $InzakeRekening = null;

    /**
     * @var string $RekeningInzake
     */
    protected $RekeningInzake = null;

    /**
     * @var string $RekeningInzakeIBAN
     */
    protected $RekeningInzakeIBAN = null;

    /**
     * @var string $RekeningInzakeBIC
     */
    protected $RekeningInzakeBIC = null;

    /**
     * @var TMedewerker $Klantmanager
     */
    protected $Klantmanager = null;

    /**
     * @var string $Pincode
     */
    protected $Pincode = null;

    /**
     * @param int $RelatieCode
     * @param string $Voornamen
     * @param string $Voorletters
     * @param string $Zoeknaam
     * @param string $Achternaam
     * @param string $Voorvoegsels
     * @param string $Geslacht
     * @param TAdres $BezoekAdres
     * @param TAdres $PostAdres
     * @param \DateTime $Geboortedatum
     * @param string $Geboorteplaats
     * @param int $BSN
     * @param string $Rekening
     * @param string $Telefoon1
     * @param string $Telefoon2
     * @param string $Email
     * @param string $BurgerlijkeStaat
     * @param int $PartnerCode
     * @param string $Autorisaties
     * @param string $Identificatiebewijs
     * @param string $IdentificatieNummer
     * @param \DateTime $IdentificatieGeldig
     * @param KindArray $Kinderen
     * @param int $Bedrijf
     * @param string $IBAN
     * @param string $BIC
     * @param boolean $InzakeRekening
     * @param string $RekeningInzake
     * @param string $RekeningInzakeIBAN
     * @param string $RekeningInzakeBIC
     * @param TMedewerker $Klantmanager
     * @param string $Pincode
     */
    public function __construct($RelatieCode, $Voornamen, $Voorletters, $Zoeknaam, $Achternaam, $Voorvoegsels, $Geslacht, $BezoekAdres, $PostAdres, \DateTime $Geboortedatum, $Geboorteplaats, $BSN, $Rekening, $Telefoon1, $Telefoon2, $Email, $BurgerlijkeStaat, $PartnerCode, $Autorisaties, $Identificatiebewijs, $IdentificatieNummer, \DateTime $IdentificatieGeldig, $Kinderen, $Bedrijf, $IBAN, $BIC, $InzakeRekening, $RekeningInzake, $RekeningInzakeIBAN, $RekeningInzakeBIC, $Klantmanager, $Pincode)
    {
      $this->RelatieCode = $RelatieCode;
      $this->Voornamen = $Voornamen;
      $this->Voorletters = $Voorletters;
      $this->Zoeknaam = $Zoeknaam;
      $this->Achternaam = $Achternaam;
      $this->Voorvoegsels = $Voorvoegsels;
      $this->Geslacht = $Geslacht;
      $this->BezoekAdres = $BezoekAdres;
      $this->PostAdres = $PostAdres;
      $this->Geboortedatum = $Geboortedatum->format(\DateTime::ATOM);
      $this->Geboorteplaats = $Geboorteplaats;
      $this->BSN = $BSN;
      $this->Rekening = $Rekening;
      $this->Telefoon1 = $Telefoon1;
      $this->Telefoon2 = $Telefoon2;
      $this->Email = $Email;
      $this->BurgerlijkeStaat = $BurgerlijkeStaat;
      $this->PartnerCode = $PartnerCode;
      $this->Autorisaties = $Autorisaties;
      $this->Identificatiebewijs = $Identificatiebewijs;
      $this->IdentificatieNummer = $IdentificatieNummer;
      $this->IdentificatieGeldig = $IdentificatieGeldig->format(\DateTime::ATOM);
      $this->Kinderen = $Kinderen;
      $this->Bedrijf = $Bedrijf;
      $this->IBAN = $IBAN;
      $this->BIC = $BIC;
      $this->InzakeRekening = $InzakeRekening;
      $this->RekeningInzake = $RekeningInzake;
      $this->RekeningInzakeIBAN = $RekeningInzakeIBAN;
      $this->RekeningInzakeBIC = $RekeningInzakeBIC;
      $this->Klantmanager = $Klantmanager;
      $this->Pincode = $Pincode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setRelatieCode($RelatieCode)
    {
      $this->RelatieCode = $RelatieCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoornamen()
    {
      return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setVoornamen($Voornamen)
    {
      $this->Voornamen = $Voornamen;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoorletters()
    {
      return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setVoorletters($Voorletters)
    {
      $this->Voorletters = $Voorletters;
      return $this;
    }

    /**
     * @return string
     */
    public function getZoeknaam()
    {
      return $this->Zoeknaam;
    }

    /**
     * @param string $Zoeknaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setZoeknaam($Zoeknaam)
    {
      $this->Zoeknaam = $Zoeknaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getAchternaam()
    {
      return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setAchternaam($Achternaam)
    {
      $this->Achternaam = $Achternaam;
      return $this;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels()
    {
      return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setVoorvoegsels($Voorvoegsels)
    {
      $this->Voorvoegsels = $Voorvoegsels;
      return $this;
    }

    /**
     * @return string
     */
    public function getGeslacht()
    {
      return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setGeslacht($Geslacht)
    {
      $this->Geslacht = $Geslacht;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getBezoekAdres()
    {
      return $this->BezoekAdres;
    }

    /**
     * @param TAdres $BezoekAdres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setBezoekAdres($BezoekAdres)
    {
      $this->BezoekAdres = $BezoekAdres;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getPostAdres()
    {
      return $this->PostAdres;
    }

    /**
     * @param TAdres $PostAdres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setPostAdres($PostAdres)
    {
      $this->PostAdres = $PostAdres;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getGeboortedatum()
    {
      if ($this->Geboortedatum == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->Geboortedatum);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $Geboortedatum
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setGeboortedatum(\DateTime $Geboortedatum)
    {
      $this->Geboortedatum = $Geboortedatum->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return string
     */
    public function getGeboorteplaats()
    {
      return $this->Geboorteplaats;
    }

    /**
     * @param string $Geboorteplaats
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setGeboorteplaats($Geboorteplaats)
    {
      $this->Geboorteplaats = $Geboorteplaats;
      return $this;
    }

    /**
     * @return int
     */
    public function getBSN()
    {
      return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setBSN($BSN)
    {
      $this->BSN = $BSN;
      return $this;
    }

    /**
     * @return string
     */
    public function getRekening()
    {
      return $this->Rekening;
    }

    /**
     * @param string $Rekening
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setRekening($Rekening)
    {
      $this->Rekening = $Rekening;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelefoon1()
    {
      return $this->Telefoon1;
    }

    /**
     * @param string $Telefoon1
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setTelefoon1($Telefoon1)
    {
      $this->Telefoon1 = $Telefoon1;
      return $this;
    }

    /**
     * @return string
     */
    public function getTelefoon2()
    {
      return $this->Telefoon2;
    }

    /**
     * @param string $Telefoon2
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setTelefoon2($Telefoon2)
    {
      $this->Telefoon2 = $Telefoon2;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getBurgerlijkeStaat()
    {
      return $this->BurgerlijkeStaat;
    }

    /**
     * @param string $BurgerlijkeStaat
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setBurgerlijkeStaat($BurgerlijkeStaat)
    {
      $this->BurgerlijkeStaat = $BurgerlijkeStaat;
      return $this;
    }

    /**
     * @return int
     */
    public function getPartnerCode()
    {
      return $this->PartnerCode;
    }

    /**
     * @param int $PartnerCode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setPartnerCode($PartnerCode)
    {
      $this->PartnerCode = $PartnerCode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setAutorisaties($Autorisaties)
    {
      $this->Autorisaties = $Autorisaties;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentificatiebewijs()
    {
      return $this->Identificatiebewijs;
    }

    /**
     * @param string $Identificatiebewijs
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setIdentificatiebewijs($Identificatiebewijs)
    {
      $this->Identificatiebewijs = $Identificatiebewijs;
      return $this;
    }

    /**
     * @return string
     */
    public function getIdentificatieNummer()
    {
      return $this->IdentificatieNummer;
    }

    /**
     * @param string $IdentificatieNummer
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setIdentificatieNummer($IdentificatieNummer)
    {
      $this->IdentificatieNummer = $IdentificatieNummer;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getIdentificatieGeldig()
    {
      if ($this->IdentificatieGeldig == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->IdentificatieGeldig);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $IdentificatieGeldig
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setIdentificatieGeldig(\DateTime $IdentificatieGeldig)
    {
      $this->IdentificatieGeldig = $IdentificatieGeldig->format(\DateTime::ATOM);
      return $this;
    }

    /**
     * @return KindArray
     */
    public function getKinderen()
    {
      return $this->Kinderen;
    }

    /**
     * @param KindArray $Kinderen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setKinderen($Kinderen)
    {
      $this->Kinderen = $Kinderen;
      return $this;
    }

    /**
     * @return int
     */
    public function getBedrijf()
    {
      return $this->Bedrijf;
    }

    /**
     * @param int $Bedrijf
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setBedrijf($Bedrijf)
    {
      $this->Bedrijf = $Bedrijf;
      return $this;
    }

    /**
     * @return string
     */
    public function getIBAN()
    {
      return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setIBAN($IBAN)
    {
      $this->IBAN = $IBAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getBIC()
    {
      return $this->BIC;
    }

    /**
     * @param string $BIC
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setBIC($BIC)
    {
      $this->BIC = $BIC;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInzakeRekening()
    {
      return $this->InzakeRekening;
    }

    /**
     * @param boolean $InzakeRekening
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setInzakeRekening($InzakeRekening)
    {
      $this->InzakeRekening = $InzakeRekening;
      return $this;
    }

    /**
     * @return string
     */
    public function getRekeningInzake()
    {
      return $this->RekeningInzake;
    }

    /**
     * @param string $RekeningInzake
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setRekeningInzake($RekeningInzake)
    {
      $this->RekeningInzake = $RekeningInzake;
      return $this;
    }

    /**
     * @return string
     */
    public function getRekeningInzakeIBAN()
    {
      return $this->RekeningInzakeIBAN;
    }

    /**
     * @param string $RekeningInzakeIBAN
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setRekeningInzakeIBAN($RekeningInzakeIBAN)
    {
      $this->RekeningInzakeIBAN = $RekeningInzakeIBAN;
      return $this;
    }

    /**
     * @return string
     */
    public function getRekeningInzakeBIC()
    {
      return $this->RekeningInzakeBIC;
    }

    /**
     * @param string $RekeningInzakeBIC
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setRekeningInzakeBIC($RekeningInzakeBIC)
    {
      $this->RekeningInzakeBIC = $RekeningInzakeBIC;
      return $this;
    }

    /**
     * @return TMedewerker
     */
    public function getKlantmanager()
    {
      return $this->Klantmanager;
    }

    /**
     * @param TMedewerker $Klantmanager
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setKlantmanager($Klantmanager)
    {
      $this->Klantmanager = $Klantmanager;
      return $this;
    }

    /**
     * @return string
     */
    public function getPincode()
    {
      return $this->Pincode;
    }

    /**
     * @param string $Pincode
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TRelatie
     */
    public function setPincode($Pincode)
    {
      $this->Pincode = $Pincode;
      return $this;
    }

}

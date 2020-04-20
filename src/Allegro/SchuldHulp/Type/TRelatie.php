<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TRelatie implements RequestInterface
{

    /**
     * @var int
     */
    private $RelatieCode;

    /**
     * @var string
     */
    private $Voornamen;

    /**
     * @var string
     */
    private $Voorletters;

    /**
     * @var string
     */
    private $Zoeknaam;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Voorvoegsels;

    /**
     * @var string
     */
    private $Geslacht;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $BezoekAdres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $PostAdres;

    /**
     * @var \DateTimeInterface
     */
    private $Geboortedatum;

    /**
     * @var string
     */
    private $Geboorteplaats;

    /**
     * @var int
     */
    private $BSN;

    /**
     * @var string
     */
    private $Rekening;

    /**
     * @var string
     */
    private $Telefoon1;

    /**
     * @var string
     */
    private $Telefoon2;

    /**
     * @var string
     */
    private $Email;

    /**
     * @var string
     */
    private $BurgerlijkeStaat;

    /**
     * @var int
     */
    private $PartnerCode;

    /**
     * @var string
     */
    private $Autorisaties;

    /**
     * @var string
     */
    private $Identificatiebewijs;

    /**
     * @var string
     */
    private $IdentificatieNummer;

    /**
     * @var \DateTimeInterface
     */
    private $IdentificatieGeldig;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\KindArray
     */
    private $Kinderen;

    /**
     * @var int
     */
    private $Bedrijf;

    /**
     * @var string
     */
    private $IBAN;

    /**
     * @var string
     */
    private $BIC;

    /**
     * @var bool
     */
    private $InzakeRekening;

    /**
     * @var string
     */
    private $RekeningInzake;

    /**
     * @var string
     */
    private $RekeningInzakeIBAN;

    /**
     * @var string
     */
    private $RekeningInzakeBIC;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    private $Klantmanager;

    /**
     * @var string
     */
    private $Pincode;

    /**
     * Constructor
     *
     * @var int $RelatieCode
     * @var string $Voornamen
     * @var string $Voorletters
     * @var string $Zoeknaam
     * @var string $Achternaam
     * @var string $Voorvoegsels
     * @var string $Geslacht
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $BezoekAdres
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $PostAdres
     * @var \DateTimeInterface $Geboortedatum
     * @var string $Geboorteplaats
     * @var int $BSN
     * @var string $Rekening
     * @var string $Telefoon1
     * @var string $Telefoon2
     * @var string $Email
     * @var string $BurgerlijkeStaat
     * @var int $PartnerCode
     * @var string $Autorisaties
     * @var string $Identificatiebewijs
     * @var string $IdentificatieNummer
     * @var \DateTimeInterface $IdentificatieGeldig
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\KindArray $Kinderen
     * @var int $Bedrijf
     * @var string $IBAN
     * @var string $BIC
     * @var bool $InzakeRekening
     * @var string $RekeningInzake
     * @var string $RekeningInzakeIBAN
     * @var string $RekeningInzakeBIC
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Klantmanager
     * @var string $Pincode
     */
    public function __construct($RelatieCode, $Voornamen, $Voorletters, $Zoeknaam, $Achternaam, $Voorvoegsels, $Geslacht, $BezoekAdres, $PostAdres, $Geboortedatum, $Geboorteplaats, $BSN, $Rekening, $Telefoon1, $Telefoon2, $Email, $BurgerlijkeStaat, $PartnerCode, $Autorisaties, $Identificatiebewijs, $IdentificatieNummer, $IdentificatieGeldig, $Kinderen, $Bedrijf, $IBAN, $BIC, $InzakeRekening, $RekeningInzake, $RekeningInzakeIBAN, $RekeningInzakeBIC, $Klantmanager, $Pincode)
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
        $this->Geboortedatum = $Geboortedatum;
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
        $this->IdentificatieGeldig = $IdentificatieGeldig;
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
     * @return TRelatie
     */
    public function withRelatieCode($RelatieCode)
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
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
     * @return TRelatie
     */
    public function withVoornamen($Voornamen)
    {
        $new = clone $this;
        $new->Voornamen = $Voornamen;

        return $new;
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
     * @return TRelatie
     */
    public function withVoorletters($Voorletters)
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
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
     * @return TRelatie
     */
    public function withZoeknaam($Zoeknaam)
    {
        $new = clone $this;
        $new->Zoeknaam = $Zoeknaam;

        return $new;
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
     * @return TRelatie
     */
    public function withAchternaam($Achternaam)
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
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
     * @return TRelatie
     */
    public function withVoorvoegsels($Voorvoegsels)
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
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
     * @return TRelatie
     */
    public function withGeslacht($Geslacht)
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getBezoekAdres()
    {
        return $this->BezoekAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $BezoekAdres
     * @return TRelatie
     */
    public function withBezoekAdres($BezoekAdres)
    {
        $new = clone $this;
        $new->BezoekAdres = $BezoekAdres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getPostAdres()
    {
        return $this->PostAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $PostAdres
     * @return TRelatie
     */
    public function withPostAdres($PostAdres)
    {
        $new = clone $this;
        $new->PostAdres = $PostAdres;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeboortedatum()
    {
        return $this->Geboortedatum;
    }

    /**
     * @param \DateTimeInterface $Geboortedatum
     * @return TRelatie
     */
    public function withGeboortedatum($Geboortedatum)
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
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
     * @return TRelatie
     */
    public function withGeboorteplaats($Geboorteplaats)
    {
        $new = clone $this;
        $new->Geboorteplaats = $Geboorteplaats;

        return $new;
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
     * @return TRelatie
     */
    public function withBSN($BSN)
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
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
     * @return TRelatie
     */
    public function withRekening($Rekening)
    {
        $new = clone $this;
        $new->Rekening = $Rekening;

        return $new;
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
     * @return TRelatie
     */
    public function withTelefoon1($Telefoon1)
    {
        $new = clone $this;
        $new->Telefoon1 = $Telefoon1;

        return $new;
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
     * @return TRelatie
     */
    public function withTelefoon2($Telefoon2)
    {
        $new = clone $this;
        $new->Telefoon2 = $Telefoon2;

        return $new;
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
     * @return TRelatie
     */
    public function withEmail($Email)
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
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
     * @return TRelatie
     */
    public function withBurgerlijkeStaat($BurgerlijkeStaat)
    {
        $new = clone $this;
        $new->BurgerlijkeStaat = $BurgerlijkeStaat;

        return $new;
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
     * @return TRelatie
     */
    public function withPartnerCode($PartnerCode)
    {
        $new = clone $this;
        $new->PartnerCode = $PartnerCode;

        return $new;
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
     * @return TRelatie
     */
    public function withAutorisaties($Autorisaties)
    {
        $new = clone $this;
        $new->Autorisaties = $Autorisaties;

        return $new;
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
     * @return TRelatie
     */
    public function withIdentificatiebewijs($Identificatiebewijs)
    {
        $new = clone $this;
        $new->Identificatiebewijs = $Identificatiebewijs;

        return $new;
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
     * @return TRelatie
     */
    public function withIdentificatieNummer($IdentificatieNummer)
    {
        $new = clone $this;
        $new->IdentificatieNummer = $IdentificatieNummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getIdentificatieGeldig()
    {
        return $this->IdentificatieGeldig;
    }

    /**
     * @param \DateTimeInterface $IdentificatieGeldig
     * @return TRelatie
     */
    public function withIdentificatieGeldig($IdentificatieGeldig)
    {
        $new = clone $this;
        $new->IdentificatieGeldig = $IdentificatieGeldig;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\KindArray
     */
    public function getKinderen()
    {
        return $this->Kinderen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\KindArray $Kinderen
     * @return TRelatie
     */
    public function withKinderen($Kinderen)
    {
        $new = clone $this;
        $new->Kinderen = $Kinderen;

        return $new;
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
     * @return TRelatie
     */
    public function withBedrijf($Bedrijf)
    {
        $new = clone $this;
        $new->Bedrijf = $Bedrijf;

        return $new;
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
     * @return TRelatie
     */
    public function withIBAN($IBAN)
    {
        $new = clone $this;
        $new->IBAN = $IBAN;

        return $new;
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
     * @return TRelatie
     */
    public function withBIC($BIC)
    {
        $new = clone $this;
        $new->BIC = $BIC;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInzakeRekening()
    {
        return $this->InzakeRekening;
    }

    /**
     * @param bool $InzakeRekening
     * @return TRelatie
     */
    public function withInzakeRekening($InzakeRekening)
    {
        $new = clone $this;
        $new->InzakeRekening = $InzakeRekening;

        return $new;
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
     * @return TRelatie
     */
    public function withRekeningInzake($RekeningInzake)
    {
        $new = clone $this;
        $new->RekeningInzake = $RekeningInzake;

        return $new;
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
     * @return TRelatie
     */
    public function withRekeningInzakeIBAN($RekeningInzakeIBAN)
    {
        $new = clone $this;
        $new->RekeningInzakeIBAN = $RekeningInzakeIBAN;

        return $new;
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
     * @return TRelatie
     */
    public function withRekeningInzakeBIC($RekeningInzakeBIC)
    {
        $new = clone $this;
        $new->RekeningInzakeBIC = $RekeningInzakeBIC;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker
     */
    public function getKlantmanager()
    {
        return $this->Klantmanager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TMedewerker $Klantmanager
     * @return TRelatie
     */
    public function withKlantmanager($Klantmanager)
    {
        $new = clone $this;
        $new->Klantmanager = $Klantmanager;

        return $new;
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
     * @return TRelatie
     */
    public function withPincode($Pincode)
    {
        $new = clone $this;
        $new->Pincode = $Pincode;

        return $new;
    }


}


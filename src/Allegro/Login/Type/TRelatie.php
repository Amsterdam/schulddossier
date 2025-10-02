<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TRelatie
{
    /**
     * @var int
     */
    private int $RelatieCode;

    /**
     * @var string
     */
    private string $Voornamen;

    /**
     * @var string
     */
    private string $Voorletters;

    /**
     * @var string
     */
    private string $Zoeknaam;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Voorvoegsels;

    /**
     * @var string
     */
    private string $Geslacht;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $BezoekAdres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $PostAdres;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $Geboortedatum;

    /**
     * @var string
     */
    private string $Geboorteplaats;

    /**
     * @var int
     */
    private int $BSN;

    /**
     * @var string
     */
    private string $Rekening;

    /**
     * @var string
     */
    private string $Telefoon1;

    /**
     * @var string
     */
    private string $Telefoon2;

    /**
     * @var string
     */
    private string $Email;

    /**
     * @var string
     */
    private string $BurgerlijkeStaat;

    /**
     * @var int
     */
    private int $PartnerCode;

    /**
     * @var string
     */
    private string $Autorisaties;

    /**
     * @var string
     */
    private string $Identificatiebewijs;

    /**
     * @var string
     */
    private string $IdentificatieNummer;

    /**
     * @var \DateTimeInterface
     */
    private \DateTimeInterface $IdentificatieGeldig;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\KindArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\KindArray $Kinderen;

    /**
     * @var int
     */
    private int $Bedrijf;

    /**
     * @var string
     */
    private string $IBAN;

    /**
     * @var string
     */
    private string $BIC;

    /**
     * @var bool
     */
    private bool $InzakeRekening;

    /**
     * @var string
     */
    private string $RekeningInzake;

    /**
     * @var string
     */
    private string $RekeningInzakeIBAN;

    /**
     * @var string
     */
    private string $RekeningInzakeBIC;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Klantmanager;

    /**
     * @var string
     */
    private string $Pincode;

    /**
     * @return int
     */
    public function getRelatieCode() : int
    {
        return $this->RelatieCode;
    }

    /**
     * @param int $RelatieCode
     * @return static
     */
    public function withRelatieCode(int $RelatieCode) : static
    {
        $new = clone $this;
        $new->RelatieCode = $RelatieCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornamen() : string
    {
        return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return static
     */
    public function withVoornamen(string $Voornamen) : static
    {
        $new = clone $this;
        $new->Voornamen = $Voornamen;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters() : string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters) : static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getZoeknaam() : string
    {
        return $this->Zoeknaam;
    }

    /**
     * @param string $Zoeknaam
     * @return static
     */
    public function withZoeknaam(string $Zoeknaam) : static
    {
        $new = clone $this;
        $new->Zoeknaam = $Zoeknaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getAchternaam() : string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam) : static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels() : string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels) : static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeslacht() : string
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return static
     */
    public function withGeslacht(string $Geslacht) : static
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getBezoekAdres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->BezoekAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $BezoekAdres
     * @return static
     */
    public function withBezoekAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $BezoekAdres) : static
    {
        $new = clone $this;
        $new->BezoekAdres = $BezoekAdres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getPostAdres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->PostAdres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $PostAdres
     * @return static
     */
    public function withPostAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $PostAdres) : static
    {
        $new = clone $this;
        $new->PostAdres = $PostAdres;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getGeboortedatum() : \DateTimeInterface
    {
        return $this->Geboortedatum;
    }

    /**
     * @param \DateTimeInterface $Geboortedatum
     * @return static
     */
    public function withGeboortedatum(\DateTimeInterface $Geboortedatum) : static
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeboorteplaats() : string
    {
        return $this->Geboorteplaats;
    }

    /**
     * @param string $Geboorteplaats
     * @return static
     */
    public function withGeboorteplaats(string $Geboorteplaats) : static
    {
        $new = clone $this;
        $new->Geboorteplaats = $Geboorteplaats;

        return $new;
    }

    /**
     * @return int
     */
    public function getBSN() : int
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return static
     */
    public function withBSN(int $BSN) : static
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekening() : string
    {
        return $this->Rekening;
    }

    /**
     * @param string $Rekening
     * @return static
     */
    public function withRekening(string $Rekening) : static
    {
        $new = clone $this;
        $new->Rekening = $Rekening;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoon1() : string
    {
        return $this->Telefoon1;
    }

    /**
     * @param string $Telefoon1
     * @return static
     */
    public function withTelefoon1(string $Telefoon1) : static
    {
        $new = clone $this;
        $new->Telefoon1 = $Telefoon1;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelefoon2() : string
    {
        return $this->Telefoon2;
    }

    /**
     * @param string $Telefoon2
     * @return static
     */
    public function withTelefoon2(string $Telefoon2) : static
    {
        $new = clone $this;
        $new->Telefoon2 = $Telefoon2;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail() : string
    {
        return $this->Email;
    }

    /**
     * @param string $Email
     * @return static
     */
    public function withEmail(string $Email) : static
    {
        $new = clone $this;
        $new->Email = $Email;

        return $new;
    }

    /**
     * @return string
     */
    public function getBurgerlijkeStaat() : string
    {
        return $this->BurgerlijkeStaat;
    }

    /**
     * @param string $BurgerlijkeStaat
     * @return static
     */
    public function withBurgerlijkeStaat(string $BurgerlijkeStaat) : static
    {
        $new = clone $this;
        $new->BurgerlijkeStaat = $BurgerlijkeStaat;

        return $new;
    }

    /**
     * @return int
     */
    public function getPartnerCode() : int
    {
        return $this->PartnerCode;
    }

    /**
     * @param int $PartnerCode
     * @return static
     */
    public function withPartnerCode(int $PartnerCode) : static
    {
        $new = clone $this;
        $new->PartnerCode = $PartnerCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getAutorisaties() : string
    {
        return $this->Autorisaties;
    }

    /**
     * @param string $Autorisaties
     * @return static
     */
    public function withAutorisaties(string $Autorisaties) : static
    {
        $new = clone $this;
        $new->Autorisaties = $Autorisaties;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdentificatiebewijs() : string
    {
        return $this->Identificatiebewijs;
    }

    /**
     * @param string $Identificatiebewijs
     * @return static
     */
    public function withIdentificatiebewijs(string $Identificatiebewijs) : static
    {
        $new = clone $this;
        $new->Identificatiebewijs = $Identificatiebewijs;

        return $new;
    }

    /**
     * @return string
     */
    public function getIdentificatieNummer() : string
    {
        return $this->IdentificatieNummer;
    }

    /**
     * @param string $IdentificatieNummer
     * @return static
     */
    public function withIdentificatieNummer(string $IdentificatieNummer) : static
    {
        $new = clone $this;
        $new->IdentificatieNummer = $IdentificatieNummer;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getIdentificatieGeldig() : \DateTimeInterface
    {
        return $this->IdentificatieGeldig;
    }

    /**
     * @param \DateTimeInterface $IdentificatieGeldig
     * @return static
     */
    public function withIdentificatieGeldig(\DateTimeInterface $IdentificatieGeldig) : static
    {
        $new = clone $this;
        $new->IdentificatieGeldig = $IdentificatieGeldig;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\KindArray
     */
    public function getKinderen() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\KindArray
    {
        return $this->Kinderen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\KindArray $Kinderen
     * @return static
     */
    public function withKinderen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\KindArray $Kinderen) : static
    {
        $new = clone $this;
        $new->Kinderen = $Kinderen;

        return $new;
    }

    /**
     * @return int
     */
    public function getBedrijf() : int
    {
        return $this->Bedrijf;
    }

    /**
     * @param int $Bedrijf
     * @return static
     */
    public function withBedrijf(int $Bedrijf) : static
    {
        $new = clone $this;
        $new->Bedrijf = $Bedrijf;

        return $new;
    }

    /**
     * @return string
     */
    public function getIBAN() : string
    {
        return $this->IBAN;
    }

    /**
     * @param string $IBAN
     * @return static
     */
    public function withIBAN(string $IBAN) : static
    {
        $new = clone $this;
        $new->IBAN = $IBAN;

        return $new;
    }

    /**
     * @return string
     */
    public function getBIC() : string
    {
        return $this->BIC;
    }

    /**
     * @param string $BIC
     * @return static
     */
    public function withBIC(string $BIC) : static
    {
        $new = clone $this;
        $new->BIC = $BIC;

        return $new;
    }

    /**
     * @return bool
     */
    public function getInzakeRekening() : bool
    {
        return $this->InzakeRekening;
    }

    /**
     * @param bool $InzakeRekening
     * @return static
     */
    public function withInzakeRekening(bool $InzakeRekening) : static
    {
        $new = clone $this;
        $new->InzakeRekening = $InzakeRekening;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningInzake() : string
    {
        return $this->RekeningInzake;
    }

    /**
     * @param string $RekeningInzake
     * @return static
     */
    public function withRekeningInzake(string $RekeningInzake) : static
    {
        $new = clone $this;
        $new->RekeningInzake = $RekeningInzake;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningInzakeIBAN() : string
    {
        return $this->RekeningInzakeIBAN;
    }

    /**
     * @param string $RekeningInzakeIBAN
     * @return static
     */
    public function withRekeningInzakeIBAN(string $RekeningInzakeIBAN) : static
    {
        $new = clone $this;
        $new->RekeningInzakeIBAN = $RekeningInzakeIBAN;

        return $new;
    }

    /**
     * @return string
     */
    public function getRekeningInzakeBIC() : string
    {
        return $this->RekeningInzakeBIC;
    }

    /**
     * @param string $RekeningInzakeBIC
     * @return static
     */
    public function withRekeningInzakeBIC(string $RekeningInzakeBIC) : static
    {
        $new = clone $this;
        $new->RekeningInzakeBIC = $RekeningInzakeBIC;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
     */
    public function getKlantmanager() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker
    {
        return $this->Klantmanager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Klantmanager
     * @return static
     */
    public function withKlantmanager(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TMedewerker $Klantmanager) : static
    {
        $new = clone $this;
        $new->Klantmanager = $Klantmanager;

        return $new;
    }

    /**
     * @return string
     */
    public function getPincode() : string
    {
        return $this->Pincode;
    }

    /**
     * @param string $Pincode
     * @return static
     */
    public function withPincode(string $Pincode) : static
    {
        $new = clone $this;
        $new->Pincode = $Pincode;

        return $new;
    }
}


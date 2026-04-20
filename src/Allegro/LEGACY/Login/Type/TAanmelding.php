<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAanmelding implements RequestInterface
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    private $Aanvrager;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    private $Partner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
     */
    private $GezinsSituatie;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private $Adres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
     */
    private $Contact;

    /**
     * @var string
     */
    private $Waarom;

    /**
     * @var string
     */
    private $Crisis;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag1;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag2;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag3;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag4;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag5;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag6;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag7;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag8;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag9;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private $JaNeeVraag10;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag1;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag2;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag3;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag4;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag5;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag6;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag7;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag8;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag9;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private $OpenVraag10;

    /**
     * Constructor
     *
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Aanvrager
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Partner
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact
     * @var string $Waarom
     * @var string $Crisis
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag1
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag2
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag3
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag4
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag5
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag6
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag7
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag8
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag9
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag10
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag1
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag2
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag3
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag4
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag5
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag6
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag7
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag8
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag9
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag10
     */
    public function __construct($Aanvrager, $Partner, $GezinsSituatie, $Adres, $Contact, $Waarom, $Crisis, $JaNeeVraag1, $JaNeeVraag2, $JaNeeVraag3, $JaNeeVraag4, $JaNeeVraag5, $JaNeeVraag6, $JaNeeVraag7, $JaNeeVraag8, $JaNeeVraag9, $JaNeeVraag10, $OpenVraag1, $OpenVraag2, $OpenVraag3, $OpenVraag4, $OpenVraag5, $OpenVraag6, $OpenVraag7, $OpenVraag8, $OpenVraag9, $OpenVraag10)
    {
        $this->Aanvrager = $Aanvrager;
        $this->Partner = $Partner;
        $this->GezinsSituatie = $GezinsSituatie;
        $this->Adres = $Adres;
        $this->Contact = $Contact;
        $this->Waarom = $Waarom;
        $this->Crisis = $Crisis;
        $this->JaNeeVraag1 = $JaNeeVraag1;
        $this->JaNeeVraag2 = $JaNeeVraag2;
        $this->JaNeeVraag3 = $JaNeeVraag3;
        $this->JaNeeVraag4 = $JaNeeVraag4;
        $this->JaNeeVraag5 = $JaNeeVraag5;
        $this->JaNeeVraag6 = $JaNeeVraag6;
        $this->JaNeeVraag7 = $JaNeeVraag7;
        $this->JaNeeVraag8 = $JaNeeVraag8;
        $this->JaNeeVraag9 = $JaNeeVraag9;
        $this->JaNeeVraag10 = $JaNeeVraag10;
        $this->OpenVraag1 = $OpenVraag1;
        $this->OpenVraag2 = $OpenVraag2;
        $this->OpenVraag3 = $OpenVraag3;
        $this->OpenVraag4 = $OpenVraag4;
        $this->OpenVraag5 = $OpenVraag5;
        $this->OpenVraag6 = $OpenVraag6;
        $this->OpenVraag7 = $OpenVraag7;
        $this->OpenVraag8 = $OpenVraag8;
        $this->OpenVraag9 = $OpenVraag9;
        $this->OpenVraag10 = $OpenVraag10;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    public function getAanvrager()
    {
        return $this->Aanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Aanvrager
     * @return TAanmelding
     */
    public function withAanvrager($Aanvrager)
    {
        $new = clone $this;
        $new->Aanvrager = $Aanvrager;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    public function getPartner()
    {
        return $this->Partner;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Partner
     * @return TAanmelding
     */
    public function withPartner($Partner)
    {
        $new = clone $this;
        $new->Partner = $Partner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
     */
    public function getGezinsSituatie()
    {
        return $this->GezinsSituatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie
     * @return TAanmelding
     */
    public function withGezinsSituatie($GezinsSituatie)
    {
        $new = clone $this;
        $new->GezinsSituatie = $GezinsSituatie;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getAdres()
    {
        return $this->Adres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres
     * @return TAanmelding
     */
    public function withAdres($Adres)
    {
        $new = clone $this;
        $new->Adres = $Adres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact
     * @return TAanmelding
     */
    public function withContact($Contact)
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return string
     */
    public function getWaarom()
    {
        return $this->Waarom;
    }

    /**
     * @param string $Waarom
     * @return TAanmelding
     */
    public function withWaarom($Waarom)
    {
        $new = clone $this;
        $new->Waarom = $Waarom;

        return $new;
    }

    /**
     * @return string
     */
    public function getCrisis()
    {
        return $this->Crisis;
    }

    /**
     * @param string $Crisis
     * @return TAanmelding
     */
    public function withCrisis($Crisis)
    {
        $new = clone $this;
        $new->Crisis = $Crisis;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag1()
    {
        return $this->JaNeeVraag1;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag1
     * @return TAanmelding
     */
    public function withJaNeeVraag1($JaNeeVraag1)
    {
        $new = clone $this;
        $new->JaNeeVraag1 = $JaNeeVraag1;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag2()
    {
        return $this->JaNeeVraag2;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag2
     * @return TAanmelding
     */
    public function withJaNeeVraag2($JaNeeVraag2)
    {
        $new = clone $this;
        $new->JaNeeVraag2 = $JaNeeVraag2;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag3()
    {
        return $this->JaNeeVraag3;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag3
     * @return TAanmelding
     */
    public function withJaNeeVraag3($JaNeeVraag3)
    {
        $new = clone $this;
        $new->JaNeeVraag3 = $JaNeeVraag3;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag4()
    {
        return $this->JaNeeVraag4;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag4
     * @return TAanmelding
     */
    public function withJaNeeVraag4($JaNeeVraag4)
    {
        $new = clone $this;
        $new->JaNeeVraag4 = $JaNeeVraag4;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag5()
    {
        return $this->JaNeeVraag5;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag5
     * @return TAanmelding
     */
    public function withJaNeeVraag5($JaNeeVraag5)
    {
        $new = clone $this;
        $new->JaNeeVraag5 = $JaNeeVraag5;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag6()
    {
        return $this->JaNeeVraag6;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag6
     * @return TAanmelding
     */
    public function withJaNeeVraag6($JaNeeVraag6)
    {
        $new = clone $this;
        $new->JaNeeVraag6 = $JaNeeVraag6;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag7()
    {
        return $this->JaNeeVraag7;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag7
     * @return TAanmelding
     */
    public function withJaNeeVraag7($JaNeeVraag7)
    {
        $new = clone $this;
        $new->JaNeeVraag7 = $JaNeeVraag7;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag8()
    {
        return $this->JaNeeVraag8;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag8
     * @return TAanmelding
     */
    public function withJaNeeVraag8($JaNeeVraag8)
    {
        $new = clone $this;
        $new->JaNeeVraag8 = $JaNeeVraag8;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag9()
    {
        return $this->JaNeeVraag9;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag9
     * @return TAanmelding
     */
    public function withJaNeeVraag9($JaNeeVraag9)
    {
        $new = clone $this;
        $new->JaNeeVraag9 = $JaNeeVraag9;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag10()
    {
        return $this->JaNeeVraag10;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag10
     * @return TAanmelding
     */
    public function withJaNeeVraag10($JaNeeVraag10)
    {
        $new = clone $this;
        $new->JaNeeVraag10 = $JaNeeVraag10;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag1()
    {
        return $this->OpenVraag1;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag1
     * @return TAanmelding
     */
    public function withOpenVraag1($OpenVraag1)
    {
        $new = clone $this;
        $new->OpenVraag1 = $OpenVraag1;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag2()
    {
        return $this->OpenVraag2;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag2
     * @return TAanmelding
     */
    public function withOpenVraag2($OpenVraag2)
    {
        $new = clone $this;
        $new->OpenVraag2 = $OpenVraag2;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag3()
    {
        return $this->OpenVraag3;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag3
     * @return TAanmelding
     */
    public function withOpenVraag3($OpenVraag3)
    {
        $new = clone $this;
        $new->OpenVraag3 = $OpenVraag3;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag4()
    {
        return $this->OpenVraag4;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag4
     * @return TAanmelding
     */
    public function withOpenVraag4($OpenVraag4)
    {
        $new = clone $this;
        $new->OpenVraag4 = $OpenVraag4;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag5()
    {
        return $this->OpenVraag5;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag5
     * @return TAanmelding
     */
    public function withOpenVraag5($OpenVraag5)
    {
        $new = clone $this;
        $new->OpenVraag5 = $OpenVraag5;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag6()
    {
        return $this->OpenVraag6;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag6
     * @return TAanmelding
     */
    public function withOpenVraag6($OpenVraag6)
    {
        $new = clone $this;
        $new->OpenVraag6 = $OpenVraag6;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag7()
    {
        return $this->OpenVraag7;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag7
     * @return TAanmelding
     */
    public function withOpenVraag7($OpenVraag7)
    {
        $new = clone $this;
        $new->OpenVraag7 = $OpenVraag7;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag8()
    {
        return $this->OpenVraag8;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag8
     * @return TAanmelding
     */
    public function withOpenVraag8($OpenVraag8)
    {
        $new = clone $this;
        $new->OpenVraag8 = $OpenVraag8;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag9()
    {
        return $this->OpenVraag9;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag9
     * @return TAanmelding
     */
    public function withOpenVraag9($OpenVraag9)
    {
        $new = clone $this;
        $new->OpenVraag9 = $OpenVraag9;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag10()
    {
        return $this->OpenVraag10;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag10
     * @return TAanmelding
     */
    public function withOpenVraag10($OpenVraag10)
    {
        $new = clone $this;
        $new->OpenVraag10 = $OpenVraag10;

        return $new;
    }
}

<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanmelding
{

    /**
     * @var TPersoon $Aanvrager
     */
    protected $Aanvrager = null;

    /**
     * @var TPersoon $Partner
     */
    protected $Partner = null;

    /**
     * @var TGezinsSituatie $GezinsSituatie
     */
    protected $GezinsSituatie = null;

    /**
     * @var TAdres $Adres
     */
    protected $Adres = null;

    /**
     * @var TContact $Contact
     */
    protected $Contact = null;

    /**
     * @var string $Waarom
     */
    protected $Waarom = null;

    /**
     * @var string $Crisis
     */
    protected $Crisis = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag1
     */
    protected $JaNeeVraag1 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag2
     */
    protected $JaNeeVraag2 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag3
     */
    protected $JaNeeVraag3 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag4
     */
    protected $JaNeeVraag4 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag5
     */
    protected $JaNeeVraag5 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag6
     */
    protected $JaNeeVraag6 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag7
     */
    protected $JaNeeVraag7 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag8
     */
    protected $JaNeeVraag8 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag9
     */
    protected $JaNeeVraag9 = null;

    /**
     * @var TJaNeeVraag $JaNeeVraag10
     */
    protected $JaNeeVraag10 = null;

    /**
     * @var TOpenVraag $OpenVraag1
     */
    protected $OpenVraag1 = null;

    /**
     * @var TOpenVraag $OpenVraag2
     */
    protected $OpenVraag2 = null;

    /**
     * @var TOpenVraag $OpenVraag3
     */
    protected $OpenVraag3 = null;

    /**
     * @var TOpenVraag $OpenVraag4
     */
    protected $OpenVraag4 = null;

    /**
     * @var TOpenVraag $OpenVraag5
     */
    protected $OpenVraag5 = null;

    /**
     * @var TOpenVraag $OpenVraag6
     */
    protected $OpenVraag6 = null;

    /**
     * @var TOpenVraag $OpenVraag7
     */
    protected $OpenVraag7 = null;

    /**
     * @var TOpenVraag $OpenVraag8
     */
    protected $OpenVraag8 = null;

    /**
     * @var TOpenVraag $OpenVraag9
     */
    protected $OpenVraag9 = null;

    /**
     * @var TOpenVraag $OpenVraag10
     */
    protected $OpenVraag10 = null;

    /**
     * @param TPersoon $Aanvrager
     * @param TPersoon $Partner
     * @param TGezinsSituatie $GezinsSituatie
     * @param TAdres $Adres
     * @param TContact $Contact
     * @param string $Waarom
     * @param string $Crisis
     * @param TJaNeeVraag $JaNeeVraag1
     * @param TJaNeeVraag $JaNeeVraag2
     * @param TJaNeeVraag $JaNeeVraag3
     * @param TJaNeeVraag $JaNeeVraag4
     * @param TJaNeeVraag $JaNeeVraag5
     * @param TJaNeeVraag $JaNeeVraag6
     * @param TJaNeeVraag $JaNeeVraag7
     * @param TJaNeeVraag $JaNeeVraag8
     * @param TJaNeeVraag $JaNeeVraag9
     * @param TJaNeeVraag $JaNeeVraag10
     * @param TOpenVraag $OpenVraag1
     * @param TOpenVraag $OpenVraag2
     * @param TOpenVraag $OpenVraag3
     * @param TOpenVraag $OpenVraag4
     * @param TOpenVraag $OpenVraag5
     * @param TOpenVraag $OpenVraag6
     * @param TOpenVraag $OpenVraag7
     * @param TOpenVraag $OpenVraag8
     * @param TOpenVraag $OpenVraag9
     * @param TOpenVraag $OpenVraag10
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
     * @return TPersoon
     */
    public function getAanvrager()
    {
      return $this->Aanvrager;
    }

    /**
     * @param TPersoon $Aanvrager
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setAanvrager($Aanvrager)
    {
      $this->Aanvrager = $Aanvrager;
      return $this;
    }

    /**
     * @return TPersoon
     */
    public function getPartner()
    {
      return $this->Partner;
    }

    /**
     * @param TPersoon $Partner
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setPartner($Partner)
    {
      $this->Partner = $Partner;
      return $this;
    }

    /**
     * @return TGezinsSituatie
     */
    public function getGezinsSituatie()
    {
      return $this->GezinsSituatie;
    }

    /**
     * @param TGezinsSituatie $GezinsSituatie
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setGezinsSituatie($GezinsSituatie)
    {
      $this->GezinsSituatie = $GezinsSituatie;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getAdres()
    {
      return $this->Adres;
    }

    /**
     * @param TAdres $Adres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setAdres($Adres)
    {
      $this->Adres = $Adres;
      return $this;
    }

    /**
     * @return TContact
     */
    public function getContact()
    {
      return $this->Contact;
    }

    /**
     * @param TContact $Contact
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setWaarom($Waarom)
    {
      $this->Waarom = $Waarom;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setCrisis($Crisis)
    {
      $this->Crisis = $Crisis;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag1()
    {
      return $this->JaNeeVraag1;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag1
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag1($JaNeeVraag1)
    {
      $this->JaNeeVraag1 = $JaNeeVraag1;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag2()
    {
      return $this->JaNeeVraag2;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag2
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag2($JaNeeVraag2)
    {
      $this->JaNeeVraag2 = $JaNeeVraag2;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag3()
    {
      return $this->JaNeeVraag3;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag3
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag3($JaNeeVraag3)
    {
      $this->JaNeeVraag3 = $JaNeeVraag3;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag4()
    {
      return $this->JaNeeVraag4;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag4
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag4($JaNeeVraag4)
    {
      $this->JaNeeVraag4 = $JaNeeVraag4;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag5()
    {
      return $this->JaNeeVraag5;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag5
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag5($JaNeeVraag5)
    {
      $this->JaNeeVraag5 = $JaNeeVraag5;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag6()
    {
      return $this->JaNeeVraag6;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag6
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag6($JaNeeVraag6)
    {
      $this->JaNeeVraag6 = $JaNeeVraag6;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag7()
    {
      return $this->JaNeeVraag7;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag7
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag7($JaNeeVraag7)
    {
      $this->JaNeeVraag7 = $JaNeeVraag7;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag8()
    {
      return $this->JaNeeVraag8;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag8
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag8($JaNeeVraag8)
    {
      $this->JaNeeVraag8 = $JaNeeVraag8;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag9()
    {
      return $this->JaNeeVraag9;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag9
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag9($JaNeeVraag9)
    {
      $this->JaNeeVraag9 = $JaNeeVraag9;
      return $this;
    }

    /**
     * @return TJaNeeVraag
     */
    public function getJaNeeVraag10()
    {
      return $this->JaNeeVraag10;
    }

    /**
     * @param TJaNeeVraag $JaNeeVraag10
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setJaNeeVraag10($JaNeeVraag10)
    {
      $this->JaNeeVraag10 = $JaNeeVraag10;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag1()
    {
      return $this->OpenVraag1;
    }

    /**
     * @param TOpenVraag $OpenVraag1
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag1($OpenVraag1)
    {
      $this->OpenVraag1 = $OpenVraag1;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag2()
    {
      return $this->OpenVraag2;
    }

    /**
     * @param TOpenVraag $OpenVraag2
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag2($OpenVraag2)
    {
      $this->OpenVraag2 = $OpenVraag2;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag3()
    {
      return $this->OpenVraag3;
    }

    /**
     * @param TOpenVraag $OpenVraag3
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag3($OpenVraag3)
    {
      $this->OpenVraag3 = $OpenVraag3;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag4()
    {
      return $this->OpenVraag4;
    }

    /**
     * @param TOpenVraag $OpenVraag4
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag4($OpenVraag4)
    {
      $this->OpenVraag4 = $OpenVraag4;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag5()
    {
      return $this->OpenVraag5;
    }

    /**
     * @param TOpenVraag $OpenVraag5
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag5($OpenVraag5)
    {
      $this->OpenVraag5 = $OpenVraag5;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag6()
    {
      return $this->OpenVraag6;
    }

    /**
     * @param TOpenVraag $OpenVraag6
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag6($OpenVraag6)
    {
      $this->OpenVraag6 = $OpenVraag6;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag7()
    {
      return $this->OpenVraag7;
    }

    /**
     * @param TOpenVraag $OpenVraag7
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag7($OpenVraag7)
    {
      $this->OpenVraag7 = $OpenVraag7;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag8()
    {
      return $this->OpenVraag8;
    }

    /**
     * @param TOpenVraag $OpenVraag8
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag8($OpenVraag8)
    {
      $this->OpenVraag8 = $OpenVraag8;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag9()
    {
      return $this->OpenVraag9;
    }

    /**
     * @param TOpenVraag $OpenVraag9
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag9($OpenVraag9)
    {
      $this->OpenVraag9 = $OpenVraag9;
      return $this;
    }

    /**
     * @return TOpenVraag
     */
    public function getOpenVraag10()
    {
      return $this->OpenVraag10;
    }

    /**
     * @param TOpenVraag $OpenVraag10
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanmelding
     */
    public function setOpenVraag10($OpenVraag10)
    {
      $this->OpenVraag10 = $OpenVraag10;
      return $this;
    }

}

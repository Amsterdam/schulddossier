<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TAanmelding
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Aanvrager;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Partner;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact;

    /**
     * @var string
     */
    private string $Waarom;

    /**
     * @var string
     */
    private string $Crisis;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag1;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag2;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag3;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag4;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag5;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag6;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag7;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag8;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag9;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag10;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag1;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag2;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag3;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag4;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag5;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag6;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag7;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag8;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag9;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag10;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    public function getAanvrager() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
    {
        return $this->Aanvrager;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Aanvrager
     * @return static
     */
    public function withAanvrager(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Aanvrager) : static
    {
        $new = clone $this;
        $new->Aanvrager = $Aanvrager;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
     */
    public function getPartner() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon
    {
        return $this->Partner;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Partner
     * @return static
     */
    public function withPartner(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TPersoon $Partner) : static
    {
        $new = clone $this;
        $new->Partner = $Partner;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
     */
    public function getGezinsSituatie() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie
    {
        return $this->GezinsSituatie;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie
     * @return static
     */
    public function withGezinsSituatie(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TGezinsSituatie $GezinsSituatie) : static
    {
        $new = clone $this;
        $new->GezinsSituatie = $GezinsSituatie;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
     */
    public function getAdres() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres
    {
        return $this->Adres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres
     * @return static
     */
    public function withAdres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TAdres $Adres) : static
    {
        $new = clone $this;
        $new->Adres = $Adres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
     */
    public function getContact() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact
    {
        return $this->Contact;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact
     * @return static
     */
    public function withContact(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TContact $Contact) : static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return string
     */
    public function getWaarom() : string
    {
        return $this->Waarom;
    }

    /**
     * @param string $Waarom
     * @return static
     */
    public function withWaarom(string $Waarom) : static
    {
        $new = clone $this;
        $new->Waarom = $Waarom;

        return $new;
    }

    /**
     * @return string
     */
    public function getCrisis() : string
    {
        return $this->Crisis;
    }

    /**
     * @param string $Crisis
     * @return static
     */
    public function withCrisis(string $Crisis) : static
    {
        $new = clone $this;
        $new->Crisis = $Crisis;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag1() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag1;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag1
     * @return static
     */
    public function withJaNeeVraag1(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag1) : static
    {
        $new = clone $this;
        $new->JaNeeVraag1 = $JaNeeVraag1;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag2() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag2;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag2
     * @return static
     */
    public function withJaNeeVraag2(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag2) : static
    {
        $new = clone $this;
        $new->JaNeeVraag2 = $JaNeeVraag2;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag3() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag3;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag3
     * @return static
     */
    public function withJaNeeVraag3(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag3) : static
    {
        $new = clone $this;
        $new->JaNeeVraag3 = $JaNeeVraag3;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag4() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag4;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag4
     * @return static
     */
    public function withJaNeeVraag4(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag4) : static
    {
        $new = clone $this;
        $new->JaNeeVraag4 = $JaNeeVraag4;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag5() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag5;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag5
     * @return static
     */
    public function withJaNeeVraag5(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag5) : static
    {
        $new = clone $this;
        $new->JaNeeVraag5 = $JaNeeVraag5;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag6() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag6;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag6
     * @return static
     */
    public function withJaNeeVraag6(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag6) : static
    {
        $new = clone $this;
        $new->JaNeeVraag6 = $JaNeeVraag6;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag7() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag7;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag7
     * @return static
     */
    public function withJaNeeVraag7(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag7) : static
    {
        $new = clone $this;
        $new->JaNeeVraag7 = $JaNeeVraag7;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag8() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag8;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag8
     * @return static
     */
    public function withJaNeeVraag8(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag8) : static
    {
        $new = clone $this;
        $new->JaNeeVraag8 = $JaNeeVraag8;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag9() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag9;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag9
     * @return static
     */
    public function withJaNeeVraag9(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag9) : static
    {
        $new = clone $this;
        $new->JaNeeVraag9 = $JaNeeVraag9;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
     */
    public function getJaNeeVraag10() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag
    {
        return $this->JaNeeVraag10;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag10
     * @return static
     */
    public function withJaNeeVraag10(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TJaNeeVraag $JaNeeVraag10) : static
    {
        $new = clone $this;
        $new->JaNeeVraag10 = $JaNeeVraag10;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag1() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag1;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag1
     * @return static
     */
    public function withOpenVraag1(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag1) : static
    {
        $new = clone $this;
        $new->OpenVraag1 = $OpenVraag1;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag2() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag2;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag2
     * @return static
     */
    public function withOpenVraag2(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag2) : static
    {
        $new = clone $this;
        $new->OpenVraag2 = $OpenVraag2;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag3() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag3;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag3
     * @return static
     */
    public function withOpenVraag3(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag3) : static
    {
        $new = clone $this;
        $new->OpenVraag3 = $OpenVraag3;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag4() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag4;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag4
     * @return static
     */
    public function withOpenVraag4(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag4) : static
    {
        $new = clone $this;
        $new->OpenVraag4 = $OpenVraag4;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag5() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag5;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag5
     * @return static
     */
    public function withOpenVraag5(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag5) : static
    {
        $new = clone $this;
        $new->OpenVraag5 = $OpenVraag5;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag6() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag6;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag6
     * @return static
     */
    public function withOpenVraag6(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag6) : static
    {
        $new = clone $this;
        $new->OpenVraag6 = $OpenVraag6;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag7() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag7;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag7
     * @return static
     */
    public function withOpenVraag7(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag7) : static
    {
        $new = clone $this;
        $new->OpenVraag7 = $OpenVraag7;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag8() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag8;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag8
     * @return static
     */
    public function withOpenVraag8(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag8) : static
    {
        $new = clone $this;
        $new->OpenVraag8 = $OpenVraag8;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag9() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag9;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag9
     * @return static
     */
    public function withOpenVraag9(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag9) : static
    {
        $new = clone $this;
        $new->OpenVraag9 = $OpenVraag9;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
     */
    public function getOpenVraag10() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag
    {
        return $this->OpenVraag10;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag10
     * @return static
     */
    public function withOpenVraag10(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TOpenVraag $OpenVraag10) : static
    {
        $new = clone $this;
        $new->OpenVraag10 = $OpenVraag10;

        return $new;
    }
}


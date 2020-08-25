<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;


use Phpro\SoapClient\Type\RequestInterface;

class TAanvraag2Persoon implements RequestInterface
{

    /**
     * @var int
     */
    private $Relatiecode;

    /**
     * @var int
     */
    private $BSN;

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
    private $Voorvoegsels;

    /**
     * @var string
     */
    private $Achternaam;

    /**
     * @var string
     */
    private $Geslacht;

    /**
     * @var int
     */
    private $Geboortedatum;

    /**
     * @var string
     */
    private $Nationaliteit;

    /**
     * @var
     * \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array
     */
    private $Rekeningnummers;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $Bezoekadres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private $Postadres;

    /**
     * @var bool
     */
    private $CorrespondentieMail;

    /**
     * @var bool
     */
    private $CorrespondentieWeb;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact
     */
    private $Contact;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray
     */
    private $Inkomen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray
     */
    private $Uitgaven;

    /**
     * Constructor
     *
     * @var int $Relatiecode
     * @var int $BSN
     * @var string $Voornamen
     * @var string $Voorletters
     * @var string $Voorvoegsels
     * @var string $Achternaam
     * @var string $Geslacht
     * @var int $Geboortedatum
     * @var string $Nationaliteit
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array $Rekeningnummers
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres
     * @var bool $CorrespondentieMail
     * @var bool $CorrespondentieWeb
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray $Inkomen
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray $Uitgaven
     */
    public function __construct($Relatiecode, $BSN, $Voornamen, $Voorletters, $Voorvoegsels, $Achternaam, $Geslacht, $Geboortedatum, $Nationaliteit, $Rekeningnummers, $Bezoekadres, $Postadres, $CorrespondentieMail, $CorrespondentieWeb, $Contact, $Inkomen, $Uitgaven)
    {
        $this->Relatiecode = $Relatiecode;
        $this->BSN = $BSN;
        $this->Voornamen = $Voornamen;
        $this->Voorletters = $Voorletters;
        $this->Voorvoegsels = $Voorvoegsels;
        $this->Achternaam = $Achternaam;
        $this->Geslacht = $Geslacht;
        $this->Geboortedatum = $Geboortedatum;
        $this->Nationaliteit = $Nationaliteit;
        $this->Rekeningnummers = $Rekeningnummers;
        $this->Bezoekadres = $Bezoekadres;
        $this->Postadres = $Postadres;
        $this->CorrespondentieMail = $CorrespondentieMail;
        $this->CorrespondentieWeb = $CorrespondentieWeb;
        $this->Contact = $Contact;
        $this->Inkomen = $Inkomen;
        $this->Uitgaven = $Uitgaven;
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
     * @return TAanvraag2Persoon
     */
    public function withRelatiecode($Relatiecode)
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

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
     * @return TAanvraag2Persoon
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
    public function getVoornamen()
    {
        return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return TAanvraag2Persoon
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
     * @return TAanvraag2Persoon
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
    public function getVoorvoegsels()
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return TAanvraag2Persoon
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
    public function getAchternaam()
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return TAanvraag2Persoon
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
    public function getGeslacht()
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return TAanvraag2Persoon
     */
    public function withGeslacht($Geslacht)
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboortedatum()
    {
        return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return TAanvraag2Persoon
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
    public function getNationaliteit()
    {
        return $this->Nationaliteit;
    }

    /**
     * @param string $Nationaliteit
     * @return TAanvraag2Persoon
     */
    public function withNationaliteit($Nationaliteit)
    {
        $new = clone $this;
        $new->Nationaliteit = $Nationaliteit;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array
     */
    public function getRekeningnummers()
    {
        return $this->Rekeningnummers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array $Rekeningnummers
     * @return TAanvraag2Persoon
     */
    public function withRekeningnummers($Rekeningnummers)
    {
        $new = clone $this;
        $new->Rekeningnummers = $Rekeningnummers;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getBezoekadres()
    {
        return $this->Bezoekadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres
     * @return TAanvraag2Persoon
     */
    public function withBezoekadres($Bezoekadres)
    {
        $new = clone $this;
        $new->Bezoekadres = $Bezoekadres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getPostadres()
    {
        return $this->Postadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres
     * @return TAanvraag2Persoon
     */
    public function withPostadres($Postadres)
    {
        $new = clone $this;
        $new->Postadres = $Postadres;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieMail()
    {
        return $this->CorrespondentieMail;
    }

    /**
     * @param bool $CorrespondentieMail
     * @return TAanvraag2Persoon
     */
    public function withCorrespondentieMail($CorrespondentieMail)
    {
        $new = clone $this;
        $new->CorrespondentieMail = $CorrespondentieMail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieWeb()
    {
        return $this->CorrespondentieWeb;
    }

    /**
     * @param bool $CorrespondentieWeb
     * @return TAanvraag2Persoon
     */
    public function withCorrespondentieWeb($CorrespondentieWeb)
    {
        $new = clone $this;
        $new->CorrespondentieWeb = $CorrespondentieWeb;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact
     * @return TAanvraag2Persoon
     */
    public function withContact($Contact)
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray
     */
    public function getInkomen()
    {
        return $this->Inkomen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray $Inkomen
     * @return TAanvraag2Persoon
     */
    public function withInkomen($Inkomen)
    {
        $new = clone $this;
        $new->Inkomen = $Inkomen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray
     */
    public function getUitgaven()
    {
        return $this->Uitgaven;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray $Uitgaven
     * @return TAanvraag2Persoon
     */
    public function withUitgaven($Uitgaven)
    {
        $new = clone $this;
        $new->Uitgaven = $Uitgaven;

        return $new;
    }


}


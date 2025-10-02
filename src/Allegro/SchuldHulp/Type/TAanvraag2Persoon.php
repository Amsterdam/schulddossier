<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TAanvraag2Persoon implements RequestInterface
{
    /**
     * @var int
     */
    private int $Relatiecode;

    /**
     * @var int
     */
    private int $BSN;

    /**
     * @var string
     */
    private string $Voornamen;

    /**
     * @var null | string
     */
    private ?string $Voorletters = null;

    /**
     * @var null | string
     */
    private ?string $Voorvoegsels = null;

    /**
     * @var string
     */
    private string $Achternaam;

    /**
     * @var string
     */
    private string $Geslacht;

    /**
     * @var int
     */
    private int $Geboortedatum;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array $Rekeningnummers = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres = null;

    /**
     * @var bool
     */
    private bool $CorrespondentieMail;

    /**
     * @var bool
     */
    private bool $CorrespondentieWeb;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray $Inkomen = null;

    /**
     * @var null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray
     */
    private ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray $Uitgaven = null;

    /**
     * Constructor
     *
     * @param int $Relatiecode
     * @param int $BSN
     * @param string $Voornamen
     * @param null | string $Voorletters
     * @param null | string $Voorvoegsels
     * @param string $Achternaam
     * @param string $Geslacht
     * @param int $Geboortedatum
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array $Rekeningnummers
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres
     * @param bool $CorrespondentieMail
     * @param bool $CorrespondentieWeb
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray $Inkomen
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray $Uitgaven
     */
    public function __construct(int $Relatiecode, int $BSN, string $Voornamen, ?string $Voorletters, ?string $Voorvoegsels, string $Achternaam, string $Geslacht, int $Geboortedatum, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array $Rekeningnummers, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres, bool $CorrespondentieMail, bool $CorrespondentieWeb, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray $Inkomen, ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray $Uitgaven)
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
    public function getRelatiecode() : int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode) : static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

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
     * @return null | string
     */
    public function getVoorletters() : ?string
    {
        return $this->Voorletters;
    }

    /**
     * @param null | string $Voorletters
     * @return static
     */
    public function withVoorletters(?string $Voorletters) : static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return null | string
     */
    public function getVoorvoegsels() : ?string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param null | string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(?string $Voorvoegsels) : static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

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
     * @return int
     */
    public function getGeboortedatum() : int
    {
        return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return static
     */
    public function withGeboortedatum(int $Geboortedatum) : static
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit
     */
    public function getNationaliteit() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit
    {
        return $this->Nationaliteit;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit
     * @return static
     */
    public function withNationaliteit(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\ENationaliteit $Nationaliteit) : static
    {
        $new = clone $this;
        $new->Nationaliteit = $Nationaliteit;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array
     */
    public function getRekeningnummers() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array
    {
        return $this->Rekeningnummers;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array $Rekeningnummers
     * @return static
     */
    public function withRekeningnummers(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\Rekeningnummer2Array $Rekeningnummers) : static
    {
        $new = clone $this;
        $new->Rekeningnummers = $Rekeningnummers;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getBezoekadres() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
    {
        return $this->Bezoekadres;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres
     * @return static
     */
    public function withBezoekadres(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Bezoekadres) : static
    {
        $new = clone $this;
        $new->Bezoekadres = $Bezoekadres;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
     */
    public function getPostadres() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres
    {
        return $this->Postadres;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres
     * @return static
     */
    public function withPostadres(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TAdres $Postadres) : static
    {
        $new = clone $this;
        $new->Postadres = $Postadres;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieMail() : bool
    {
        return $this->CorrespondentieMail;
    }

    /**
     * @param bool $CorrespondentieMail
     * @return static
     */
    public function withCorrespondentieMail(bool $CorrespondentieMail) : static
    {
        $new = clone $this;
        $new->CorrespondentieMail = $CorrespondentieMail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieWeb() : bool
    {
        return $this->CorrespondentieWeb;
    }

    /**
     * @param bool $CorrespondentieWeb
     * @return static
     */
    public function withCorrespondentieWeb(bool $CorrespondentieWeb) : static
    {
        $new = clone $this;
        $new->CorrespondentieWeb = $CorrespondentieWeb;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact
     */
    public function getContact() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact
    {
        return $this->Contact;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact
     * @return static
     */
    public function withContact(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\TContact $Contact) : static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray
     */
    public function getInkomen() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray
    {
        return $this->Inkomen;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray $Inkomen
     * @return static
     */
    public function withInkomen(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\InkomenArray $Inkomen) : static
    {
        $new = clone $this;
        $new->Inkomen = $Inkomen;

        return $new;
    }

    /**
     * @return null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray
     */
    public function getUitgaven() : ?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray
    {
        return $this->Uitgaven;
    }

    /**
     * @param null | \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray $Uitgaven
     * @return static
     */
    public function withUitgaven(?\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\UitgavenArray $Uitgaven) : static
    {
        $new = clone $this;
        $new->Uitgaven = $Uitgaven;

        return $new;
    }
}


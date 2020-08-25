<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt;

class TAanvraag2Persoon
{

    /**
     * @var int $Relatiecode
     */
    protected $Relatiecode = null;

    /**
     * @var int $BSN
     */
    protected $BSN = null;

    /**
     * @var string $Voornamen
     */
    protected $Voornamen = null;

    /**
     * @var string $Voorletters
     */
    protected $Voorletters = null;

    /**
     * @var string $Voorvoegsels
     */
    protected $Voorvoegsels = null;

    /**
     * @var string $Achternaam
     */
    protected $Achternaam = null;

    /**
     * @var string $Geslacht
     */
    protected $Geslacht = null;

    /**
     * @var int $Geboortedatum
     */
    protected $Geboortedatum = null;

    /**
     * @var eNationaliteit $Nationaliteit
     */
    protected $Nationaliteit = null;

    /**
     * @var Rekeningnummer2Array $Rekeningnummers
     */
    protected $Rekeningnummers = null;

    /**
     * @var TAdres $Bezoekadres
     */
    protected $Bezoekadres = null;

    /**
     * @var TAdres $Postadres
     */
    protected $Postadres = null;

    /**
     * @var boolean $CorrespondentieMail
     */
    protected $CorrespondentieMail = null;

    /**
     * @var boolean $CorrespondentieWeb
     */
    protected $CorrespondentieWeb = null;

    /**
     * @var TContact $Contact
     */
    protected $Contact = null;

    /**
     * @var InkomenArray $Inkomen
     */
    protected $Inkomen = null;

    /**
     * @var UitgavenArray $Uitgaven
     */
    protected $Uitgaven = null;

    /**
     * @param int $Relatiecode
     * @param int $BSN
     * @param string $Voornamen
     * @param string $Achternaam
     * @param string $Geslacht
     * @param int $Geboortedatum
     * @param eNationaliteit $Nationaliteit
     * @param boolean $CorrespondentieMail
     * @param boolean $CorrespondentieWeb
     */
    public function __construct($Relatiecode, $BSN, $Voornamen, $Achternaam, $Geslacht, $Geboortedatum, $Nationaliteit, $CorrespondentieMail, $CorrespondentieWeb)
    {
      $this->Relatiecode = $Relatiecode;
      $this->BSN = $BSN;
      $this->Voornamen = $Voornamen;
      $this->Achternaam = $Achternaam;
      $this->Geslacht = $Geslacht;
      $this->Geboortedatum = $Geboortedatum;
      $this->Nationaliteit = $Nationaliteit;
      $this->CorrespondentieMail = $CorrespondentieMail;
      $this->CorrespondentieWeb = $CorrespondentieWeb;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setRelatiecode($Relatiecode)
    {
      $this->Relatiecode = $Relatiecode;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setBSN($BSN)
    {
      $this->BSN = $BSN;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setVoorletters($Voorletters)
    {
      $this->Voorletters = $Voorletters;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setVoorvoegsels($Voorvoegsels)
    {
      $this->Voorvoegsels = $Voorvoegsels;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setAchternaam($Achternaam)
    {
      $this->Achternaam = $Achternaam;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setGeslacht($Geslacht)
    {
      $this->Geslacht = $Geslacht;
      return $this;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setGeboortedatum($Geboortedatum)
    {
      $this->Geboortedatum = $Geboortedatum;
      return $this;
    }

    /**
     * @return eNationaliteit
     */
    public function getNationaliteit()
    {
      return $this->Nationaliteit;
    }

    /**
     * @param eNationaliteit $Nationaliteit
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setNationaliteit($Nationaliteit)
    {
      $this->Nationaliteit = $Nationaliteit;
      return $this;
    }

    /**
     * @return Rekeningnummer2Array
     */
    public function getRekeningnummers()
    {
      return $this->Rekeningnummers;
    }

    /**
     * @param Rekeningnummer2Array $Rekeningnummers
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setRekeningnummers($Rekeningnummers)
    {
      $this->Rekeningnummers = $Rekeningnummers;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getBezoekadres()
    {
      return $this->Bezoekadres;
    }

    /**
     * @param TAdres $Bezoekadres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setBezoekadres($Bezoekadres)
    {
      $this->Bezoekadres = $Bezoekadres;
      return $this;
    }

    /**
     * @return TAdres
     */
    public function getPostadres()
    {
      return $this->Postadres;
    }

    /**
     * @param TAdres $Postadres
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setPostadres($Postadres)
    {
      $this->Postadres = $Postadres;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrespondentieMail()
    {
      return $this->CorrespondentieMail;
    }

    /**
     * @param boolean $CorrespondentieMail
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setCorrespondentieMail($CorrespondentieMail)
    {
      $this->CorrespondentieMail = $CorrespondentieMail;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCorrespondentieWeb()
    {
      return $this->CorrespondentieWeb;
    }

    /**
     * @param boolean $CorrespondentieWeb
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setCorrespondentieWeb($CorrespondentieWeb)
    {
      $this->CorrespondentieWeb = $CorrespondentieWeb;
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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setContact($Contact)
    {
      $this->Contact = $Contact;
      return $this;
    }

    /**
     * @return InkomenArray
     */
    public function getInkomen()
    {
      return $this->Inkomen;
    }

    /**
     * @param InkomenArray $Inkomen
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setInkomen($Inkomen)
    {
      $this->Inkomen = $Inkomen;
      return $this;
    }

    /**
     * @return UitgavenArray
     */
    public function getUitgaven()
    {
      return $this->Uitgaven;
    }

    /**
     * @param UitgavenArray $Uitgaven
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpAlt\TAanvraag2Persoon
     */
    public function setUitgaven($Uitgaven)
    {
      $this->Uitgaven = $Uitgaven;
      return $this;
    }

}

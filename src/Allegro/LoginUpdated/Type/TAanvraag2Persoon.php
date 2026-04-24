<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TAanvraag2Persoon
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
     * @var string
     */
    private string $Voorletters;

    /**
     * @var string
     */
    private string $Voorvoegsels;

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
     * @var 'Leeg' | 'Nederlandse' | 'Anders'
     */
    private string $Nationaliteit;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\Rekeningnummer2Array
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\Rekeningnummer2Array $Rekeningnummers;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $Bezoekadres;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $Postadres;

    /**
     * @var bool
     */
    private bool $CorrespondentieMail;

    /**
     * @var bool
     */
    private bool $CorrespondentieWeb;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContact
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContact $Contact;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\InkomenArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\InkomenArray $Inkomen;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\UitgavenArray
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\UitgavenArray $Uitgaven;

    /**
     * @return int
     */
    public function getRelatiecode(): int
    {
        return $this->Relatiecode;
    }

    /**
     * @param int $Relatiecode
     * @return static
     */
    public function withRelatiecode(int $Relatiecode): static
    {
        $new = clone $this;
        $new->Relatiecode = $Relatiecode;

        return $new;
    }

    /**
     * @return int
     */
    public function getBSN(): int
    {
        return $this->BSN;
    }

    /**
     * @param int $BSN
     * @return static
     */
    public function withBSN(int $BSN): static
    {
        $new = clone $this;
        $new->BSN = $BSN;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoornamen(): string
    {
        return $this->Voornamen;
    }

    /**
     * @param string $Voornamen
     * @return static
     */
    public function withVoornamen(string $Voornamen): static
    {
        $new = clone $this;
        $new->Voornamen = $Voornamen;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorletters(): string
    {
        return $this->Voorletters;
    }

    /**
     * @param string $Voorletters
     * @return static
     */
    public function withVoorletters(string $Voorletters): static
    {
        $new = clone $this;
        $new->Voorletters = $Voorletters;

        return $new;
    }

    /**
     * @return string
     */
    public function getVoorvoegsels(): string
    {
        return $this->Voorvoegsels;
    }

    /**
     * @param string $Voorvoegsels
     * @return static
     */
    public function withVoorvoegsels(string $Voorvoegsels): static
    {
        $new = clone $this;
        $new->Voorvoegsels = $Voorvoegsels;

        return $new;
    }

    /**
     * @return string
     */
    public function getAchternaam(): string
    {
        return $this->Achternaam;
    }

    /**
     * @param string $Achternaam
     * @return static
     */
    public function withAchternaam(string $Achternaam): static
    {
        $new = clone $this;
        $new->Achternaam = $Achternaam;

        return $new;
    }

    /**
     * @return string
     */
    public function getGeslacht(): string
    {
        return $this->Geslacht;
    }

    /**
     * @param string $Geslacht
     * @return static
     */
    public function withGeslacht(string $Geslacht): static
    {
        $new = clone $this;
        $new->Geslacht = $Geslacht;

        return $new;
    }

    /**
     * @return int
     */
    public function getGeboortedatum(): int
    {
        return $this->Geboortedatum;
    }

    /**
     * @param int $Geboortedatum
     * @return static
     */
    public function withGeboortedatum(int $Geboortedatum): static
    {
        $new = clone $this;
        $new->Geboortedatum = $Geboortedatum;

        return $new;
    }

    /**
     * @return 'Leeg' | 'Nederlandse' | 'Anders'
     */
    public function getNationaliteit(): string
    {
        return $this->Nationaliteit;
    }

    /**
     * @param 'Leeg' | 'Nederlandse' | 'Anders' $Nationaliteit
     * @return static
     */
    public function withNationaliteit(string $Nationaliteit): static
    {
        $new = clone $this;
        $new->Nationaliteit = $Nationaliteit;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\Rekeningnummer2Array
     */
    public function getRekeningnummers(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\Rekeningnummer2Array
    {
        return $this->Rekeningnummers;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\Rekeningnummer2Array $Rekeningnummers
     * @return static
     */
    public function withRekeningnummers(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\Rekeningnummer2Array $Rekeningnummers): static
    {
        $new = clone $this;
        $new->Rekeningnummers = $Rekeningnummers;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    public function getBezoekadres(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
    {
        return $this->Bezoekadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $Bezoekadres
     * @return static
     */
    public function withBezoekadres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $Bezoekadres): static
    {
        $new = clone $this;
        $new->Bezoekadres = $Bezoekadres;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
     */
    public function getPostadres(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres
    {
        return $this->Postadres;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $Postadres
     * @return static
     */
    public function withPostadres(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TAdres $Postadres): static
    {
        $new = clone $this;
        $new->Postadres = $Postadres;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieMail(): bool
    {
        return $this->CorrespondentieMail;
    }

    /**
     * @param bool $CorrespondentieMail
     * @return static
     */
    public function withCorrespondentieMail(bool $CorrespondentieMail): static
    {
        $new = clone $this;
        $new->CorrespondentieMail = $CorrespondentieMail;

        return $new;
    }

    /**
     * @return bool
     */
    public function getCorrespondentieWeb(): bool
    {
        return $this->CorrespondentieWeb;
    }

    /**
     * @param bool $CorrespondentieWeb
     * @return static
     */
    public function withCorrespondentieWeb(bool $CorrespondentieWeb): static
    {
        $new = clone $this;
        $new->CorrespondentieWeb = $CorrespondentieWeb;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContact
     */
    public function getContact(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContact
    {
        return $this->Contact;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContact $Contact
     * @return static
     */
    public function withContact(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TContact $Contact): static
    {
        $new = clone $this;
        $new->Contact = $Contact;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\InkomenArray
     */
    public function getInkomen(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\InkomenArray
    {
        return $this->Inkomen;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\InkomenArray $Inkomen
     * @return static
     */
    public function withInkomen(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\InkomenArray $Inkomen): static
    {
        $new = clone $this;
        $new->Inkomen = $Inkomen;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\UitgavenArray
     */
    public function getUitgaven(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\UitgavenArray
    {
        return $this->Uitgaven;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\UitgavenArray $Uitgaven
     * @return static
     */
    public function withUitgaven(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\UitgavenArray $Uitgaven): static
    {
        $new = clone $this;
        $new->Uitgaven = $Uitgaven;

        return $new;
    }
}


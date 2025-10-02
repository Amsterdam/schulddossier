<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TGeslotenVraag implements RequestInterface
{
    /**
     * @var string
     */
    private string $Vraag;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg $Antwoord;

    /**
     * Constructor
     *
     * @param string $Vraag
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg $Antwoord
     */
    public function __construct(string $Vraag, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg $Antwoord)
    {
        $this->Vraag = $Vraag;
        $this->Antwoord = $Antwoord;
    }

    /**
     * @return string
     */
    public function getVraag() : string
    {
        return $this->Vraag;
    }

    /**
     * @param string $Vraag
     * @return static
     */
    public function withVraag(string $Vraag) : static
    {
        $new = clone $this;
        $new->Vraag = $Vraag;

        return $new;
    }

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg
     */
    public function getAntwoord() : \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg
    {
        return $this->Antwoord;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg $Antwoord
     * @return static
     */
    public function withAntwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type\EJaNeeLeeg $Antwoord) : static
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }
}


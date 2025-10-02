<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulp\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TJaNeeVraag implements RequestInterface
{
    /**
     * @var string
     */
    private string $Vraag;

    /**
     * @var bool
     */
    private bool $Antwoord;

    /**
     * Constructor
     *
     * @param string $Vraag
     * @param bool $Antwoord
     */
    public function __construct(string $Vraag, bool $Antwoord)
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
     * @return bool
     */
    public function getAntwoord() : bool
    {
        return $this->Antwoord;
    }

    /**
     * @param bool $Antwoord
     * @return static
     */
    public function withAntwoord(bool $Antwoord) : static
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }
}


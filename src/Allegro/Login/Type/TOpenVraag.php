<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class TOpenVraag
{
    /**
     * @var string
     */
    private string $Vraag;

    /**
     * @var string
     */
    private string $Antwoord;

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
     * @return string
     */
    public function getAntwoord() : string
    {
        return $this->Antwoord;
    }

    /**
     * @param string $Antwoord
     * @return static
     */
    public function withAntwoord(string $Antwoord) : static
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }
}


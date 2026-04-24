<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TGeslotenVraag
{
    /**
     * @var string
     */
    private string $Vraag;

    /**
     * @var 'Leeg' | 'Ja' | 'Nee'
     */
    private string $Antwoord;

    /**
     * @return string
     */
    public function getVraag(): string
    {
        return $this->Vraag;
    }

    /**
     * @param string $Vraag
     * @return static
     */
    public function withVraag(string $Vraag): static
    {
        $new = clone $this;
        $new->Vraag = $Vraag;

        return $new;
    }

    /**
     * @return 'Leeg' | 'Ja' | 'Nee'
     */
    public function getAntwoord(): string
    {
        return $this->Antwoord;
    }

    /**
     * @param 'Leeg' | 'Ja' | 'Nee' $Antwoord
     * @return static
     */
    public function withAntwoord(string $Antwoord): static
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }
}


<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TGeslotenVraag
{
    /**
     * @var string
     */
    private string $Vraag;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg $Antwoord;

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg
     */
    public function getAntwoord(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg
    {
        return $this->Antwoord;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg $Antwoord
     * @return static
     */
    public function withAntwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\EJaNeeLeeg $Antwoord): static
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }
}

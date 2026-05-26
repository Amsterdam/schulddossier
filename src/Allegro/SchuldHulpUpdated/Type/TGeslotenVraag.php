<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TGeslotenVraag
{
    /**
     * @var string
     */
    private string $Vraag;

    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EJaNeeLeeg
     */
    private \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EJaNeeLeeg $Antwoord;

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
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EJaNeeLeeg
     */
    public function getAntwoord(): \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EJaNeeLeeg
    {
        return $this->Antwoord;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EJaNeeLeeg $Antwoord
     * @return static
     */
    public function withAntwoord(\GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\EJaNeeLeeg $Antwoord): static
    {
        $new = clone $this;
        $new->Antwoord = $Antwoord;

        return $new;
    }
}


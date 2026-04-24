<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class TNieuws
{
    /**
     * @var string
     */
    private string $Titel;

    /**
     * @var string
     */
    private string $Inhoud;

    /**
     * @return string
     */
    public function getTitel(): string
    {
        return $this->Titel;
    }

    /**
     * @param string $Titel
     * @return static
     */
    public function withTitel(string $Titel): static
    {
        $new = clone $this;
        $new->Titel = $Titel;

        return $new;
    }

    /**
     * @return string
     */
    public function getInhoud(): string
    {
        return $this->Inhoud;
    }

    /**
     * @param string $Inhoud
     * @return static
     */
    public function withInhoud(string $Inhoud): static
    {
        $new = clone $this;
        $new->Inhoud = $Inhoud;

        return $new;
    }
}


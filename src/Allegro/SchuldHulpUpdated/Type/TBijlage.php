<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class TBijlage
{
    /**
     * AW_aSoortDocument in AllegroWebPortierConst
     *
     * @var 'Onbekend' | 'Formulier' | 'Resultaat' | 'Leningaanvraag' | 'DKaanvraag' | 'SRaanvraag'
     */
    private string $Soort;

    /**
     * @var string
     */
    private string $Extension;

    /**
     * @var mixed
     */
    private mixed $Bijlage;

    /**
     * @return 'Onbekend' | 'Formulier' | 'Resultaat' | 'Leningaanvraag' | 'DKaanvraag' | 'SRaanvraag'
     */
    public function getSoort(): string
    {
        return $this->Soort;
    }

    /**
     * @param 'Onbekend' | 'Formulier' | 'Resultaat' | 'Leningaanvraag' | 'DKaanvraag' | 'SRaanvraag' $Soort
     * @return static
     */
    public function withSoort(string $Soort): static
    {
        $new = clone $this;
        $new->Soort = $Soort;

        return $new;
    }

    /**
     * @return string
     */
    public function getExtension(): string
    {
        return $this->Extension;
    }

    /**
     * @param string $Extension
     * @return static
     */
    public function withExtension(string $Extension): static
    {
        $new = clone $this;
        $new->Extension = $Extension;

        return $new;
    }

    /**
     * @return mixed
     */
    public function getBijlage(): mixed
    {
        return $this->Bijlage;
    }

    /**
     * @param mixed $Bijlage
     * @return static
     */
    public function withBijlage(mixed $Bijlage): static
    {
        $new = clone $this;
        $new->Bijlage = $Bijlage;

        return $new;
    }
}


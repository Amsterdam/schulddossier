<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class CasusToelichtingArray
{
    /**
     * Als toelichting 4 met subtitel 0 wordt opgevraagd van een casus, en toelichting 4 bestaat uit 7 subtitels, komen dus 7 resultaten terug in de array:
     *  - Toelichting 4 met subtitel 1
     *  - Toelichting 4 met subtitel 2
     *  - Etc.
     *
     *  Bij deze resultaten zullen de gegevens Titel, TitelTitel, Medewerker en Datum allemaal gelijk zijn (ze betreffen immers allemaal toelichting 4).
     *
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusToelichting>
     */
    private array $TCasusToelichting;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusToelichting>
     */
    public function getTCasusToelichting() : array
    {
        return $this->TCasusToelichting;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TCasusToelichting> $TCasusToelichting
     * @return static
     */
    public function withTCasusToelichting(array $TCasusToelichting) : static
    {
        $new = clone $this;
        $new->TCasusToelichting = $TCasusToelichting;

        return $new;
    }
}


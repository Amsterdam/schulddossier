<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class BBROpdrachtArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBROpdracht>
     */
    private array $TBBROpdracht;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBROpdracht>
     */
    public function getTBBROpdracht() : array
    {
        return $this->TBBROpdracht;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TBBROpdracht> $TBBROpdracht
     * @return static
     */
    public function withTBBROpdracht(array $TBBROpdracht) : static
    {
        $new = clone $this;
        $new->TBBROpdracht = $TBBROpdracht;

        return $new;
    }
}


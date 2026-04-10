<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type;

class CasusDeelopdrachtArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusDeelopdracht
     */
    private $TCasusDeelopdracht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusDeelopdracht
     */
    public function getTCasusDeelopdracht()
    {
        return $this->TCasusDeelopdracht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\UpdatedSchuldhulp\Type\TCasusDeelopdracht $TCasusDeelopdracht
     * @return CasusDeelopdrachtArray
     */
    public function withTCasusDeelopdracht($TCasusDeelopdracht)
    {
        $new = clone $this;
        $new->TCasusDeelopdracht = $TCasusDeelopdracht;

        return $new;
    }
}


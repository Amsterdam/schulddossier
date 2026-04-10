<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type;

class CasusDeelopdrachtArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusDeelopdracht
     */
    private $TCasusDeelopdracht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusDeelopdracht
     */
    public function getTCasusDeelopdracht()
    {
        return $this->TCasusDeelopdracht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHuldUpdated\Type\TCasusDeelopdracht $TCasusDeelopdracht
     * @return CasusDeelopdrachtArray
     */
    public function withTCasusDeelopdracht($TCasusDeelopdracht)
    {
        $new = clone $this;
        $new->TCasusDeelopdracht = $TCasusDeelopdracht;

        return $new;
    }
}


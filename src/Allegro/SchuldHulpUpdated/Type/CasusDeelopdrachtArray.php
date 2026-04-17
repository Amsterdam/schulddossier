<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type;

class CasusDeelopdrachtArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusDeelopdracht
     */
    private $TCasusDeelopdracht;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusDeelopdracht
     */
    public function getTCasusDeelopdracht()
    {
        return $this->TCasusDeelopdracht;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\SchuldHulpUpdated\Type\TCasusDeelopdracht $TCasusDeelopdracht
     * @return CasusDeelopdrachtArray
     */
    public function withTCasusDeelopdracht($TCasusDeelopdracht)
    {
        $new = clone $this;
        $new->TCasusDeelopdracht = $TCasusDeelopdracht;

        return $new;
    }
}


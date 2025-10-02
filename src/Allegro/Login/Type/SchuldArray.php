<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class SchuldArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSchuld>
     */
    private array $TSchuld;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSchuld>
     */
    public function getTSchuld() : array
    {
        return $this->TSchuld;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TSchuld> $TSchuld
     * @return static
     */
    public function withTSchuld(array $TSchuld) : static
    {
        $new = clone $this;
        $new->TSchuld = $TSchuld;

        return $new;
    }
}


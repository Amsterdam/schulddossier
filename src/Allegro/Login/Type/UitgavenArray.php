<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type;

class UitgavenArray
{
    /**
     * @var array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven>
     */
    private array $TUitgaven;

    /**
     * @return array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven>
     */
    public function getTUitgaven() : array
    {
        return $this->TUitgaven;
    }

    /**
     * @param array<int<0,max>, \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\Login\Type\TUitgaven> $TUitgaven
     * @return static
     */
    public function withTUitgaven(array $TUitgaven) : static
    {
        $new = clone $this;
        $new->TUitgaven = $TUitgaven;

        return $new;
    }
}


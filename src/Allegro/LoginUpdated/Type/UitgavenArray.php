<?php

namespace GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type;

class UitgavenArray
{
    /**
     * @var \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TUitgaven
     */
    private $TUitgaven;

    /**
     * @return \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TUitgaven
     */
    public function getTUitgaven()
    {
        return $this->TUitgaven;
    }

    /**
     * @param \GemeenteAmsterdam\FixxxSchuldhulp\Allegro\LoginUpdated\Type\TUitgaven $TUitgaven
     * @return UitgavenArray
     */
    public function withTUitgaven($TUitgaven)
    {
        $new = clone $this;
        $new->TUitgaven = $TUitgaven;

        return $new;
    }
}

